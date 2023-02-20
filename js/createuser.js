
function createUser(){
	let f_name = document.getElementById('f_name').value;
	let m_name = document.getElementById('m_name').value;
	let l_name = document.getElementById('l_name').value;
	let email = document.getElementById('email').value;
	let cp_number = document.getElementById('cp_number').value;
	let b_day = document.getElementById('b_day').value;
	let username = document.getElementById('c_username').value;
	let pass = document.getElementById('n_pass').value;
	let c_pass = document.getElementById('c_pass').value;
	let gender = document.getElementById('gender').value;
	let status = document.getElementById('status').value;
	let dept = document.getElementById('dept').value;

	if(pass != c_pass){
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'Password Not Match!'
		}).then(function(){
			document.getElementById('n_pass').classList.add('border-danger');
			document.getElementById('c_pass').classList.add('border-danger');
			document.getElementById('n_pass').value = "";
			document.getElementById('c_pass').value = "";

		})
	}else if(pass == "" || c_pass == ""){
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'Make sure that all fields are answered!'
		})
	}else{
		document.getElementById('n_pass').classList.remove('border-danger');
		document.getElementById('c_pass').classList.remove('border-danger');
		$.ajax({
			url:'backend/createUser.php',
			method:'post',
			data:{
				f_name:f_name,
				m_name:m_name,
				l_name:l_name,
				email:email,
				cp_number:cp_number,
				b_day:b_day,
				username:username,
				pass:pass,
				c_pass:c_pass,
				gender:gender,
				status:status
			},
			success:function(result){
				Swal.fire({
					icon: 'success',
					title: 'Successful...',
					text: 'User created successfully!'
				}).then(function(){
			       	
			        document.getElementById('closemodal').click();
				})
			}
		})
	}
}