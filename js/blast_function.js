
function addBlast(){
	let title = document.getElementById('blast_title').value;
	let text = document.getElementById('blast_text').value;
	let send_to = document.getElementById('blast_send_to').value;

	if(title == "" || text == "" || send_to == ""){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'Some fields are empty!'
		})
	}else{
		$.ajax({
			url:'../../backend/addBlast.php',
			method:'post',
			data:{
				text:text,
				title:title,
				send_to:send_to
			},
			success:function(result){
				
				console.log(result);
				
			}
		})

		$.ajax({
			url:'../../backend/sendMessage.php',
			method:'post',
			data:{
				text:text,
				title:title,
				send_to:send_to
			},
			beforeSend:function(){
				document.getElementById('blastBtn').innerHTML = 'Loading...';
			},
			success:function(result){
				document.getElementById('blastBtn').innerHTML = 'New Email Blast';
				console.log(result);
				Swal.fire({
					icon:'success',
					title:'Success',
					text:'New Job Added!'
				}).then(function(){
					destroyTable();
					loadTable();
					document.getElementById('addBlastCloseModal').click();
				})
			}
		})


	}
}