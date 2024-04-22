<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
require_once 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn, $sql);
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>