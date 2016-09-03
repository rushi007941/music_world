<?php

      $link = mysqli_connect("localhost", "rushi", "hello", "project");

      $first_name = mysqli_real_escape_string($link,$_POST['first_name']);
      $last_name = mysqli_real_escape_string($link,$_POST['last_name']);
      echo $first_name;
      $sql = "SELECT count(*) FROM person WHERE first_name = '$first_name' and last_name = '$last_name'";
      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $first_name;
         $_SESSION['login_user'] = $last_name;

         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }

?>
