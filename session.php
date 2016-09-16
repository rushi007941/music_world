<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $sql = "select username from silog where username = '$user_check' ";
  $ses_sql = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($ses_sql);

   $login_session = $row['username'];

      if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
