<!DOCTYPE html>

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
    <a href="test.php" class="logo">   <!-- Logo -->
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
                <li class="dropdown messages-menu"> <!-- Messages: style can be found in dropdown.less-->


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

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">

                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">   <!-- Menu Toggle Button -->
                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">  <!-- The user image in the navbar-->
                    <span class="hidden-xs">Sona Sona</span> <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  </a>

                  <ul class="dropdown-menu">
                    <li class="user-header">  <!-- The user image in the menu -->
                      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      <p>
                        Sona Sona - Ground Division Member
                        <small>Member since Nov. 2012</small>
                      </p>
                    </li>

                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="#" class="btn btn-default btn-flat">Log Out</a>
                      </div>
                    </li>
                  </ul>
                </li>
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
              <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>Sona Sona</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
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
                  <li><a href="#">Link in level 2</a></li>
                  <li><a href="#">Link in level 2</a></li>
                </ul>
              </li>


              <li class="treeview">
                <a href="vanindex.html"><i class="fa fa-link"></i><span>Van Management</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

                <ul class="treeview-menu">
                  <li><a href="test.php?mode=11">Schedule Of The Van</a></li>
                  <li><a href="test.php?mode=12">Van Status</a></li>
                </ul>
              </li>
            </ul>
            <!-- /.sidebar-menu -->
          </section>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <iframe width="100%" style="height: 84.9vh;" src="
          <?php
          if(isset($_GET["mode"])){
            if($_GET["mode"] == 11){
              echo "van.html";
            }
            else if($_GET["mode"] == 12){
              echo "";
            }
          }
          else{
            echo "http://www.w3schools.com";
          }
          ?>
          "></iframe>
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