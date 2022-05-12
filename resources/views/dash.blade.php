@extends('layouts.main')
@include('bar1')
@section('ourcode')
<title>Dashboard</title>

<div class="container">
<div class = "col-12" style="margin-bottom: 20px; margin-left: 145px; margin-top: 20px; margin-right: 10px; width: 1000px;"> 
<div class="card-12">
    <h3 style="color: #6c6b70; font-family:courier;">Dashboard</h3>
</div>  
<div class="row">
    <div class="col-sm-4 mb-1">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Clients</h5>
            <div class="card-body">
            <canvas id="barChart"></canvas>
            <script>
                //bar
            var ctxB = document.getElementById("barChart").getContext('2d');
            var myBarChart = new Chart(ctxB, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "july", "agst", "sept", "oct", "nov", "dec"],
                datasets: [{
                // label: '# of Votes',
                data: [20, 35, 15, 50, 29, 39],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
                }]
            },
            options: {
                scales: {
                yAxes: [{
                    ticks: {
                    beginAtZero: true
                    }
                }]
                }
            }
            });
            </script>
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-4 mb-1">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Products</h5>
            <div class="card-body">
            <canvas id="polarChart"></canvas>
            <script>
                //polar
            var ctxPA = document.getElementById("polarChart").getContext('2d');
            var myPolarChart = new Chart(ctxPA, {
                type: 'polarArea',
                data: {
                labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
                datasets: [{
                    data: [300, 50, 100, 40, 120],
                    backgroundColor: ["rgba(219, 0, 0, 0.1)", "rgba(0, 165, 2, 0.1)", "rgba(255, 195, 15, 0.2)",
                    "rgba(55, 59, 66, 0.1)", "rgba(0, 0, 0, 0.3)"
                    ],
                    hoverBackgroundColor: ["rgba(219, 0, 0, 0.2)", "rgba(0, 165, 2, 0.2)",
                    "rgba(255, 195, 15, 0.3)", "rgba(55, 59, 66, 0.1)", "rgba(0, 0, 0, 0.4)"
                    ]
                }]
                },
                options: {
                responsive: true
                }
            });
            </script>
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-4 mb-1">
        <div class="card">
        <div class="card-body">
        <h5 class="card-title">Progress</h5>
        <div class="card-body">
      <canvas id="pieChart"></canvas>
      <script>
        //pie
        var ctxP = document.getElementById("pieChart").getContext('2d');
        var myPieChart = new Chart(ctxP, {
          type: 'pie',
          data: {
            labels: ["Active", "Complated", "Closed"],
            datasets: [{
              data: [333, 333, 333],
              backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C"],
              hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870"]
            }]
          },
          options: {
            responsive: true
          }
        });
      </script>
      </div>
        </div>
        </div>
    </div>
    </div>

    <div class="card mt-1 mb-1">
        <div class="card-body">
        <h5 class="card-title text-center">Growth Report</h5>
        <canvas id="lineChart"></canvas>
            <script>
                //line
            var ctxL = document.getElementById("lineChart").getContext('2d');
            var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                label: "My First dataset",
                data: [65, 59, 80, 81, 75, 70, 84],
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
                },
                ]
            },
            options: {
                responsive: true
            }
            });
            </script>
        </div>
    </div>
    <div class="row">
    <div class="col-sm-8 mt-1 mb-1">
        <div class="card ">
        <div class="card-body">
            <h5 class="card-title">Clients</h5>
            <span class="card-text">
                <div class = "row">
                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="sunil" style="width: 40px; height: 40px; border-radius: 100%;">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="sunil" style="width: 40px; height: 40px; border-radius: 100%; margin-left:-5px;">
                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="sunil" style="width: 40px; height: 40px; border-radius: 100%; margin-left:-5px;">
                <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="sunil" style="width: 40px; height: 40px; border-radius: 100%; margin-left:-5px;">
                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="sunil" style="width: 40px; height: 40px; border-radius: 100%; margin-left:-5px;">
                </div>
            </span>
        </div>
        </div>
    </div>
    <div class="col-sm-4 mt-1 mb-1">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Doc Report</h5>
            <p class="card-text">
            <a href="#" class="doc"><i class="fa fa-folder-open-o" style="color: #6c6b70" title="comp"> ABC Comp</i></a><br>
            <a href="#" class="doc"><i class="fa fa-folder-open-o" style="color: #6c6b70" title="comp"> CComp</i></a><br>
            <a href="#" class="doc"><i class="fa fa-folder-open-o" style="color: #6c6b70" title="comp"> SComp</i></a>
            </p>
        </div>
        </div>
    </div>
</div>
</div>
</div>

<script src = "js/script.js"></script>
@endsection
