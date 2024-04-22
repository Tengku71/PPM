<?php
session_start();
if($_SESSION['status']!="login"){
	header("location:../index.php?pesan=belum_login");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require_once '../koneksi.php';
    
    $buku_id = mysqli_real_escape_string($conn, $_POST['buku_id']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $rak = mysqli_real_escape_string($conn, $_POST['rak']);
    $sampul = mysqli_real_escape_string($conn, $_POST['sampul']);
    $isbn = mysqli_real_escape_string($conn, $_POST['isbn']);
    $lampiran = mysqli_real_escape_string($conn, $_POST['lampiran']);
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $penerbit = mysqli_real_escape_string($conn, $_POST['penerbit']);
    $pengarang = mysqli_real_escape_string($conn, $_POST['pengarang']);
    $tahun = mysqli_real_escape_string($conn, $_POST['tahun']);
    $isi = mysqli_real_escape_string($conn, $_POST['isi']);
    $jumlah = mysqli_real_escape_string($conn, $_POST['jumlah']);
    $tanggal_masuk = mysqli_real_escape_string($conn, $_POST['tanggal_masuk']);
    
    $sql = "INSERT INTO buku (buku_id, kategori, rak, sampul, isbn, lampiran, judul, pengarang, penerbit, tahun, isi, jumlah, tanggal_masuk) VALUES ( '$buku_id', '$kategori', '$rak', '$sampul', '$isbn', '$lampiran', '$judul', '$penerbit', '$pengarang', '$tahun', '$isi', '$jumlah', '$tanggal_masuk')";
    
    if (mysqli_query($conn, $sql)) {
      header("Location: ../data-buku.php");
      exit(); 
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>