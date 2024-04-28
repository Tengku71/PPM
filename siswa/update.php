<?php
session_start();
if($_SESSION['status']!="login"){
  header("location:../index.php?pesan=belum_login");
}
require_once '../koneksi.php';

// Check if form is submitted
if(isset($_POST['id'])) {
  // Get arrays of data
  $ids = $_POST['id'];
  $namas = $_POST['nama'];
  $nises = $_POST['nis'];
  $tingkats = $_POST['tingkat'];
  $genders = $_POST['gender'];
  $kelass = $_POST['kelas'];
  $wali_kelass = $_POST['wali_kelas'];

  // Loop through each ID
  foreach($ids as $key => $id) {
    // Get data for current ID
    $nama = $namas[$key];
    $nis = $nises[$key];
    $tingkat = $tingkats[$key];
    $gender = $genders[$key];
    $kelas = $kelass[$key];
    $wali_kelas = $wali_kelass[$key];

    // Update record for current ID
    $sql = "UPDATE siswa SET nama='$nama', nis='$nis', tingkat='$tingkat', gender='$gender', kelas='$kelas', wali_kelas='$wali_kelas' WHERE id='$id'";
  
    if (mysqli_query($conn, $sql)) {
      continue;
    } else {
      // Error updating record
      echo "Error updating record for ID $id: " . mysqli_error($conn);
    }
  }
  
  // Redirect to the page after updating
  header("Location: ../data-siswa.php");
  exit(); 
} else {
  // If form is not submitted, redirect back
  header("Location: ../data-siswa.php");
  exit();
}
mysqli_close($conn);
?>
