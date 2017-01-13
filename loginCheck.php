<?php
session_start();
if($_POST['username'] == 'siitAdmin' && $_POST['password'] == 'siit'){
  $_SESSION["number"] = "1";
  $_SESSION["role"] = "admin";
}
else if($_POST['username'] == 'siitStudent' && $_POST['password'] == 'siit'){
  $_SESSION["number"] = "2";
  $_SESSION["role"] = "member";
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
?>
<script type='text/javascript'>
  window.location = '.';
</script>
