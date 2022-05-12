<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="css/style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
  <div class = "sidebar-container">
  @extends('layouts.main')
    <div class="dashboard-header">
    <nav class="navbar navbar-default navbar-expand-lg bg-white fixed-top"> 
        <div class="navbar-brand" style="color: #6c6b70;">CRMPROJECT</div>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item">
                  <div id="custom-search" class="top-search-bar"> <input class="form-control" type="text" placeholder="Search.."> </div>
                </li>
                <li class="nav-item dropdown notification"> <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                        <li>
                            <div class="notification-title"> Notification</div>
                            <!-- <div class="notification-list">
                                <div class="list-group"> <a href="#" class="list-group-item list-group-item-action active">
                                        <div class="notification-info">
                                            <div class="notification-list-user-img"><img src="https://img.icons8.com/office/100/000000/administrator-female.png" alt="" class="user-avatar-md rounded-circle"></div>
                                            <div class="notification-list-user-block"><span class="notification-list-user-name">your notificatin here</span>click this to see<div class="notification-date">2 min ago</div>
                                            </div>
                                        </div>
                                </div>
                            </div> -->
                        </li>
                        <li>
                            <div class="list-footer"> <a href="#">View all notifications</a></div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown nav-user"> <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://img.icons8.com/dusk/100/000000/user-female-circle.png" alt="" class="user-avatar-md rounded-circle"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info mb-2">
                            <h5 class="text-white nav-user-name">Armalia Rahmi</h5> 
                            <span class="status text-center">available</span><br>
                        </div> 
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalProfile" ><i class="fas fa-user mr-2"></i>Profile</a> 
                        <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a> 
                        <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    </div>
    </div>
    <div class="sidebar">
      <ul class="nav-list">
        <li>
          <a href="/dash">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
        <a href="/task">
          <i class='bx bx-task' ></i>
          <span class="links_name">Task Board</span>
        </a>
        <span class="tooltip">kanban Board</span>
      </li>
      <li>
        <a href="/client">
          <i class='bx bx-group' ></i>
          <span class="links_name">Clients</span>
        </a>
        <span class="tooltip">Clients</span>
      </li>
      <li>
        <a href="/broadcast">
          <i class='bx bx-broadcast' ></i>
          <span class="links_name">Broadcast</span>
        </a>
        <span class="tooltip">Broadcast</span>
      </li>
      <li>
        <a href="/chat">
          <i class='bx bx-chat' ></i>
          <span class="links_name">Communication</span>
        </a>
        <span class="tooltip">Communication</span>
      </li>
      <li>
        <a href="/report">
          <i class='bx bx-dock-top' ></i>
          <span class="links_name">Reports</span>
        </a>
        <span class="tooltip">Profile</span>
      </li>
      <li>
      <li>
        <a href="#">
          <i class='bx bx-user' ></i>
          <span class="links_name">Profile</span>
        </a>
        <span class="tooltip">Profile</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
      <li class="profile">
          <i class='bx bx-log-out' id="log_out" ></i>
      </li>
      </ul>
    </div>
  </div>
         <!-- The Modal -->
         <div class="modal fade" id="modalProfile" >
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Detail Profile</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
			<div class="row gutters">
			<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
			<div class="card h-100">
				<div class="card-body">
					<div class="account-settings">
						<div class="user-profile">
							<div class="user-avatar">
								<img src="https://img.icons8.com/dusk/100/000000/user-female-circle.png" alt="Maxwell Admin">
							</div>
							<h5 class="user-name" style="color: #6c6b70">Yuki Hayashi</h5>
							<h6 class="user-email">yuki@Maxwell.com</h6>
						</div>
						<div class="about">
							<h5 style="color: #6c6b70">About</h5>
							<p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
			<div class="card h-100">
				<div class="card-body">
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<h6 class="mb-2" style="color: #6c6b70">Personal Details</h6>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="fullName">Full Name</label>
								<input type="text" class="form-control" id="fullName" placeholder="Enter full name">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="eMail">Email</label>
								<input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="text" class="form-control" id="phone" placeholder="Enter phone number">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="website">Website URL</label>
								<input type="url" class="form-control" id="website" placeholder="Website url">
							</div>
						</div>
					</div>
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<h6 class="mt-3 mb-2"style="color: #6c6b70">Service</h6>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="Street">Street</label>
								<input type="name" class="form-control" id="Street" placeholder="Enter Street">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="ciTy">City</label>
								<input type="name" class="form-control" id="ciTy" placeholder="Enter City">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="sTate">State</label>
								<input type="text" class="form-control" id="sTate" placeholder="Enter State">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="form-group">
								<label for="zIp">Zip Code</label>
								<input type="text" class="form-control" id="zIp" placeholder="Zip Code">
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
			</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="text-right">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</body>
<style>
body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}
</style>
  <script src="js/script.js"></script>

</html>