@extends('layouts.main')
@include('bar1')
@section('ourcode')
<title>Client</title>
<body>
<div class="container">
<div class = "col-12" style="margin-bottom: 20px; margin-left: 160px; margin-top: 20px; margin-right: 0px; width: 1000px;"> 
<div class="card-12">
    <h3 style="color: #6c6b70; font-family:courier;">Clients</h3>
</div>
<div class="row">
<div class="button mb-1">
    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modalAddClient">
    <i class="fa">&#xf055;<span data-feather="plus"></span> Add Member</button></i>
</div>

<table class="contact-table table table-curved">
  <thead class="text">
    <tr>
      <th scope="col"><input type="checkbox" id="checkUncheckAll" onClick="CheckUncheckAll()"/>Clients</th>
      <th scope="col">Product</th>
      <th scope="col">Status</th>
      <th scope="col">about</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td><input type="checkbox" name="rowSelectCheckBox" value="1" onClick="CheckUncheckAll()"/> dfg</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
      <a href="#" class="vip"><i class="fas fa-crown" style="color: #6c6b70" title="vip"></i></a>
      <a href="#" class="edit"><i class="far fa-edit" style="color: #6c6b70" data-toggle="tooltip" title="Edit"></i></a>
		  <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" style="color: #DE3B3B" data-toggle="tooltip" title="Delete"></i></a>
      </td>
    </tr>
    <tr>
      <td><input type="checkbox" name="rowSelectCheckBox" value="2" onClick="CheckUncheckAll()"/> dfg</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>
      <a href="#" class="vip"><i class="fas fa-crown" style="color: #FDD017" title="vip"></i></a>
      <a href="#" class="edit"><i class="far fa-edit" style="color: #6c6b70" data-toggle="tooltip" title="Edit"></i></a>
		  <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" style="color: #DE3B3B" data-toggle="tooltip" title="Delete"></i></a>
      </td>
    </tr>
    <tr>
      <td><input type="checkbox" name="rowSelectCheckBox" value="3" onClick="CheckUncheckAll()"/> dfg</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>
      <a href="#" class="vip"><i class="fas fa-crown" style="color: #FDD017" title="vip"></i></a>
      <a href="#" class="edit"><i class="far fa-edit" style="color: #6c6b70" data-toggle="tooltip" title="Edit"></i></a>
		  <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" style="color: #DE3B3B" data-toggle="tooltip" title="Delete"></i></a>
      </td>
    </tr>
  </tbody>
</table>
<div class="btn-toolbar text-right" role="toolbar" aria-label="Toolbar with button groups" style="text-align: right;">
   <div class="btn-group" role="group" aria-label="First group"style="text-align: right;">
    <button type="button" class="btn btn-secondary"><i class='fas fa-angle-left'></i></button>    
    <button type="button" class="btn btn-secondary">1</button>
    <button type="button" class="btn btn-secondary">2</button>
    <button type="button" class="btn btn-secondary">3</button>
    <button type="button" class="btn btn-secondary">4</button>
    <button type="button" class="btn btn-secondary"><i class='fas fa-angle-right'></i></button>
  </div>
</div>
<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Hapus Data Penyewa</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete this client?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<style>
.table-curved {
 border-collapse: separate;
 border: 2px;
 border-radius: 30px;
 border-left: 0px;
 border-top: 0px;
}
table.table-curved > thead > tr > th{
 border:2px solid black;
}
table.table-curved > tbody > tr > td{
 border:2px solid black;
}
.table-curved > thead:first-child > tr:first-child > th {
 border-bottom: 2px;
 border-top: solid black 2px;
}
.table-curved td, .table-curved th {
 border-left: 2px solid black;
 border-top: 2px solid black;
}
.table-curved > :first-child > :first-child > :first-child {
 border-top-left-radius: 30px;
}
.table-curved > :first-child > :first-child > :last-child {
 border-top-right-radius: 30px;
}
.table-curved > :last-child > :last-child > :first-child {
 border-bottom-left-radius: 30px;
}
.table-curved > :last-child > :last-child > :last-child {
 border-bottom-right-radius: 30px;
} 
.content-container {
 padding-top: 50px;
 padding-left: 220px;
}
</style>
</body>
<script type="text/javascript">function CheckUncheckAll(){
   var  selectAllCheckbox=document.getElementById("checkUncheckAll");
   if(selectAllCheckbox.checked==true){
    var checkboxes =  document.getElementsByName("rowSelectCheckBox");
     for(var i=0, n=checkboxes.length;i<n;i++) {
      checkboxes[i].checked = true;
     }
    }else {
     var checkboxes =  document.getElementsByName("rowSelectCheckBox");
     for(var i=0, n=checkboxes.length;i<n;i++) {
      checkboxes[i].checked = false;
     }
    }
   }</script>