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
          <i style="font-size:10 px" class="fa">&#xf055;<span data-feather="plus"></span> Add Task</button></i>
        </div>
        <div class="card-body">
          <div class="card p-1 mb-2 mr-0 ml-0 draggable shadow-sm" id="cd1" draggable="true" ondragstart="drag(event)">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">
              <a class="lead font-weight-light">Desain</a></label>
              <span style="float: right">20 mei 22</span>
              </div>
            </div>
              <p>Desain sistem untuk aplikasi perusahaan A.</p>
          </div>
          <div class="card p-2 mb-2 mr-0 ml-0 draggable shadow-sm" id="cd2" draggable="true" ondragstart="drag(event)">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck2">
              <label class="custom-control-label" for="customCheck2">
              <a class="lead font-weight-light">Analisis</a></label>
              <span style="float: right">22 mei 22</span>
              </div>
            </div>
            <p>Analisis Kebutuhan user </p>
          </div>
          <div class="card p-3 mb-2 mr-0 ml-0 draggable shadow-sm" id="cd3" draggable="true" ondragstart="drag(event)">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck3">
              <label class="custom-control-label" for="customCheck3">
              <a class="lead font-weight-light">Meet with stackholder</a></label>
              <span style="float: right">19 mei 22</span>
              </div>
            </div>
            <p>Siapkan kebutuhan dan persyaratan yang telah didiskusikan sebelumnya</p>
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
        <div class="card p-1 mb-2 mr-0 ml-0 draggable shadow-sm" id="cd4" draggable="true" ondragstart="drag(event)">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">
              <a class="lead font-weight-light">Analisis</a></label>
              <span style="float: right">17 mei 22</span>
              </div>
            </div>
              <p>Analisis Kebutuha user aplikasi perusahaan C.</p>
          </div>
          <div class="card p-2 mb-2 mr-0 ml-0 draggable shadow-sm" id="cd5" draggable="true" ondragstart="drag(event)">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck2">
              <label class="custom-control-label" for="customCheck2">
              <a class="lead font-weight-light">Desain</a></label>
              <span style="float: right">14 mei 22</span>
              </div>
            </div>
            <p>Wireframe, UI, Prototype</p>
          </div>
        </div>
      </div>
      <div class="card">
      <div class="card-header">Complate</div>
      <div class="card-body">
      <div class="card p-1 mb-2 mr-0 ml-0 draggable shadow-sm" id="cd6" draggable="true" ondragstart="drag(event)">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">
              <a class="lead font-weight-light">Meet</a></label>
              <span style="float: right">12 mei 22</span>
              </div>
            </div>
              <p>presentasi</p>
          </div>
          <div class="card p-2 mb-2 mr-0 ml-0 draggable shadow-sm" id="cd7" draggable="true" ondragstart="drag(event)">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">
              <a class="lead font-weight-light">Meet</a></label>
              <span style="float: right">11 mei 22</span>
              </div>
            </div>
            <p>aiming the project</p>
          </div>
          <div class="card p-3 mb-2 mr-0 ml-0 draggable shadow-sm" id="cd8" draggable="true" ondragstart="drag(event)">
            <div class="card-title">
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">
              <a class="lead font-weight-light">Desain</a></label>
              <span style="float: right">09 mei 22</span>
              </div>
            </div>
            <p>Prototype approved</p>
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
      <!-- modal profile -->
      <div class="modal fade" id="modalProfile" tabindex="-1" role="dialog" aria-labelledby="myProfileModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title" id="myprofileModal">Detail Profile</h4>
            </div>
            <!-- modal body -->
            <div class="modal-body">
              <form action="" method="post" autocomplete="off">
                <div class="card p-4">
                  <div class=" image d-flex flex-column justify-content-center align-items-center"><img src="https://img.icons8.com/dusk/100/000000/user-female-circle.png" height="100" width="100" /></button> 
                    <span class="name mt-2">Armalia Rahmi</span> 
                    <span class="email mb-2">armaliarahmi@gmail.com</span> 
                  </div>
                  <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="picname">PIC Name</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="PIC Name" value="AR">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Company Name</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Company Name" value="PT. A">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="picname">Service Group</label>
                        <input type="text" class="form-control" id="servicegroup" placeholder="Service group" value="Shared">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Service Type</label>
                        <input type="text" class="form-control" id="servicetype" placeholder="service type" value="FAQ">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="channel">Channel</label> 
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="whatsapp">Whatsapp</label>
                            <input type="text" id="whathapp"  class="form-control"  placeholder="Channel Whatsapp" value="08xxxxxxxx88">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="whatsapp">Telegram</label>
                            <input type="text" id="telegram"  class="form-control"  placeholder="Channel Telegram" value="@ar">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="whatsapp">Slack</label>
                            <input type="text" id="slack"  class="form-control" placeholder="Channel slack" value="@arra">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="whatsapp">Coster</label>
                            <input type="text" id="coster"  class="form-control" placeholder="Channel coster" value="-">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="whatsapp">Custom</label>
                            <input type="text" id="custom"  class="form-control" placeholder="Channel custom" value="-">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
            </div>
      </div>
    </div>
</div>
@endsection
