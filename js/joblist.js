
window.onload = loadTable()

function loadTable(){

  var dataTable = $('#joblist').DataTable();

  $.ajax({
    url: '../../Classes/Views/getJobList.php',
    dataType: 'json',
    success: function(data) {
      dataTable.clear().draw(); // Clear existing data
      $.each(data, function(index, value) {
        dataTable.row.add([
          value.name,
          value.category,
          value.title,
          value.salary,
          value.type,
          value.action
                      // Add additional columns as needed
          ]).draw(false);
      });
    },
    error: function() {
      alert('Error fetching data.');
    }
  });

}

function categoryFilter(search_data){
  var dataTable = $('#joblist').DataTable();

  $.ajax({
    url: '../../Classes/Views/getCategoryJobList.php',
    method:'post',
    data:{
      search_data:search_data
    },
    dataType: 'json',
    success: function(data) {
      dataTable.clear().draw(); // Clear existing data
      $.each(data, function(index, value) {
        dataTable.row.add([
          value.name,
          value.category,
          value.title,
          value.salary,
          value.type,
          value.action
                      // Add additional columns as needed
          ]).draw(false);
      });
    },
    error: function() {
      alert('Error fetching data.');
    }
  });
}

function jobTypeFilter(search_data){
  var dataTable = $('#joblist').DataTable();

  $.ajax({
    url: '../../Classes/Views/getTypeJobList.php',
    method:'post',
    data:{
      search_data:search_data
    },
    dataType: 'json',
    success: function(data) {
      dataTable.clear().draw(); // Clear existing data
      $.each(data, function(index, value) {
        dataTable.row.add([
          value.name,
          value.category,
          value.title,
          value.salary,
          value.type,
          value.action
                      // Add additional columns as needed
          ]).draw(false);
      });
    },
    error: function() {
      alert('Error fetching data.');
    }
  });
}

function destroyTable(){
  $('#joblist').DataTable().destroy();
}