@extends('layouts.main')
@include('bar1')
@section('ourcode')
<title>Product</title>

<div class="container">
<div class = "col-12" style="margin-bottom: 20px; margin-left: 145px; margin-top: 20px; margin-right: 10px; width: 1000px;"> 
<div class="card-12">
    <h3 style="color: #6c6b70; font-family:courier;">Product</h3>
</div>
  <div class="button text-right mb-1">
    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modalAddTask">
    <i class="fa">&#xf055;<span data-feather="plus"></span> Add Product</button></i>
  </div>

  <div class="card-columns">
  @foreach($products as $p)
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">{{ $p->productName }}</h5>
      <p class="card-text">{{ $p->productDetail }}</p>
    </div>
  </div>
  @endforeach  
</div>
  
<!-- <div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-2">
    <div class="card">
      <div class="card-header">To Do</div>
      <div class="card-body">
      
      </div>
    </div>
  </div>
  <div class="col mb-2">
    <div class="card">
      <div class="card-header">To Do</div>
      <div class="card-body">
      
      </div>
    </div>
  </div>
  <div class="col mb-2">
    <div class="card">
      <div class="card-header">On Going</div>
      <div class="card-body">
      
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
    <div class="card-header">Closed</div>
    <div class="card-body">
       
        
    </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
    <div class="card-header">Progress</div>
      <div class="card-body">
      
      </div>
    </div>
  </div>
</div> -->
</div>
</div>
      <!-- Modal add task -->
      <div class="modal fade" id="modalAddTask" tabindex="-1" role="dialog" 
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Add Product</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
              <form action="" method="post" autocomplete="off">
              <div class="form-group">
                  <label for="task_title">Product Name:</label>
                  <input type="text" class="form-control" placeholder="Enter Company name"  id="comp_title" name="comp_title">
                </div>
                
                <div class="form-group">
                  <label for="task_details">Product Details:</label>
                  <textarea class="form-control"  placeholder="Enter task details"  rows="5" id="task_details" name="task_details"></textarea>
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
