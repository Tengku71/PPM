<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
  }
  require_once '../koneksi.php';
  
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $nis = $_POST['nis'];
  $gender = $_POST['gender'];
  $kelas = $_POST['kelas'];
  
  $sql = "UPDATE siswa SET nama='$nama', nis='$nis', gender='$gender', kelas='$kelas' WHERE id='$id'";
  
  if (mysqli_query($conn, $sql)) {
    header("Location: ../data-siswa.php");
    exit(); 
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>