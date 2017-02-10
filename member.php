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
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.css"> <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css"> <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css"><!-- bootstrap datepicker -->
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
    <a href="." class="logo">   <!-- Logo -->
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
              <span class="hidden-xs"><?php echo $_SESSION['fname']; ?></span> <!-- hidden-xs hides the username on small devices so only the image appears. -->
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">  <!-- The user image in the menu -->
                <img src="dist/img/user2-160x160.gif" class="img-circle" alt="User Image">
                <p>
                  <?php echo $_SESSION['fname']; ?> - Ground Division Member

                </p>
              </li>

              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="member.php?mode=0">History</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="member.php?mode=1">Reserve</a>
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
                  <form action="profile.php?mode=2" method="post">
                    <input type="submit" class="btn btn-default btn-flat" value="Profile" />
                    <input type="hidden" name="mode" value=2>
                      <input type="hidden" name="full_name" value="<?php echo $_SESSION['fname']; ?>" >
                      <input type="hidden" name="user_num" value="<?php echo $_SESSION['user_no']; ?>" >
                      <input type="hidden" name="username" value="<?php echo $_SESSION['user_name']; ?>" >
                      <input type="hidden" name="password" value="<?php echo $_SESSION['user_pass']; ?>" >
                      <input type="hidden" name="email" value="<?php echo $_SESSION['e_mail']; ?>" >
                      <input type="hidden" name="user_tier" value="<?php echo $_SESSION['tier']; ?>" >
                      <input type="hidden" name="user_telephone" value="<?php echo $_SESSION['tele_number']; ?>" >
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
                  <?php echo $_SESSION['fname']; ?> - <?php echo $_SESSION['tier']; ?>
                </p>
              </li>

              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="member.php?mode=0">History</a>
                  </div>
                  <?php
                    if($_SESSION['tier'] == 'Driver'){
                      echo '<div class="col-xs-4 text-center">';
                      echo '<a href="member.php?mode=3">Report</a>';
                      echo '</div>';
                    }else{
                      echo '<div class="col-xs-4 text-center">';
                      echo '</div>';
                    }
                  ?>
                  <div class="col-xs-4 text-center">
                    <a href="member.php?mode=1">Reserve</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <form action="profile.php?mode=2" method="post">
                    <input type="submit" class="btn btn-default btn-flat" value="Profile" />
                    <input type="hidden" name="mode" value=2>
                      <input type="hidden" name="full_name" value="<?php echo $_SESSION['fname']; ?>" >
                      <input type="hidden" name="user_num" value="<?php echo $_SESSION['user_no']; ?>" >
                      <input type="hidden" name="username" value="<?php echo $_SESSION['user_name']; ?>" >
                      <input type="hidden" name="password" value="<?php echo $_SESSION['user_pass']; ?>" >
                      <input type="hidden" name="email" value="<?php echo $_SESSION['e_mail']; ?>" >
                      <input type="hidden" name="user_tier" value="<?php echo $_SESSION['tier']; ?>" >
                      <input type="hidden" name="user_telephone" value="<?php echo $_SESSION['tele_number']; ?>" >
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
            <li><a href="brokenEquip.php?mode=0">Current Job</a></li>
            <li><a href="brokenEquip.php?mode=1">History</a></li>
            <li><a href="broken_index.php">Report Broken Equipment</a></li>
          </ul>
        </li>


        <li class="treeview">
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
    if(isset($_SESSION['tier'])){
    ?>
    <?php
      if($_GET['mode'] == 0){
    ?>
    <section class="content-header">
      <h1>
        History Record
        <small>- your history.</small>
      </h1>
    </section>
    <section class="content">
      <div class="box" style="padding-bottom:30px;padding-left:30px;padding-right:30px">
        <div class="box-header">
          <h3 class="box-title" style="margin-top:20px">History List</h3>
        </div>
      <div class="col-sm-13">
        <table id="example2" class="table table-bordered table-hover" style="width:100%;" align="center"><!-- style="width:100%;margin-top:20px;" align="center" > -->
          <thead>
          <tr style="height:30px;">
            <th style="text-align:center;width:15%;">Request No.</th>
            <th style="text-align:center;width:30%;">Request Location</th>
            <th style="text-align:center;width:30%;">Status</th>
            <th style="text-align:center;width:30%;">Date</th>
            <th style="text-align:center;width:30%;">From</th>
            <th style="text-align:center;width:30%;">To</th>
            <th style="text-align:center;width:30%;">Cancel</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $q = "SELECT * FROM request WHERE request_by = ".$_SESSION['user_no'].";";
          $res = $db -> query($q);
          while($row = $res -> fetch_array()){
        ?>
        <tr style="height:30px;">
          <th style="text-align:center;width:15%;"><?php echo $row['request_no']; ?></th>
          <th style="text-align:center;width:30%;"><?php echo $row['request_to_place']; ?></th>
          <th style="text-align:center;width:30%;"><?php echo $row['request_approve']; ?></th>
          <th style="text-align:center;width:30%;"><?php echo $row['request_date']; ?></th>
          <th style="text-align:center;width:30%;"><?php echo substr($row['request_from'], 0, 5); ?></th>
          <th style="text-align:center;width:30%;"><?php echo substr($row['request_to'], 0, 5); ?></th>
          <th style="text-align:center;width:30%;">
            <form action="confirm.php" method="post">
              <input type="hidden" name="mode" value=7 >
              <input type="hidden" name="request_number" value=<?php echo $row['request_no']; ?>>
              <button type="submit" class="btn btn-block btn-danger">
                Cancel
              </button>
            </form>
          </th>
        </tr>
        <?php
          }
        ?>

        </tbody>
        </table>
      </div>
    </section>
    <?php
      }
      else if($_GET['mode'] == 1){
    ?>

    <section class="content-header">
      <h1>
        Van Reservation System
        <small>- Please Select your time.</small>
      </h1>
    </section>

    <section class="content">
      <div class="box box-danger">
        <div class="box-body">
          <div class="box-body">

            <form action="confirm.php" method="post" id="request_form">
              <input type="hidden" name="mode" value=4>
              <input type="hidden" name="request_by" value=<?php echo $_SESSION['user_no']; ?>>
              <!-- Date -->
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="date_select" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>

            <!-- /.form group -->
            <div class="bootstrap-timepicker">
              <div class="form-group">
                <label>From</label>
                <div class="input-group" style="margin-bottom:10px;">
                  <input type="text" name="from_time" class="form-control timepicker">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>

            <div class="bootstrap-timepicker">
              <div class="form-group">
                <label>To</label>
                <div class="input-group" style="margin-bottom:10px;">
                  <input type="text" name="to_time" class="form-control timepicker">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>
            <!-- Textarea -->
            <div class="form-group">
              <label>Place to go :</label>
              <input type="text" name="destination" class="form-control" placeholder="Please Enter Destination"></input>
            </div>
        </form>
            <!-- textarea -->
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="description" rows="3" placeholder="Enter ..." form="request_form"></textarea>
            </div>
            <div  class="col-md-3"></div>
            <div  class="col-md-6">
              <button type="submit" class="btn btn-block btn-primary" form="request_form">Submit</button>
            </div>

        </div>
    </section>
    <?php
      }
      else if($_GET['mode'] == 2){
    ?>
    <section class="content-header">
      <h1>
        List of request
        <small>- please choose accept or decline.</small>
      </h1>
    </section>
    <section class="content">
      <div class="box" style="padding-bottom:30px;padding-left:30px;padding-right:30px">
        <div class="box-header">
          <h3 class="box-title" style="margin-top:20px">List of request</h3>
        </div>
      <div class="col-sm-13">
        <table id="example2" class="table table-bordered table-hover" style="width:100%;" align="center"><!-- style="width:100%;margin-top:20px;" align="center" > -->
          <thead>
          <tr style="height:30px;">
            <th style="text-align:center;width:18%;">Location</th>
            <th style="text-align:center;width:18%;">Applicant</th>
            <th style="text-align:center;width:10%;">Date</th>
            <th style="text-align:center;width:18%;">Time</th>
            <th style="text-align:center;width:18%;">Status</th>
            <th style="text-align:center;width:18%;">More Information</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $q = "SELECT * FROM request, member WHERE request.request_by = member.member_id AND request_approve = 'Waiting' ORDER BY request_date DESC;";
          $res = $db -> query($q);
          while($row = $res -> fetch_array()){
        ?>
        <tr style="height:30px;">
          <th style="text-align:center;width:18%;"><?php echo $row['request_to_place']; ?></th>
          <th style="text-align:center;width:18%;"><?php echo $row['full_name']; ?></th>
          <th style="text-align:center;width:10%;"><?php echo $row['request_date']; ?></th>
          <th style="text-align:center;width:18%;"><?php echo $row['request_from']; ?> - <?php echo $row['request_to']; ?></th>
          <th style="text-align:center;width:18%;"><?php echo $row['request_approve']; ?></th>
          <th style="text-align:center;width:10%;">
            <form action="information.php" method='post'>
              <input type="hidden" name="request_no" value=<?php echo $row['request_no']; ?> >
              <input type="hidden" name="full_name" value="<?php echo $row['full_name']; ?>" >
              <input type="hidden" name="date" value=<?php echo $row['request_date']; ?> >
              <input type="hidden" name="from" value=<?php echo $row['request_from']; ?> >
              <input type="hidden" name="to" value=<?php echo $row['request_to']; ?> >
              <input type="hidden" name="description" value="<?php echo $row['request_description']; ?>" >
              <button type="submit" class="btn btn-block btn-primary">
                More Information
              </button>
            </form>
          </th>
        </tr>
        <?php
          }
        ?>
        </tbody>
        </table>
      </div>
    </section>
    <?php
      }
      else if($_GET['mode'] == 3){
    ?>





        <section class="content-header">
          <h1>
            Driver Report Form
            <small>- Please insert all of the information</small>
          </h1>
        </section>

        <section class="content">
          <div class="box box-danger">
            <div class="box-body">
              <div class="box-body">

                <form action="confirm.php" method="post" id="driver_form">
                  <input type="hidden" name="mode" value=8>
                  <input type="hidden" name="confirm_by" value=<?php echo $_SESSION['user_no']; ?>>
                  <input type="hidden" name="data_date" value=<?php echo date("Y-m-d"); ?>>
                  <!-- Date -->
                  <div class="form-group">
                    <label>Distance that use (Miles)</label>
                    <input type="number" name="distance" class="form-control" placeholder="Please Enter Miles that use"  title="Please insert number only" required=""></input>
                  </div>

                  <div class="form-group">
                    <label>Number of Passenger</label>
                    <input type="number" name="passenger" class="form-control" placeholder="Please Enter number of passenger"  title="Please insert number only" required=""></input>
                  </div>

                  <div class="form-group">
                    <label>From (Place) </label>
                    <input type="text" name="place_from" class="form-control" placeholder="Please Enter Name of Place" required="" title="Please fill in this box before confirm"></input>
                  </div>

                  <div class="form-group">
                    <label>Place to go</label>
                    <input type="text" name="place_to" class="form-control" placeholder="Please Enter Destination" required="" title="Please fill in this box before confirm"></input>
                  </div>

                  <div class="form-group">
                    <label>Request By (If have)</label>
                    <input type="text" name="requester" class="form-control" placeholder="Please insert the name of requester"></input>
                  </div>

                  <div class="form-group">
                    <label>Current Location (Must Insert)</label>
                    <input type="text" name="current_locate" class="form-control" placeholder="Please insert the current locaton" required=""></input>
                  </div>

                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" required>
                      <option value="" selected disabled>Please, select the status</option>
                      <option value='Free'>Free</option>
                      <option value='Working'>On Working</option>
                    </select>
                  </div>
            </form>
                <!-- textarea -->

                <div  class="col-md-3"></div>
                <div  class="col-md-6">
                  <button type="submit" class="btn btn-block btn-primary" form="driver_form">Submit</button>
                </div>

            </div>
        </section>











    <?php
      }
    ?>
    <?php
  }
  else{
    ?>
    <section class="content">
      <center>
        <h1 style="padding-top:20%">
          You not have Permission to access this page.<br>
          Please, Loging-in
        </h1>
      </center>
    </section>
    <?php
  }
    ?>
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
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.js"></script>
     <script>
       $(function () {
         //Datemask dd/mm/yyyy
         $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
         //Colorpicker
         $(".my-colorpicker1").colorpicker();
         //color picker with addon
         $(".my-colorpicker2").colorpicker();
         //Timepicker
         $(".timepicker").timepicker({
           minuteStep: 60,
           defaultTime: '06:00',
           use24hours: true,
           showMeridian: false,
           showInputs: false
         });

         $("#example1").DataTable();
         $('#example2').DataTable({
           "paging": true,
           "lengthChange": false,
           "searching": false,
           "ordering": false,
           "info": true,
           "autoWidth": false
         });
       });
       //Date picker
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    });
     </script>
</body>
</html>
