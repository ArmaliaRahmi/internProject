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

<link rel="stylesheet" href="css/style1.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
  <div class = "sidebar-container">
  @extends('layouts.main')
    <div class="dashboard-header">
    <nav class="navbar navbar-default navbar-expand-lg bg-white fixed-top"> 
        <div class="navbar-brand" style="color: #6c6b70;">PROJECT</div>
        <i class='bx bx-menu' id="btn" style="cursor: pointer;" ></i>
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
          <a href="#">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="links_name">Kanban Board</span>
        </a>
        <span class="tooltip">kanban Board</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-chat' ></i>
          <span class="links_name">Messages</span>
        </a>
        <span class="tooltip">Messages</span>
      </li>
      
      <li>
        <a href="#">
          <i class='bx bx-user' ></i>
          <span class="links_name">Profile</span>
        </a>
        <span class="tooltip">Profile</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
      <li class="profile">
          <div class="profile-details">
            <img src="profile.jpg" alt="">
            <div class="name_job">
              <div class="name">Armalia</div>
              <div class="job">Web designer</div>
            </div>
          </div>
          <i class='bx bx-log-out' id="log_out" ></i>
      </li>
      </ul>
    </div>
  </div>
  

  <script src="js/script.js"></script>

</body>
</html>