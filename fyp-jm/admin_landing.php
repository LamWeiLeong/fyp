<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin sidebar</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script> 
    $(function(){
      $("#admin_sidebar").load("admin_sidebar.html"); 
    });
    </script> 
    <script src="
    https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js
    "></script>
</head>

<style>

.cards
{
  width:100%;
  height:150px;
  padding:35px 20px;
  display:grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap:20px;
}

.cards .ccard {
  padding:20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background:#D7E0D4;
  border-radius:20px;
  box-shadow: 0 7px 25px 0 rgba(0, 0, 0,0.08)
}

.icon
{
  font-size:35px;
}

.number
{
  color:#32871F;
  font-size:45px;
}

.name
{
  font-size:25px;
}
.charts
{
  display:grid;
  grid-template-columns: 2fr 1fr;
  grid-gap:50px;
  align-items: center;
}
.charts h1
{
  align-items: center;
}
.chart1
{
  border-radius:10px;
  box-shadow: 0 2px 5px  rgba(0, 0, 0,0.8);
}

.chart2
{
  border-radius:10px;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0,0.8);
}

.recent
{
  display:grid;
  grid-template-columns: 1fr 2fr;
}
</style>
<?php include "admin_sidebar.php"; ?>

<body>
    <div class="main p-3">
       <div class="main-content"><!-- write content below -->
        <h1 style="font-size:45px;">Overview</h1>
          <div class="cards">
            <div class="ccard">
              <div class="content">
                <div class="number">100</div>
                <div class="name">Staff</div>
              </div>
              <div class="icon">
                <ion-icon name="person"></ion-icon>
              </div>
            </div>

            <div class="ccard">
              <div class="content">
                <div class="number">200</div>
                <div class="name">Staff</div>
              </div>
              <div class="icon">
                <ion-icon name="people"></ion-icon>
              </div>
            </div>

            <div class="ccard">
              <div class="content">
                <div class="number">300</div>
                <div class="name">Staff</div>
              </div>
              <div class="icon">
                <ion-icon name="accessibility-outline"></ion-icon>
              </div>
            </div>
      
            <div class="ccard">
              <div class="content">
                <div class="number">400</div>
                <div class="name">Staff</div>
              </div>
              <div class="icon">
                <ion-icon name="accessibility-outline"></ion-icon>
              </div>
            </div>
          </div><!-- close cards-->

          <br><hr><br>
          <div class="charts">
            <div class="chart1">
              <h1 style="align-items: center;">Chart</h1>
              <canvas id="chart1" style="width:100%;max-width:700px"></canvas>
            </div>
            <div class="chart2">
              <h1>Top 3 hottest product</h1>
              <canvas id="chart2"></canvas>
            </div>
          </div>

          <br><hr><br>
          <div class="recent">
            <div class="recent1">
              <h1>Recent Order/Activities</h1>
            </div>
            <div class="recent2">
              <h1>Recent >>>>></h1>
            </div>
          </div>
      </div><!-- close main-content -->
    </div><!-- cose main p-3 -->
</div>
</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script>
  const ctx = document.getElementById('chart1');
  const ctx2 = document.getElementById('chart2');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        label: 'Registered User(s)',
        data: [14, 19, 3, 5, 2, 3,5,4,12,4,1,20],
        borderWidth: 3
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

  new Chart(ctx2, {
    type: 'doughnut',
    data: {
      labels: [
    'Red',
    'Blue',
    'Yellow'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [300, 50, 100],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
    }]
}});
</script>