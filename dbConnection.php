<?php
  $servername = "localhost";
  $username = "rmnJanda";
  $password = "Kauldhar@01";
  $dbname = "attendanceDB";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error){
      echo $conn->connect_error;
  }
?>