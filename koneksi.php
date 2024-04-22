<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "perpus";
  
  $conn = new mysqli($dbhost, $dbname, $dbuser, $dbpass);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  mysqli_select_db($conn, $dbname);
  
?>