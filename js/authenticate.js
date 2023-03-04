
function authenticateUser(){
	let username = document.getElementById('username').value;
	let password = document.getElementById('password').value;

	$.ajax({
		url:'backend/authenticate.php',
		method:'post',
		data:{username:username,password:password},
		success:function(result){
			console.log(result);
			if(result == 'pass'){
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Password Incorrect!'
				})
			}else if(result == 'username'){
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'User not found!'
				})
			}else{

				Swal.fire({
				  icon: 'success',
				  title: 'Success...',
				  text: 'Login Successful!'
				}).then(function(){
					if(result == 'ADMIN'){
						location.replace('pages/admin/admin-dashboard.php');
					}else if(result == 'STAFF'){
						location.replace('pages/staff/admin-dashboard.php');
					}else{
						location.replace('pages/alumni/alumni-dashboard.php');
					}
				})
			
			}
		}
	})
}