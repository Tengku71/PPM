<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      include '../koneksi.php';

      $user = $_POST['user'];
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $pass = $_POST['password'];

      $sql = "UPDATE users SET nama='$nama', username='$user', email='$email', password='$pass'";
      if (mysqli_query($conn, $sql)) {
          header("Location: ../logout.php");
          exit(); 
      } else {
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
      }

      // Close connection
      mysqli_close($conn);
  }
?>
