
window.onload = loadTable()

function loadTable(){

  var dataTable = $('#blastlist').DataTable();

  $.ajax({
    url: '../../Classes/Views/getBlastList.php',
    dataType: 'json',
    success: function(data) {
      dataTable.clear().draw(); // Clear existing data
      $.each(data, function(index, value) {
        dataTable.row.add([
          value.date,
          value.title,
          value.text,
          value.to
          ]).draw(false);
      });
    },
    error: function() {
      alert('Error fetching data.');
    }
  });

}

function destroyTable(){
  $('#blastlist').DataTable().destroy();
}