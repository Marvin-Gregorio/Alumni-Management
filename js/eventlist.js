
window.onload = loadTable()

function loadTable(){

  var dataTable = $('#eventlist').DataTable();

  $.ajax({
    url: '../../Classes/Views/getEventList.php',
    dataType: 'json',
    success: function(data) {
      dataTable.clear().draw(); // Clear existing data
      $.each(data, function(index, value) {
        dataTable.row.add([
          value.name,
          value.place,
          value.date,
          value.time,
          value.description,
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
  $('#eventlist').DataTable().destroy();
}