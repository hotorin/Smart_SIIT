<!DOCTYPE html>
<?php
require_once('connect.php');
session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIIT Management System</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> <!-- Tell the browser to be responsive to screen width -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">   <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">  <!-- Ionicons -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">   <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.css"> <!--Choose Skin-->

                  <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">    <!-- Main Header -->
    <a href="/Senior_Project" class="logo">   <!-- Logo -->
      <span class="logo-mini"><b>SIIT</b></span>   <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-lg"><b>Management System<b></span>  <!-- logo for regular state and mobile devices -->
    </a>




    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">

<!-- ==============================This is for Tab button================================================== -->
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


<!-- ==============================For The Notification Menu============================================================= -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">





          <?php
            if(isset($_SESSION['tier'])){
          ?>
          <!-- User Account Menu -->
          <!-- ==============================Make the notification Menu ============================================================ -->
          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
          <!-- Menu toggle button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">1</span>
          </a>

          <ul class="dropdown-menu">
            <li class="header">You 1 Work to do</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> The broken quip @SIIT
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <?php
            if($_SESSION['tier'] == 'Admin'){
          ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">   <!-- Menu Toggle Button -->
              <img src="dist/img/user2-160x160.gif" class="user-image" alt="User Image">  <!-- The user image in the navbar-->
              <span class="hidden-xs">Name Surname</span> <!-- hidden-xs hides the username on small devices so only the image appears. -->
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">  <!-- The user image in the menu -->
                <img src="dist/img/user2-160x160.gif" class="img-circle" alt="User Image">
                <p>
                  Name Surname - Ground Division Member
                  <small>Member since Nov. 2012</small>
                </p>
              </li>

              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="member.php?mode=0">History</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="member.php?mode=1">Request</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="member.php?mode=2">Confirm</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <form action="profile.php" method="post">
                    <input type="submit" class="btn btn-default btn-flat" value="Profile" />
                      <input type="hidden" name="full_name" value=<?php echo $_SESSION['fname']; ?> >
                      <input type="hidden" name="username" value=<?php echo $_SESSION['user_name']; ?> >
                      <input type="hidden" name="password" value=<?php echo $_SESSION['user_pass']; ?> >
                      <input type="hidden" name="email" value=<?php echo $_SESSION['e_mail']; ?> >
                      <input type="hidden" name="user_tier" value=<?php echo $_SESSION['tier']; ?> >
                  </form>
                </div>

                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Log Out</a>
                </div>
              </li>
            </ul>
          </li>
          <?php
            }
            else{
          ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">   <!-- Menu Toggle Button -->
              <img src="dist/img/user2-160x160.gif" class="user-image" alt="User Image">  <!-- The user image in the navbar-->
              <span class="hidden-xs"><?php echo $_SESSION['fname']; ?></span> <!-- hidden-xs hides the username on small devices so only the image appears. -->
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">  <!-- The user image in the menu -->
                <img src="dist/img/user2-160x160.gif" class="img-circle" alt="User Image">
                <p>
                  <?php echo $_SESSION['fname']; ?> - SIIT Student
                  <small>Member since Nov. 2015</small>
                </p>
              </li>

              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a href="member.php?mode=0">History</a>
                  </div>
                  <div class="col-xs-6 text-center">
                    <a href="member.php?mode=1">Request</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <form action="profile.php" method="post">
                    <input type="submit" class="btn btn-default btn-flat" value="Profile" />
                      <input type="hidden" name="full_name" value=<?php echo $_SESSION['fname']; ?> >
                      <input type="hidden" name="username" value=<?php echo $_SESSION['user_name']; ?> >
                      <input type="hidden" name="password" value=<?php echo $_SESSION['user_pass']; ?> >
                      <input type="hidden" name="email" value=<?php echo $_SESSION['e_mail']; ?> >
                      <input type="hidden" name="user_tier" value=<?php echo $_SESSION['tier']; ?> >
                  </form>
                </div>

                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Log Out</a>
                </div>
              </li>
            </ul>
          </li>
          <?php
            }
          ?>
          <?php
            }
            else{
          ?>
          <li><a href="login.php">Log-in</a></li>
          <?php
            }
          ?>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel" style="margin-top:20px">
        <?php
          if(!isset($_SESSION['tier'])){
        ?>
        <center>
          <p><font color="white" size="5">Welcome Guest</font></p>
        </center>
        <?php
          }
          else{
        ?>
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.gif" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['fname']; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>

        <?php
          }
        ?>
      </div>

      <!-- search form (Optional) -->
      <!--
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
    -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- ///////////////////////////////////      ADMIN MENU                /////////////////////////////////////////////////////// -->

                <?php
                if(isset($_SESSION['tier'])){
                  if($_SESSION['tier'] == 'Admin'){
                ?>
                <li class="header"
                    style="margin-top:20px;padding-top:20px;padding-bottom:20px;font-size:20px"
                >
                <center>Admin Menu</center></li>
                <!-- Optionally, you can add icons to the links -->
                <li class="treeview">
                  <a href="#"><i class="fa fa-link"></i><span>Van Management</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>

                  <ul class="treeview-menu">
                    <li><a href="admin.php?mode=0">Add/Delete Van Data</a></li>
                  </ul>
                </li>


                <li class="treeview">
                  <a href=""><i class="fa fa-link"></i><span>User Management</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>

                  <ul class="treeview-menu">
                    <li><a href="admin.php?mode=1">Change Users Information</a></li>
                  </ul>
                </li>

                <?php
                  }
                }
                ?>
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


        <li class="header"
            style="margin-top:20px;padding-top:20px;padding-bottom:20px;font-size:20px"
        >
        <center>System Menu</center></li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i><span>Broken Equipment Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="brokenEquip.php">Current Job</a></li>
            <li><a href="brokenEquip.php">History</a></li>
          </ul>
        </li>


        <li class="active treeview">
          <a href=""><i class="fa fa-link"></i><span>Van Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="vanindex.php?mode=0">Schedule Of The Van</a></li>
            <li><a href="vanindex.php?mode=1">Van Status</a></li>
            <li><a href="vanindex.php?mode=2">Van Data/Information</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php
      if($_GET['mode'] == 0){
     ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <center>
        <h1>
          Please Select Van number to see the Schedule.
        </h1>
      </center>
    </section>

<!-- ========================================== Header ========================================================= -->
    <!-- Main content -->
    <section class="content">
      <center>
        <div class="row" style="padding-top:40px">
          <div class="col-sm-3">
            <a href="vanSystem.php?mode=0&v=1">
              Van Number 1
              <img src="resource/image/van.png" height="100%" width="100%" style="margin-top:10px;margin-bottom:40px" class="user-image" alt="User Image">
            </a>
            <div class="box" style="padding-bottom:30px;padding-left:30px;padding-right:30px">
            <div class="box-header">
              <h4 style="margin-bottom:20px">Today Plan</h4>
            </div>
            -Database 1<br>
            -Database 2<br>
            -Database 3<br>
            -Database 4
            </div>
          </div>

          <div class="col-sm-3">
            <a href="vanSystem.php?mode=0&v=2">
              Van Number 2
              <img src="resource/image/van.png" height="100%" width="100%" style="margin-top:10px;margin-bottom:40px" class="user-image" alt="User Image">
            </a>
            <div class="box" style="padding-bottom:30px;padding-left:30px;padding-right:30px">
            <div class="box-header">
              <h4 style="margin-bottom:20px">Today Plan</h4>
            </div>
            -Database 1<br>
            -Database 2<br>
            -Database 3<br>
            -Database 4
          </div>
          </div>

          <div class="col-sm-3">
            <a href="vanSystem.php?mode=0&v=3">
              Van Number 3
              <img src="resource/image/van.png" height="100%" width="100%" style="margin-top:10px;margin-bottom:40px" class="user-image" alt="User Image">
            </a>
            <div class="box" style="padding-bottom:30px;padding-left:30px;padding-right:30px">
            <div class="box-header">
              <h4 style="margin-bottom:20px">Today Plan</h4>
            </div>
            -Database 1<br>
            -Database 2<br>
            -Database 3<br>
            -Database 4
          </div>
          </div>

          <div class="col-sm-3">
            <a href="vanSystem.php?mode=0&v=4">
              Van Number 4
              <img src="resource/image/van.png" height="100%" width="100%" style="margin-top:10px;margin-bottom:40px" class="user-image" alt="User Image">
            </a>
            <div class="box" style="padding-bottom:30px;padding-left:30px;padding-right:30px">
            <div class="box-header">
              <h4 style="margin-bottom:20px">Today Plan</h4>
            </div>
            -Database 1<br>
            -Database 2<br>
            -Database 3<br>
            -Database 4
          </div>
          </div>
        </div>
      </center>
    </section>
    <?php
      }
      else if($_GET['mode'] == 1){
    ?>
        <section class="content-header">
          <h1>
            Van Realtime
            <small>- status</small>
          </h1>
        </section>
        <section class="content">
          <div class="box" style="padding-bottom:30px;padding-left:30px;padding-right:30px">
            <div class="box-header">
              <h3 class="box-title" style="margin-top:20px">Status</h3>
            </div>
            <table id="example2" class="table table-bordered table-hover" style="width:100%;" align="center">
            <thead>
            <tr>
            <td style="text-align:center;width:10%">Van Number</td>
            <td style="text-align:center;width:20%">Current Location</td>
            <td style="text-align:center">Request By</td>
            <td style="text-align:center">Status</td>
            </tr>
          </thead>
          <tbody>
            <tr>
            <td style="text-align:center">1</td>
            <td style="text-align:center">Bangkok, Siam</td>
            <td style="text-align:center">Lecturer Name</td>
            <td style="text-align:center">In use</td>
            </tr>
          </tbody>
          <tbody>
            <tr>
            <td style="text-align:center">2</td>
            <td style="text-align:center">Bangkok, Chang-Wattna</td>
            <td style="text-align:center">Lecturer Name</td>
            <td style="text-align:center">In use</td>
            </tr>
          </tbody>
          <tbody>
            <tr>
            <td style="text-align:center">3</td>
            <td style="text-align:center">Bangkok, Chatuchak</td>
            <td style="text-align:center">Lecturer Name</td>
            <td style="text-align:center">In use</td>
            </tr>
          </tbody>
          <tbody>
            <tr>
            <td style="text-align:center">4</td>
            <td style="text-align:center">SIIT, Bangkadi</td>
            <td style="text-align:center">Lecturer Name</td>
            <td style="text-align:center">Free</td>
            </tr>
          </tbody>
            </table>
          </div>
        </section>
    <?php
      }
      else if($_GET['mode'] == 2){
    ?>
        <section class="content-header">
          <center>
            <h1>
              Click on each Van number to get more information.
            </h1>
          </center>
        </section>

        <section class="content">
          <center>
            <div class="row" style="padding-top:40px">
              <div class="col-sm-3">
                <a href="vanSystem.php?mode=1&v=1">
                  Van Number 1
                  <img src="resource/image/van.png" height="100%" width="100%" style="margin-top:10px;margin-bottom:40px" class="user-image" alt="User Image">
                </a>
                <?php
                  if(isset($_SESSION['tier'])){
                    if($_SESSION['tier'] == 'Admin'){
                ?>
                  <div class="box" style="padding-bottom:30px;">
                    <div class="box-header">
                      <h3 class="box-title" style="margin-top:10px;margin-bottom:0px">Van Detail</h3>
                      <hr>
                    </div>
                      วิ่งไปทั้งหมด : Database 1<br>
                      เติมน้ำมันไปทั้งหมด : Database 2<br>
                      ผู้โดยสารที่รับทั้งหมด : Database 3<br>
                      สถานะปัจจุบัน : Database 4
                  </div>
                <?php
                    }
                    else{
                ?>
                <div class="box box-danger" style="padding-bottom:30px">
                        <div class="box-header">
                          <h3 class="box-title" style="margin-top:10px;margin-bottom:0px">Van Detail</h3>
                          <hr>
                        </div>
                        You not have permission.<br>
                        To View the Details.
                      </div>
                <?php
                    }
                  }
                  else{
                ?>
                <div class="box box-danger" style="padding-bottom:30px">
                <div class="box-header">
                  <h3 class="box-title" style="margin-top:10px;margin-bottom:0px">Van Detail</h3>
                  <hr>
                </div>
                You not have permission.<br>
                To View the Details.
              </div>
              <?php
                }
              ?>

              </div>

              <div class="col-sm-3">
                <a href="vanSystem.php?mode=1&v=2">
                  Van Number 2
                  <img src="resource/image/van.png" height="100%" width="100%" style="margin-top:10px;margin-bottom:40px" class="user-image" alt="User Image">
                </a>
                <?php
                  if(isset($_SESSION['tier'])){
                    if($_SESSION['tier'] == 'Admin'){
                ?>
                <div class="box" style="padding-bottom:30px;">
                  <div class="box-header">
                    <h3 class="box-title" style="margin-top:10px;margin-bottom:0px">Van Detail</h3>
                    <hr>
                  </div>
                      วิ่งไปทั้งหมด : Database 1<br>
                      เติมน้ำมันไปทั้งหมด : Database 2<br>
                      ผู้โดยสารที่รับทั้งหมด : Database 3<br>
                      สถานะปัจจุบัน : Database 4
                  </div>
                <?php
                    }
                    else{
                ?>
                <div class="box box-danger" style="padding-bottom:30px">
                        <div class="box-header">
                          <h3 class="box-title" style="margin-top:10px;margin-bottom:0px">Van Detail</h3>
                          <hr>
                        </div>
                        You not have permission.<br>
                        To View the Details.
                      </div>
                <?php
                    }
                  }
                  else{
                ?>
                <div class="box box-danger" style="padding-bottom:30px">
                  <div class="box-header">
                    <h3 class="box-title" style="margin-top:10px;margin-bottom:0px">Van Detail</h3>
                    <hr>
                  </div>
                  You not have permission.<br>
                  To View the Details.
                </div>
                <?php
                  }
                ?>

              </div>

              <div class="col-sm-3">
                <a href="vanSystem.php?mode=1&v=3">
                  Van Number 3
                  <img src="resource/image/van.png" height="100%" width="100%" style="margin-top:10px;margin-bottom:40px" class="user-image" alt="User Image">
                </a>
                <?php
                  if(isset($_SESSION['tier'])){
                    if($_SESSION['tier'] == 'Admin'){
                ?>
                    <div class="box" style="padding-bottom:30px;">
                      <div class="box-header">
                        <h3 class="box-title" style="margin-top:10px;margin-bottom:0px">Van Detail</h3>
                        <hr>
                      </div>
                      วิ่งไปทั้งหมด : Database 1<br>
                      เติมน้ำมันไปทั้งหมด : Database 2<br>
                      ผู้โดยสารที่รับทั้งหมด : Database 3<br>
                      สถานะปัจจุบัน : Database 4
                    </div>
                <?php
                    }
                    else{
                ?>
                <div class="box box-danger" style="padding-bottom:30px">
                        <div class="box-header">
                          <h3 class="box-title" style="margin-top:10px;margin-bottom:0px">Van Detail</h3>
                          <hr>
                        </div>
                        You not have permission.<br>
                        To View the Details.
                      </div>
                <?php
                    }
                  }
                  else{
                ?>
                <div class="box box-danger" style="padding-bottom:30px">
                  <div class="box-header">
                    <h3 class="box-title" style="margin-top:10px;margin-bottom:0px">Van Detail</h3>
                    <hr>
                  </div>
                  You not have permission.<br>
                  To View the Details.
                </div>
                <?php
                  }
                ?>

              </div>

              <div class="col-sm-3">
                <a href="vanSystem.php?mode=1&v=4">
                  Van Number 4
                  <img src="resource/image/van.png" height="100%" width="100%" style="margin-top:10px;margin-bottom:40px" class="user-image" alt="User Image">
                </a>
                <?php
                  if(isset($_SESSION['tier'])){
                    if($_SESSION['tier'] == 'Admin'){
                ?>
                  <div class="box" style="padding-bottom:30px;">
                    <div class="box-header">
                      <h3 class="box-title" style="margin-top:10px;margin-bottom:0px">Van Detail</h3>
                      <hr>
                    </div>
                      วิ่งไปทั้งหมด : Database 1<br>
                      เติมน้ำมันไปทั้งหมด : Database 2<br>
                      ผู้โดยสารที่รับทั้งหมด : Database 3<br>
                      สถานะปัจจุบัน : Database 4
                  </div>
                <?php
                    }
                    else{
                ?>
                      <div class="box box-danger" style="padding-bottom:30px">
                        <div class="box-header">
                          <h3 class="box-title" style="margin-top:10px;margin-bottom:0px">Van Detail</h3>
                          <hr>
                        </div>
                        You not have permission.<br>
                        To View the Details.
                      </div>
                <?php
                    }
                  }
                  else{
                ?>
                <div class="box box-danger" style="padding-bottom:30px">
                  <div class="box-header">
                    <h3 class="box-title" style="margin-top:10px;margin-bottom:0px">Van Detail</h3>
                    <hr>
                  </div>
                  You not have permission.<br>
                  To View the Details.
                </div>
                <?php
                  }
                ?>

              </div>
            </div>
          </center>
        </section>
      <?php
      }
     ?>
<!-- =========================================================================================================== -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      This point is this class
    </div>
    <!-- Default to the left -->
    <strong>Sirindhorn International Institute of Technology (SIIT)</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
