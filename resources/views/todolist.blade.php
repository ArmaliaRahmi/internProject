@extends('layouts.main')

@include('layouts/bar')

@section('ourcode')
<div class="row">
	<div class="card-md-3 mt-5 mx-auto">
    <div class="card-deck">
      <div class="card">
        <div class="card-header">
          To Do!
          <button type="button" class="btn btn-primary plus" data-toggle="modal" data-target="#modalAddTask" style="float: right">
          <i style="font-size:10px" class="fa">&#xf055;<span data-feather="plus"></span> Add Task</button></i>
        </div>
        <div class="card-body">
          <div class="card p-1 mb-2 mr-0 ml-0">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">
              <a class="lead font-weight-light">Desain</a></label>
              <span style="float: right">13 mei 22</span>
              </div>
            </div>
              <p>Desain sistem untuk aplikasi perusahaan A.</p>
          </div>
          <div class="card p-2 mb-2 mr-0 ml-0">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck2">
              <label class="custom-control-label" for="customCheck2">
              <a class="lead font-weight-light">Task 2</a></label>
              <span style="float: right">13 mei 22</span>
              </div>
            </div>
            <p>Analisis Kebutuhan </p>
          </div>
          <div class="card p-3 mb-2 mr-0 ml-0">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck3">
              <label class="custom-control-label" for="customCheck3">
              <a class="lead font-weight-light">Task 3</a></label>
              <span style="float: right">13 mei 22</span>
              </div>
            </div>
            <p>This is a description of a item on the board.</p>
          </div>  
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          In Progress
           <button type="button" class="btn btn-primary plus" data-toggle="modal" data-target="#modalAddTask" style="float: right">
          <i style="font-size:10px" class="fa">&#xf055;<span data-feather="plus"></span> Add Task</button></i>
        </div>
        <div class="card-body">
        <div class="card p-1 mb-2 mr-0 ml-0">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">
              <a class="lead font-weight-light">Desain</a></label>
              <span style="float: right">13 mei 22</span>
              </div>
            </div>
              <p>Desain sistem untuk aplikasi perusahaan A.</p>
          </div>
          <div class="card p-2 mb-2 mr-0 ml-0">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck2">
              <label class="custom-control-label" for="customCheck2">
              <a class="lead font-weight-light">Task 2</a></label>
              <span style="float: right">13 mei 22</span>
              </div>
            </div>
            <p>Analisis Kebutuhan </p>
          </div>
        </div>
      </div>
      <div class="card">
      <div class="card-header">Complate</div>
      <div class="card-body">
      <div class="card p-1 mb-2 mr-0 ml-0">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">
              <a class="lead font-weight-light">TSK-154</a></label>
              <span style="float: right">13 mei 22</span>
              </div>
            </div>
              <p>This is a description of a item on the board.</p>
          </div>
          <div class="card p-2 mb-2 mr-0 ml-0">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">
              <a class="lead font-weight-light">TSK-154</a></label>
              <span style="float: right">13 mei 22</span>
              </div>
            </div>
            <p>This is a description of a item on the board.</p>
          </div>
          <div class="card p-3 mb-2 mr-0 ml-0">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">
              <a class="lead font-weight-light">TSK-154</a></label>
              <span style="float: right">13 mei 22</span>
              </div>
            </div>
            <p>This is a description of a item on the board.</p>
          </div>  
          </div>
      </div>
      <!-- Modal add task -->
      <div class="modal fade" id="modalAddTask" tabindex="-1" role="dialog" 
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">
                Add Task
              </h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
              <form action="" method="post" autocomplete="off">
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
                    <option value="Todo">Todo</option>
                    <option value="In Progress">In Progress</option>
                  </select>
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
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
@endsection