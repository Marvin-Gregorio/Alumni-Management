// This is Educt Attainment Chart
new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Basic Edu", "CBA", "COE", "CCS", "COA", "CASED", "CON", "GradSchhool"],
      datasets: [
        {
          label: "NUMBER OF EDUCATIONAL ATTAINMENT'",
          backgroundColor: [
            '#023e8a',
            '#ffd60a',
            '#1b4332',
            '#3c096c',
            '#403d39',
            '#a4161a',
            '#00a6fb',
            '#ff9505'
          ],
          data: [2478,5267,734,784,433,990,1200,8000]
        }
      ]
    },
    options: {
      title: {
        display: true
      }
    }
});

// This is Civil Status Chart
new Chart(document.getElementById("polar-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Married", "Single", "Widow/Widower"],
      datasets: [
        {
          label: "TOTAL NUMBER OF CIVIL STATUS",
          backgroundColor: ["#ba181b", "#38b000","#ff7b00"],
          data: [33.33,33.33,33.33]
        }
      ]
    },
    options: {
      title: {
        display: true
      }
    }
});

// This is Gender Chart
new Chart(document.getElementById("pie-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Male", "Female"],
      datasets: [{
        label: "TOTAL NUMBER OF GENDER",
        backgroundColor: ["#00a6fb", "#ea698b"],
        data: [50,50]
      }]
    },
    options: {
      title: {
        display: true
      },
      legend: {
        position: 'right'
      }
    }
});

// This is Employee Chart
new Chart(document.getElementById("donutchart"), {
  type: 'doughnut',
  data: {
    labels: ["Employed By Others", "Self-Employed", "Both Employed and Self Employed", "Not Employed / Seeking Work"],
    datasets: [{
      label: "NUMBER OF EMPLOYMENT STATUS",
      backgroundColor: ["#00bbf9", "#00f5d4","#9b5de5","#f15bb5"],
      data: [2478,5267,734,784]
    }]
  },
  options: {
    title: {
      display: true,
      text: 'Predicted world population (millions) in 2050'
    }
  }
});

// This is img file
let imgInput = document.getElementById('imgInput');
let previewImg = document.getElementById('previewImg');

imgInput.onchange = evt => {
  const [file] = imgInput.files;
  if(file){
    previewImg.src = URL.createObjectURL(file);
  }
}


// ------------------------------

var ctx = document.getElementById('bar').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['BasicEdu','CBA', 'CASED', 'CCS', 'COE', 'COA', 'CON','GradSchool'],
        datasets: [{
            label: 'NUMBER OF EDUCATIONAL ATTAINMENT',
            data: [12.5, 12.5, 12.5, 12.5, 12.5, 12.5, 12.5, 12.5],
            backgroundColor: [
                '#023e8a',
                '#ffd60a',
                '#1b4332',
                '#3c096c',
                '#403d39',
                '#a4161a',
                '#00a6fb',
                '#ff9505'
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
    $('#attendee').DataTable();
});
