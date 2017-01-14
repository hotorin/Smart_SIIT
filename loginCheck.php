<?php
require_once('connect.php');
session_start();

//----------------------------------------------------------------------------------------------------------------------//
if(isset($_POST['username']) && isset($_POST['password'])){
		$q = 'SELECT * FROM member WHERE username = "'.$_POST['username'].'" AND password = "'.$_POST['password'].'";';
		$res = $db -> query($q);
		while($row = $res -> fetch_array())
			{
				$_SESSION['fname'] = $row['full_name'];
				$_SESSION['user_name'] = $row['username'];
				$_SESSION['user_pass'] = $row['password'];
				$_SESSION['e_mail'] = $row['email'];
				$_SESSION['tier'] = $row['member_tier'];
			}
}
else{
  echo "
        <script type='text/javascript'>
          alert('Log-in Failed, Please try again!');
        </script>
       ";
  echo "
        <script type='text/javascript'>
          window.location = 'login.php';
        </script>
       ";
}
//-----------------------------------------------------------------------------------------------------------------------//
?>
<script type='text/javascript'>
  window.location = '.';
</script>
