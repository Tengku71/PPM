<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
  }
  require_once '../koneksi.php';
  
  $id = $_POST['id'];
  $buku_id = $_POST['buku_id'];
  $kategori = $_POST['kategori'];
  $rak = $_POST['rak'];
  $sampul = $_POST['sampul'];
  $isbn = $_POST['isbn'];
  $lampiran = $_POST['lampiran'];
  $judul = $_POST['judul'];
  $penerbit = $_POST['penerbit'];
  $pengarang = $_POST['pengarang'];
  $tahun = $_POST['tahun'];
  $isi = $_POST['isi'];
  $jumlah = $_POST['jumlah'];
  $tanggal_masuk = $_POST['tanggal_masuk'];
  
  $sql = "UPDATE buku SET buku_id='$buku_id', kategori='$kategori', rak='$rak', sampul='$sampul', isbn='$isbn', lampiran='$lampiran', judul='$judul', pengarang='$pengarang', tahun='$tahun', isi='$isi', jumlah='$jumlah', tanggal_masuk='$tanggal_masuk' WHERE id='$id'";
  
  if (mysqli_query($conn, $sql)) {
    header("Location: ../data-buku.php");
    exit(); 
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>