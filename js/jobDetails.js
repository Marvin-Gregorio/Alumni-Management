
window.onload = loadDetails();

function loadDetails(){
	let id = document.getElementById('jobDetailsId').value;

	$.ajax({
		url:'../../backend/getJobDetails.php',
		method:'post',
		data:{
			id:id
		},
		success:function(result){
			result = JSON.parse(result);
			console.log(result);

			document.getElementById('job_title').innerHTML = result[0].title;
			document.getElementById('job_name').innerHTML = result[0].name;
			document.getElementById('job_description').innerHTML = result[0].description;
			document.getElementById('job_qualification').innerHTML = result[0].qualification;
			document.getElementById('job_type').innerHTML = '<b>Job Type: </b>' + result[0].type;
			document.getElementById('job_salary').innerHTML = '<b>Salary : Php </b>' + result[0].salary;

		}
		
	})

}