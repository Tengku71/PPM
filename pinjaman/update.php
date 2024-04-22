<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
  }
  require_once '../koneksi.php';
  
  $id = $_POST['id'];
  $id_siswa = $_POST['idSiswa'];
  $id_buku = $_POST['idBuku'];
  $tanggal_peminjaman = $_POST['tanggal-peminjaman'];
  $tanggal_pengembalian = $_POST['tanggal-pengembalian'];

  $sql = "UPDATE pinjaman SET id_siswa='$id_siswa', id_buku='$id_buku', tanggal_peminjaman='$tanggal_peminjaman', tanggal_pengembalian='$tanggal_pengembalian' WHERE id='$id'";
  
  if (mysqli_query($conn, $sql)) {
    // var_dump($id, $id_siswa, $id_buku, $tanggal_peminjaman, $tanggal_pengembalian);
    header("Location: ../data-pinjaman.php");
    exit(); 
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>