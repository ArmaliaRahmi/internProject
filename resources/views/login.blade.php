@extends('layouts.main')
@section('ourcode')
<title>Login</title>


<div class="row">
	<div class="col-md-5 mx-auto">

   @if(session()->has('success'))
   <div class="alert alert success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"
      aria-label="Close"></button>
   </div>
   @endif
		<div id="first">
         <form action="/login" method="post">
         @csrf
			<div class="formLogin form">
				<div class="logo mb-3">
					<div class="col-md-12 text-center">
                  <div class="col-lg-12 far fa-user-circle"style='font-size:48px';>
                  </div>
						<h1>Login</h1>
					</div>
				</div>
            <form action="" method="post" name="login">
               <div class="form-group">
                  <label for="inputEmail">Email address</label>
                  <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" autofocus required>
               </div>
               <div class="form-group">
                  <label for="inputPass">Password</label>
                     <div class="input-group-append">
                        <input id="password-field" type="password" class="form-control" name="password" placeholder="Enter Password" required>
                        <i toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" style="margin-left: -25px;"></i>
                     </div>
               </div>
               <div class="col-auto">
                  <div class="form-group">
                     <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                     <label class="form-check-label" for="autoSizingCheck">Remember me</label>
                  </div>
               </div>
               <div class="col-md-12 text-center ">
                  <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" href="/todolist" id="login">Login</button>
               </div>
               <div class="form-group"></div>
               <div class="form-group">
                  <p class="text-center">Don't have account? <a href="/register" id="register">Register here</a></p>
               </div>
            </form>
         </div>
         </form>
		</div> 
   </div>
</div>
<script src = "js/script.js"></script>
@endsection
