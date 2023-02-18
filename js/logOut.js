function logOut(){
	Swal.fire({
		icon: 'success',
		title: 'Successful...',
		text: 'Logout successfully!'
	}).then(function(){
		location.replace('../../backend/logout.php');
	})
}