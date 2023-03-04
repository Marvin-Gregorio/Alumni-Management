// This is Dashboard
var ctx = document.getElementById('alumni').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['BasicEdu','CBA', 'CASED', 'CCS', 'COE', 'COA', 'CON','GradSchool'],
        datasets: [{
            label: 'NUMBER OF ALUMNI ATTENDEE',
            data: [300, 300, 100, 400, 500, 600, 900, 1000],
            backgroundColor: [
                '#ffea00',
                '#1565c0',
                '#6a1b9a',
                '#b71c1c',
                '#d50000',
                '#1b5e20',
                '#e0e0dd',
                '#ffeeee'
            ],
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

$(document).ready(function () {
    $('#example').DataTable();
});

// -------------------------------

var ctx = document.getElementById('attend').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['BasicEdu','CBA', 'CASED', 'CCS', 'COE', 'COA', 'CON','GradSchool'],
        datasets: [{
            label: 'NUMBER OF ALUMNI ATTENDEE',
            data: [300, 300, 100, 400, 500, 600, 900, 1000],
            backgroundColor: [
                '#ffea00',
                '#1565c0',
                '#6a1b9a',
                '#b71c1c',
                '#d50000',
                '#1b5e20',
                '#e0e0dd',
                '#ffeeee'
            ],
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

$(document).ready(function () {
    $('#example').DataTable();
});

// Dashboard ends here