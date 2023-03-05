
window.onload = loadTable()

function loadTable(){

  var dataTable = $('#eventstable').DataTable();

  $.ajax({
    url: '../../Classes/Views/getAlumniEventList.php',
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
  $('#eventstable').DataTable().destroy();
}

function addLike(id){
  $.ajax({
    url:'../../backend/likeAnEvent.php',
    method:'post',
    data:{
      id:id
    },
    success:function(result){
      console.log(result);
      destroyTable();
      loadTable();
      
      Swal.fire({
        icon:'success',
        title:'Successful...',
        text:'Event Liked!'
      })


    }
  })
}