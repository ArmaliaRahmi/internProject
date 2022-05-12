@extends('layouts.main')
@include('bar1')
@section('ourcode')
<title>Report</title>

<div class="container">
<div class = "col-12" style="margin-bottom: 20px; margin-left: 160px; margin-top: 20px; margin-right: 0px; width: 1000px;"> 
<div class="card-12">
    <h3 style="color: #6c6b70; font-family:courier;">Report</h3>
</div>
<table class="contact-table table table-curved">
    <thead class="text">
    <tr>
      <th scope="col">Clients</th>
      <th scope="col">Document</th>
      <th scope="col">Download</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>dfg</td>
      <td>
      <a href="#" class="doc"><i class="fa fa-folder-open-o" style="color: #6c6b70" title="vip">Doc Application</i></a>
      </td>
      <td>
        <a href="#" class="download"><i class="fas fa-download" style="color: #6c6b70" data-toggle="tooltip" title="download"></i></a>
      </td>
    </tr>
    <tr>
      <td>dfg</td>
      <td>
      <a href="#" class="doc"><i class="fa fa-folder-open-o" style="color: #6c6b70" title="vip">Doc Application</i></a>
      </td>
      <td>
        <a href="#" class="download"><i class="fas fa-download" style="color: #6c6b70" data-toggle="tooltip" title="download"></i></a>
      </td>
    </tr>
    <tr>
      <td>dfg</td>
      <td>
      <a href="#" class="doc"><i class="fa fa-folder-open-o" style="color: #6c6b70" title="vip">Doc Application</i></a>
      </td>
      <td>
        <a href="#" class="download"><i class="fas fa-download" style="color: #6c6b70" data-toggle="tooltip" title="download"></i></a>
      </td>
    </tr>
  </tbody>
</table>
<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
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