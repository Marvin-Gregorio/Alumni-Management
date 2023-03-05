function sendPassword(){
	let username = document.getElementById('password_username').value;

	if(username != ""){
		$.ajax({
			url:'backend/sendPasswordRecovery.php',
			method:'post',
			data:{
				username:username
			},
			success:function(result){
				console.log(result);
				if(result == 'notfound'){
					Swal.fire({
						icon:'error',
						title:'Ooops...',
						text:'Username not found!'
					})
				}else{
					Swal.fire({
						icon:'success',
						title:'Successful...',
						text:'Password has been sent to your email!'
					})
				}
			}
		})
	}else{
		Swal.fire({
			icon:'error',
			title:'Ooops...',
			text:'Input field is empty!'
		})
	}
}