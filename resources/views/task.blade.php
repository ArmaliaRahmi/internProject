@extends('layouts.main')
@include('bar1')
@section('ourcode')
<title>Task Board</title>

<div class="container">
<div class = "col-12" style="margin-bottom: 20px; margin-left: 145px; margin-top: 20px; margin-right: 10px; width: 1000px;"> 
<div class="card-12">
    <h3 style="color: #6c6b70; font-family:courier;">Task</h3>
</div>
  <div class="button text-right mb-1">
    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modalAddTask">
    <i class="fa">&#xf055;<span data-feather="plus"></span> Add Task</button></i>
    <button type="button" class="btn btn-outline-secondary">
    <a href="/calender"><i class= "far fa-calendar-check" style="color: #6c6b70"> Calender</i></a></button>
  </div>

  
<div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">Active</div>
      <div class="card-body">
        <div class="card p-1 mb-2 mr-0 ml-0 draggable shadow-sm" id="cd1">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">
              <a class="lead font-weight-light">wYyComp - Desain</a></label>
              <span style="float: right">20 mei 22</span>
              </div>
            </div>
              <p class="card-text">UI Apps</p>
        </div>
        <div class="card p-1 mb-2 mr-0 ml-0 draggable shadow-sm" id="cd2" >
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck2">
              <label class="custom-control-label" for="customCheck2">
              <a class="lead font-weight-light">SComp - Desain</a></label>
              <span style="float: right">20 mei 22</span>
              </div>
            </div>
              <p class="card-text">UI/UX Apps</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">Completed</div>
      <div class="card-body">
        <div class="card p-1 mb-2 mr-0 ml-0 draggable shadow-sm" id="cd3">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck3">
              <label class="custom-control-label" for="customCheck3">
              <a class="lead font-weight-light">ABC Comp - Desain</a></label>
              <span style="float: right">20 mei 22</span>
              </div>
            </div>
            <p class="card-text">Desain UI/UX</p>
        </div>
        <div class="card p-1 mb-2 mr-0 ml-0 draggable shadow-sm" id="cd4">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck4">
              <label class="custom-control-label" for="customCheck1">
              <a class="lead font-weight-light">CComp - FE</a></label>
              <span style="float: right">20 mei 22</span>
              </div>
            </div>
              <p class="card-text">Implementasi UI/UX</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
    <div class="card-header">Closed</div>
    <div class="card-body">
        <div class="card p-1 mb-2 mr-0 ml-0 draggable shadow-sm" id="cd5">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck5" checked>
              <label class="custom-control-label" for="customCheck5">
              <a class="lead font-weight-light">PT.A - Desain</a></label>
              <span style="float: right">20 mei 22</span>
              </div>
            </div>
              <p class="card-text">Desain Apps</p>
        </div>
        <div class="card p-1 mb-2 mr-0 ml-0 draggable shadow-sm" id="cd6">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck6" checked>
              <label class="custom-control-label" for="customCheck6">
              <a class="lead font-weight-light">Dear Company - Desain</a></label>
              <span style="float: right">20 mei 22</span>
              </div>
            </div>
              <p class="card-text">Desain Sistem</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
    <div class="card-header">Progress</div>
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
    <!-- <div class="card-deck">
      <div class="add_task">
        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modalAddTask" style="float: right">
          <i style="font-size:10px" class="fa">&#xf055;<span data-feather="plus"></span> Add Task</button></i>
      </div>
    </div> -->
</div>
      <!-- Modal add task -->
      <div class="modal fade" id="modalAddTask" tabindex="-1" role="dialog" 
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Add Task</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
              <form action="" method="post" autocomplete="off">
              <div class="form-group">
                  <label for="task_title">Company Name:</label>
                  <input type="text" class="form-control" placeholder="Enter Company name"  id="comp_title" name="comp_title">
                </div>
                <div class="form-group">
                  <label for="task_title">Task Title:</label>
                  <input type="text" class="form-control" placeholder="Enter task name"  id="task_title" name="task_title">
                </div>
                <div class="form-group">
                  <label for="task_details">Task Details:</label>
                  <textarea class="form-control"  placeholder="Enter task details"  rows="5" id="task_details" name="task_details"></textarea>
                </div>
                <div class="form-group">
                  <label >Due Date:</label>
                  <input type="date" id="due_date" name="due_date" min="1000-01-01" max="3000-12-31" class="form-control">
                </div>
                <div class="form-group">
                  <label for="task_status">Task Status:</label>
                  <select class="form-control" id="task_status" name="task_status">
                    <option value="Todo">Active</option>
                    <option value="In Progress">Completed</option>
                  </select>
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-outline-secondary">Submit</button>
              </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger"
                data-dismiss="modal">
              Close
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- end add task -->
      </div>
    </div>
</div>
</div>
@endsection