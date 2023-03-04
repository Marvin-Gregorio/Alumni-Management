
function addJob(){
	let name = document.getElementById('addjob_name').value;
	let category = document.getElementById('addjob_category').value;
	let title = document.getElementById('addjob_title').value;
	let salary = document.getElementById('addjob_salary').value;
	let description = document.getElementById('addjob_description').value;
	let qualification = document.getElementById('addjob_qualification').value;
	let type = document.getElementById('addjob_type').value;

	if(name == "" || category == "" || title == "" || salary == "" || description == "" || qualification == "" || type == ""){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'Some fields are empty!'
		})
	}else{
		$.ajax({
			url:'../../backend/addJob.php',
			method:'post',
			data:{
				name:name,
				category:category,
				title:title,
				salary:salary,
				description:description,
				qualification:qualification,
				type:type
			},
			success:function(result){
				console.log(result);
				Swal.fire({
					icon:'success',
					title:'Success',
					text:'New Job Added!'
				}).then(function(){
					destroyTable();
					loadTable();
					document.getElementById('addJobCloseModal').click();
				})
			}
		})
	}
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
				url:'../../backend/removeJob.php',
				method:'post',
				data:{
					id:id
				},
				success:function(result){
					console.log(result);
					Swal.fire({
						icon:'success',
						title:'Success',
						text:'Job has been removed!'
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
		url:'../../backend/getJobDetails.php',
		method:'post',
		data:{
			id:id
		},
		success:function(result){
			result = JSON.parse(result);

			document.getElementById('updatejob_id').value = result[0].id;
			document.getElementById('updatejob_name').value = result[0].name;
			document.getElementById('updatejob_category').value = result[0].category;
			document.getElementById('updatejob_title').value = result[0].title;
			document.getElementById('updatejob_salary').value = result[0].salary;
			document.getElementById('updatejob_description').value = result[0].description;
			document.getElementById('updatejob_qualification').value = result[0].qualification;
			document.getElementById('updatejob_type').value = result[0].type;
				
		}
	})
}

function updateJob(){

	let id = document.getElementById('updatejob_id').value;
	let name = document.getElementById('updatejob_name').value;
	let category = document.getElementById('updatejob_category').value;
	let title = document.getElementById('updatejob_title').value;
	let salary = document.getElementById('updatejob_salary').value;
	let description = document.getElementById('updatejob_description').value;
	let qualification = document.getElementById('updatejob_qualification').value;
	let type = document.getElementById('updatejob_type').value;

	$.ajax({
		url:'../../backend/updateJob.php',
		method:'post',
		data:{
			id:id,
			name:name,
			category:category,
			title:title,
			salary:salary,
			description:description,
			qualification:qualification,
			type:type
		},
		success:function(result){
			console.log(result);
			Swal.fire({
				icon:'success',
				title:'Success',
				text:'Job Details Updated!'
			}).then(function(){
				destroyTable();
				loadTable();
				document.getElementById('updateJobCloseModal').click();
			})
		}
	})
}