<?php
require_once('connect.php');
session_start();
?>

<?php
  if($_POST['mode'] == 0){
    echo $_POST['mode'];
    echo $_POST['full_name_change'];
    echo $_POST['username_change'];
    echo $_POST['email_change'];
    echo $_POST['member_no'];
    echo $_POST['tier_change'];

    $q = 'SELECT * FROM member WHERE member_id = '.$_POST['member_no'].';';
    $res = $db -> query($q);
    echo '<br>';
    if ($res && $res->num_rows == 1 ){
      $q = 'UPDATE member SET     full_name="'.$_POST['full_name_change'].'",
                                  username="'.$_POST['username_change'].'",
                                  email="'.$_POST['email_change'].'",
                                  member_tier="'.$_POST['tier_change'].'"
                          WHERE   member_id='.$_POST['member_no'].';';
      $res = $db -> query($q);

      $q = 'SELECT * FROM driver WHERE member_id = '.$_POST['member_no'].';';
      $res = $db -> query($q);
      if ($res && $res->num_rows == 1 ){
      }
      else{
        $q = 'INSERT INTO   driver  (driver_position, member_id)
                            VALUE   ("Driver", '.$_POST['member_no'].');';
        $res = $db -> query($q);
      }

    }
    else{
  ?>

  <script type='text/javascript'>
    alert('The modified can not proceed because some problem!');
  </script>
  <script type='text/javascript'>
    window.location = 'admin.php?mode=1';
  </script>

  <?php
    }
  }
  else if($_POST['mode'] == 1){
    echo $_POST['mode'];
    echo $_POST['location_change'];
    echo $_POST['driver_change'];
    echo $_POST['license_change'];
    echo $_POST['van_number'];

    $q = 'SELECT * FROM van WHERE van_no = '.$_POST['van_number'].';';
    $res = $db -> query($q);
    echo '<br>';
    if ($res && $res->num_rows == 1 ){
      $q = 'SELECT * FROM driver WHERE member_id = '.$_POST['driver_change'].';';
      $res = $db -> query($q);
      while($row = $res -> fetch_array()){
        $id_update = $row['driver_no'];
      }
      echo '<br>';
      $q = 'UPDATE van SET        location="'.$_POST['location_change'].'",
                                  driver_no='.$id_update.',
                                  van_license_plate="'.$_POST['license_change'].'"
                          WHERE   van_no='.$_POST['van_number'].';';
      $res = $db -> query($q);
    }
    else{
    ?>

      <script type='text/javascript'>
        alert('The modified can not proceed because some problem!');
      </script>
      <script type='text/javascript'>
        window.location = 'admin.php?mode=1';
      </script>

    <?php
    }
    ?>
    <script type='text/javascript'>
    	alert('The User number <?php echo $_POST['member_no'];?> has been modified!');
    </script>
    <script type='text/javascript'>
    	window.location = 'admin.php?mode=0';
    </script>
  <?php
  }
  else if($_POST['mode'] == 2){
    echo $_POST['plate'];
    echo $_POST['location'];
    echo $_POST['driver'];

    	$q = 'SELECT * FROM van WHERE van_license_plate = "'.$_POST['plate'].'";';
      $res = $db -> query($q);
  		$result = $res->fetch_array();
      if (!$result)
  		{
  			$q = "INSERT INTO van (	location, 	driver_no, 	van_license_plate)
  						VALUES ('".$_POST['location']."', ".$_POST['driver'].",	'".$_POST['plate']."');";
  			$res = $db -> query($q);
  		}
      else{
  		  echo "
  		        <script type='text/javascript'>
  		          alert('Add van failed!, It have this plate already in database!');
  		        </script>
  		       ";
  		  echo "
  		        <script type='text/javascript'>
  		          window.location = 'admin.php?mode=0';
  		        </script>
  		       ";
  		}
?>
  <script type='text/javascript'>
    alert('Add Van Successful!');
  </script>
  <script type='text/javascript'>
    window.location = 'admin.php?mode=0';
  </script>
<?php
  }
  else if($_POST['mode'] == 3){
    $q = 'SELECT * FROM broken_equipment WHERE equipment_ID = '.$_POST['id_equip'].';';
    $res = $db -> query($q);
    $result = $res->fetch_array();
    if (!$result){
      echo "
            <script type='text/javascript'>
              alert('The Information is missing from database!');
            </script>
           ";
      echo "
            <script type='text/javascript'>
              window.location = 'brokenEquip.php?mode=0';
            </script>
           ";
    }
    else{
      if(isset($_POST['assign_name'])){
        $q = 'UPDATE broken_equipment SET     equipment_status ="'.$_POST['status_change'].'",
                                              equipment_assign ='.$_POST['assign_name'].'
                            WHERE   equipment_ID ='.$_POST['id_equip'].';';
      }
      else{
        $q = 'UPDATE broken_equipment SET     equipment_status ="'.$_POST['status_change'].'"
                            WHERE   equipment_ID ='.$_POST['id_equip'].';';
      }
      $res = $db -> query($q);
    }
?>
<script type='text/javascript'>
  alert('Successful Modified, Thank!!');
</script>
<script type='text/javascript'>
  window.location = 'brokenEquip.php?mode=0';
</script>

<?php
  }
  else if($_POST['mode'] == 4){
    $q = 'INSERT INTO request (request_date, request_from, request_to, request_to_place, request_description, request_by)
                              VALUES ("'.$_POST['date_select'].'",
                                      "'.$_POST['from_time'].'",
                                      "'.$_POST['to_time'].'",
                                      "'.$_POST['destination'].'",
                                      "'.$_POST['description'].'",
                                      '.$_POST['request_by'].');';
    $res = $db -> query($q);
?>
<script type='text/javascript'>
  alert('Your have request the Van complete, Please see the history for the status!!');
</script>
<script type='text/javascript'>
  window.location = 'member.php?mode=0';
</script>
<?php
  }
  else if($_POST['mode'] == 5){
    if(isset($_POST['assign_to'])){
      $q = 'UPDATE request SET      request_assign ='.$_POST['assign_to'].',
                                    request_assign_by ='.$_POST['assign_by'].',
                                    request_approve ="Accepted",
                                    request_comment ="'.$_POST['comment'].'"
                          WHERE   request_no ='.$_POST['request_number'].';';
      $res = $db -> query($q);
    }
    else{
?>
      <script type='text/javascript'>
        alert("You can't confirm because you didn't choose the Van to assign!");
      </script>
      <script type='text/javascript'>
        window.location = 'member.php?mode=2';
      </script>
<?php
    }
?>
<script type='text/javascript'>
  alert("You assign work success!");
</script>
<script type='text/javascript'>
  window.location = 'member.php?mode=2';
</script>

<?php
  }
  else if($_POST['mode'] == 6){
    $q = 'UPDATE request SET      request_assign_by ='.$_POST['assign_by'].',
                                  request_approve ="Decline",
                                  request_comment ="Please, contact ground division for more information"
                         WHERE    request_no ='.$_POST['request_number'].';';
    $res = $db -> query($q);
?>
<script type='text/javascript'>
  alert("You decline success!");
</script>
<script type='text/javascript'>
  window.location = 'member.php?mode=2';
</script>
<?php
  }
  else if($_POST['mode'] == 7){
    $q = "DELETE FROM request where request_no = ".$_POST['request_number'].";";
    if(!$db->query($q)){
      echo "DELETE failed. Error: ".$mysqli->error ;
    }
    $db->close();
?>
<script type='text/javascript'>
  alert("You Cancel This Order!!");
</script>
<script type='text/javascript'>
  window.location = 'member.php?mode=0';
</script>
<?php
  }
?>


<script type='text/javascript'>
  alert('The User number <?php echo $_POST['member_no'];?> has been modified!');
</script>
<script type='text/javascript'>
  window.location = 'admin.php?mode=1';
</script>
