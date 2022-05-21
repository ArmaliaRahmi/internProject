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
            <canvas id="radarChart"></canvas>
            <script>
                //radar
var ctxR = document.getElementById("radarChart").getContext('2d');
var myRadarChart = new Chart(ctxR, {
  type: 'radar',
  data: {
    labels: ["E-Commerce", "Digital", "Healthcare", "Retail", "Transport", "Electronic", "Property"],
    datasets: [{
      label: "Client",
      data: [5, 9, 2, 9, 5, 5, 4],
      backgroundColor: [
        'rgba(105, 0, 132, .2)',
      ],
      borderColor: [
        'rgba(200, 99, 132, .7)',
      ],
      borderWidth: 2
    }
    ]
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
            <h5 class="card-title">Sales</h5>
            <div class="card-body">
            <canvas id="polarChart"></canvas>
            <script>
                //polar
            var ctxPA = document.getElementById("polarChart").getContext('2d');
            var myPolarChart = new Chart(ctxPA, {
                type: 'polarArea',
                data: {
                labels: ["Whatsapp", "CPRO", "Coster", "AI", "SMS"],
                datasets: [{
                    data: [2, 4, 1, 1, 1],
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
        <h5 class="card-title">Task</h5>
        <div class="card-body">
      <canvas id="pieChart"></canvas>
      <script>
        //pie
        var ctxP = document.getElementById("pieChart").getContext('2d');
        var myPieChart = new Chart(ctxP, {
          type: 'pie',
          data: {
            labels: ["ToDo", "OnGoing", "Complated"],
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
