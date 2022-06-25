<?php

  $username = $_POST['user'];
  $password = $_POST['pass'];


  $con = mysqli_connect("localhost","root","","login");
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysqli_real_escape_string($con,$username);
  $password = mysqli_real_escape_string($con,$password);

  mysqli_connect("localhost", "root", "");
  mysqli_select_db($con,"login");

  $result = mysqli_query($con,"select * from users where username = '$username' and password ='$password'")
             or die("Failed to query database " .mysql_error());

  $row = mysqli_fetch_array($result);
  if (isset($row['username']) == $username && isset($row['password']) == $password ){
      echo "Success!!! Welcome ";
  } 
  else{
      echo "Failed to login!";
  }

  ?>