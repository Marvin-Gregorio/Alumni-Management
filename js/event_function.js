
function addEvent(){
	let name = document.getElementById('event_name').value;
	let place = document.getElementById('event_place').value;
	let description = document.getElementById('event_description').value;
	let date = document.getElementById('event_date').value;
	let time = document.getElementById('event_time').value;

	if(name == "" || place == "" || description == "" || date == "" || time == ""){

		Swal.fire({
			icon:'error',
			title:'Ooops...',
			text:'Some fields are empty!'
		})

	}else{
		$.ajax({
			url:'../../backend/addEvent.php',
			method:'post',
			data:{
				name:name,
				place:place,
				description:description,
				date:date,
				time:time
			},
			success:function(result){
				console.log(result);
				Swal.fire({
				  icon: 'success',
				  title: 'Successful...',
				  text: 'New Events added!'
				}).then(function(){
					destroyTable();
					loadTable();
					document.getElementById('addEventCloseModal').click();
				})
			}
		})
	}
}

function displayData(id){
	$.ajax({
		url:'../../backend/getEventDetails.php',
		method:'post',
		data:{
			id:id
		},
		success:function(result){
			result = JSON.parse(result);
			document.getElementById('update_event_id').value = result[0].id;
			document.getElementById('update_event_name').value = result[0].name;
			document.getElementById('update_event_place').value = result[0].place;
			document.getElementById('update_event_description').value = result[0].description;
			document.getElementById('update_event_date').value = result[0].date;
			document.getElementById('update_event_time').value = result[0].time;
		}
	})
}