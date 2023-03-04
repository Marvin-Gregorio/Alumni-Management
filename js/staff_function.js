
function addStaff(){
	let fname = document.getElementById('first_name').value;
	let mname = document.getElementById('middle_name').value;
	let lname = document.getElementById('last_name').value;
	let email = document.getElementById('email').value;
	let cp = document.getElementById('cp').value;
	let birth = document.getElementById('birth').value;
	let username = document.getElementById('username').value;
	let gender = document.getElementById('gender').value;
	let password = document.getElementById('password').value;

	$.ajax({
		url:'../../backend/addStaff.php',
		method:'post',
		data:{
			fname:fname,
			mname:mname,
			lname:lname,
			email:email,
			cp:cp,
			birth:birth,
			username:username,
			gender:gender,
			password:password
		},
		success:function(result){
			console.log(result);
			Swal.fire({
				icon:'success',
				title:'Successful',
				text:'Staff Added!'
			}).then(function(){
				destroyTable();
				loadTable();
				document.getElementById('addJobCloseModal').click();
			})
		}

	})
	
}

function removeRow(id){

	Swal.fire({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url:'../../backend/deleteUser.php',
				method:'post',
				data:{
					id:id
				},
				success:function(result){
					console.log(result);
					Swal.fire({
						icon:'success',
						title:'Success',
						text:'User has been removed!'
					}).then(function(){
						destroyTable();
						loadTable();
					})
				}
			})
		}
	})
	
}

function displayData(id){

	console.log(id);
	$.ajax({
		url:'../../backend/getUserDetails.php',
		method:'post',
		data:{
			id:id
		},
		success:function(result){
			result = JSON.parse(result);
			document.getElementById('update_first_name').value = result[0].first_name;
			document.getElementById('update_middle_name').value = result[0].middle_name;
			document.getElementById('update_last_name').value = result[0].last_name;
			document.getElementById('update_email').value = result[0].email;
			document.getElementById('update_cp').value = result[0].cp;
			document.getElementById('update_birth').value = result[0].b_day;
			document.getElementById('update_username').value = result[0].username;
			document.getElementById('update_gender').value = result[0].gender;
			document.getElementById('update_id').value = result[0].id;
		}
	})
}

function updateJob(){

	let fname = document.getElementById('update_first_name').value;
	let mname = document.getElementById('update_middle_name').value;
	let lname = document.getElementById('update_last_name').value;
	let email = document.getElementById('update_email').value;
	let cp = document.getElementById('update_cp').value;
	let birth = document.getElementById('update_birth').value;
	let username = document.getElementById('update_username').value;
	let gender = document.getElementById('update_gender').value;
	let id = document.getElementById('update_id').value;

	$.ajax({
		url:'../../backend/updateStaff.php',
		method:'post',
		data:{
			id:id,
			fname:fname,
			mname:mname,
			lname:lname,
			email:email,
			cp:cp,
			birth:birth,
			username:username,
			gender:gender
		},
		success:function(result){
			console.log(result);
			Swal.fire({
				icon:'success',
				title:'Success',
				text:'User Details Updated!'
			}).then(function(){
				destroyTable();
				loadTable();
				document.getElementById('updateJobCloseModal').click();
			})
		}
	})
}