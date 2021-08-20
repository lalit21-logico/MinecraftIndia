<style>
  .chart-container {
    position: relative;
    margin: auto;
    height: 50vh;
    width: 70vw;
  }
</style>

<div class="main-panel">
  <div class="content-wrapper">

    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between flex-wrap">
          <div class="d-flex align-items-end flex-wrap">
            <div class="mr-md-3 mr-xl-5">
              <h2>Welcome back,</h2>
              <p class="mb-md-0">Your Notifications will appear here</p>
            </div>
          </div>

          <!-- <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-plus text-muted"></i>
                  </button>
                  <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
                </div> -->

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 stretch-card">
        <div class="card shadow">
          <div class="card-body">
            <p class="card-title">Statistics</p>
            <div class="">
            
              <div class="chart-container px-lg-5 px-sm-2 px-md-2">
                <canvas id="myChart"></canvas>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    let myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'sans-serif';
    Chart.defaults.global.defaultFontSize = 15;
    Chart.defaults.global.defaultFontColor = 'black';



    let massPopChart = new Chart(myChart, {
      type: 'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data: {
        labels: [<?php foreach ($monthlog as $item1) {
                    echo '\'' . $item1['label'] . '\', ';
                  } ?>],
        datasets: [{
          label: 'User',
          data: [<?php foreach ($monthlog as $item1) {
                    echo $item1['y'] . ', ';
                  } ?>],
          backgroundColor: "rgba(61,30,0,0.7)",
          borderWidth: 2,
          borderColor: '#313131',
          hoverBorderWidth: 3,
          hoverBorderColor: '#000'
        }]

      },
      options: {
        maintainAspectRatio: false,
        title: {
          display: true,
          text: 'Number of users',
          fontSize: 25
        },
        legend: {
          display: true,
          position: 'bottom',
          labels: {
            fontColor: '#777777'
          }
        },
        layout: {
          padding: {
            left: 0,
            right: 0,
            bottom: 0,
            top: 0,
          }
        },
        tooltips: {
          enabled: true
        }
      }
    });
  </script>