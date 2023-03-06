var dataTable = $('#myTable').DataTable();

$.ajax({
    url: '../../Classes/Views/getAlumniList.php',
    dataType: 'json',
    success: function(data) {
        dataTable.clear().draw(); // Clear existing data
        $.each(data, function(index, value) {
            dataTable.row.add([
                value.first_name,
                value.last_name,
                value.email,
                value.phone,
                value.gender,
                value.action
                // Add additional columns as needed
            ]).draw(false);
        });
    },
    error: function() {
        alert('Error fetching data.');
    }
});