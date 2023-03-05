
let cba = 0;
let ccs = 0;
let cased = 0;
let con = 0;
let coa = 0;
let coe = 0;

$.ajax({
    url:'../../backend/getJobsCount.php',
    success:function(result){
        document.getElementById('jobs_posted').innerHTML = result;
    }
})

$.ajax({
    url:'../../backend/getEventsCount.php',
    success:function(result){
        document.getElementById('events_posted').innerHTML = result;
    }
})

$.ajax({
    url:'../../backend/getNewUsersCount.php',
    success:function(result){
        document.getElementById('new_user_count').innerHTML = result;
    }
})

//user
$.ajax({
    url:'../../backend/getUserCount.php',
    success:function(result){
        result = JSON.parse(result);
        cba = result[0].cba;
        con = result[0].con;
        ccs = result[0].ccs;
        coa = result[0].coa;
        coe = result[0].coe;
        cased = result[0].cased;
        document.getElementById('totaluser').innerHTML = result[0].total;
        document.getElementById('totalstaff').innerHTML = result[0].staff;
        loadUser();
    }   
})

//dailySession
$.ajax({
    url:'../../backend/getDailyCount.php',
    success:function(result){
        result = JSON.parse(result);
        cba = result[0].cba;
        con = result[0].con;
        ccs = result[0].ccs;
        coa = result[0].coa;
        coe = result[0].coe;
        cased = result[0].cased;
        document.getElementById('dailyDate').innerHTML = result[0].date;
        document.getElementById('dailyTotal').innerHTML = result[0].total;
        loadDaily();
    }   
})

//MonthlySession
$.ajax({
    url:'../../backend/getMonthlyCount.php',
    success:function(result){
        result = JSON.parse(result);
        cba = result[0].cba;
        con = result[0].con;
        ccs = result[0].ccs;
        coa = result[0].coa;
        coe = result[0].coe;
        cased = result[0].cased;
        document.getElementById('monthlyDate').innerHTML = result[0].date;
        document.getElementById('monthlyTotal').innerHTML = result[0].total;
        loadMonthly();
    }   
})

//YearlySession
$.ajax({
    url:'../../backend/getYearlyCount.php',
    success:function(result){
        result = JSON.parse(result);
        cba = result[0].cba;
        con = result[0].con;
        ccs = result[0].ccs;
        coa = result[0].coa;
        coe = result[0].coe;
        cased = result[0].cased;
        document.getElementById('yearlyDate').innerHTML = result[0].date;
        document.getElementById('yearlyTotal').innerHTML = result[0].total;
        loadYearly();
    }   
})

//emailBlast
$.ajax({
    url:'../../backend/getEmailCount.php',
    success:function(result){
        result = JSON.parse(result);
        cba = result[0].cba;
        con = result[0].con;
        ccs = result[0].ccs;
        coa = result[0].coa;
        coe = result[0].coe;
        cased = result[0].cased;
        document.getElementById('totalBlast').innerHTML = result[0].total;
        emailBlast();
    }
})


function loadUser(){

    var ctx = document.getElementById('alumni').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['CBA', 'CASED', 'CCS', 'COE', 'COA', 'CON'],
            datasets: [{
                label: 'Number of Alumni',
                data: [cba,cased,ccs,coe,coa,con],
                backgroundColor: [
                    '#ffea00',
                    '#1565c0',
                    '#6a1b9a',
                    '#b71c1c',
                    '#d50000',
                    '#1b5e20',
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

}

// -------------------------------

function loadDaily(){

    var ctx = document.getElementById('attend').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['CBA', 'CASED', 'CCS', 'COE', 'COA', 'CON'],
            datasets: [{
                label: 'NUMBER OF ALUMNI ATTENDEE',
                data: [cba,cased,ccs,coe,coa,con],
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
}

function loadMonthly(){

    var ctx = document.getElementById('monthly').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['CBA', 'CASED', 'CCS', 'COE', 'COA', 'CON'],
            datasets: [{
                label: 'NUMBER OF ALUMNI ATTENDEE',
                data: [cba,cased,ccs,coe,coa,con],
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
}


function loadYearly(){

    var ctx = document.getElementById('yearly').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['CBA', 'CASED', 'CCS', 'COE', 'COA', 'CON'],
            datasets: [{
                label: 'NUMBER OF ALUMNI ATTENDEE',
                data: [cba,cased,ccs,coe,coa,con],
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
}

//email blast
function emailBlast(){

    var ctx = document.getElementById('email_blast').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['CBA', 'CASED', 'CCS', 'COE', 'COA', 'CON'],
            datasets: [{
                label: 'Number of Emails Sent',
                data: [cba,cased,ccs,coe,coa,con],
                backgroundColor: [
                    '#ffea00',
                    '#1565c0',
                    '#6a1b9a',
                    '#b71c1c',
                    '#d50000',
                    '#1b5e20',
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

}
