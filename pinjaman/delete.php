<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
  }
  if (isset($_GET['id'])) {
  // Access the 'id' key if it exists
    $id = $_GET['id'];
    require_once '../koneksi.php';
    
    $sql = "DELETE FROM pinjaman WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
      var_dump($id);
      header("Location: ../data-pinjaman.php");
      exit(); 
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
  } else {
    // Handle the case when the 'id' key is not present
    echo "ID parameter is missing.";
  }
?>