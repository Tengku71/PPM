<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
  }
  require_once '../koneksi.php';

  // Fetch all data from the database
  $sql = "SELECT * FROM siswa ORDER BY RAND()";
  $result = $conn->query($sql);

  $data = array();

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
  }

  // Close the connection
  $conn->close();

  // Return the data as JSON
  echo json_encode($data);
?>