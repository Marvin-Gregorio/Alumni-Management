document.onload = load_forum();

function new_thread(){
	let text = document.getElementById('forum_text').value;

	$.ajax({
		url:'../../backend/sendMessage.php',
		method:'post',
		data:{text:text},
		beforeSend:function(){
			document.getElementById('spinner').style.display = 'inline-block';
		},
		success:function(data){
			document.getElementById('spinner').style.display = 'none';
			Swal.fire({
				icon: 'success',
				title: 'Successful...',
				text: 'Message Sent!'
			})
			console.log(data);
			load_forum();
			document.getElementById('closeThread').click();
		}
	})
}

function load_forum(){
	$.ajax({
		url:'../../classes/views/getForums.php',
		success:function(data){
			document.getElementById('forum_field').innerHTML = data;
		}
	})
}