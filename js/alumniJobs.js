window.onload = loadJobs();

function loadJobs(){
	$.ajax({
		url:'../../classes/views/getAlumniJobs.php',
		success:function(result){
			console.log(result);
			document.getElementById('jobContainer').innerHTML = result;
		}
	})
}

function categoryFilter(search_data){

  	$.ajax({
		url:'../../classes/views/getCategoryAlumniJobs.php',
		method:'post',
		data:{
			search_data:search_data
		},
		success:function(result){
			console.log(result);
			document.getElementById('jobContainer').innerHTML = result;
		}
	})
  
}

function jobTypeFilter(search_data){
  
	$.ajax({
		url:'../../classes/views/getTypeAlumniJobs.php',
		method:'post',
		data:{
			search_data:search_data
		},
		success:function(result){
			console.log(result);
			document.getElementById('jobContainer').innerHTML = result;
		}
	})

}
