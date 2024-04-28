<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location:../index.php?pesan=belum_login");
}
require_once '../koneksi.php';

if (isset($_GET['tingkat']) && isset($_GET['kelas'])) {
  $tingkat = $_GET['tingkat'];
  $kelas = $_GET['kelas'];
  // Construct SQL query to fetch matching records
  if ($tingkat === "Tingkat" && $kelas === "Kelas") {
    $sql = "SELECT * FROM siswa ORDER BY RAND()";
  }elseif($tingkat === "SMK" && $kelas === "Kelas"){
    $sql = "SELECT * FROM siswa WHERE tingkat = '$tingkat' ORDER BY RAND()";
  }elseif($tingkat === "SMP" && $kelas === "Kelas"){
    $sql = "SELECT * FROM siswa WHERE tingkat = '$tingkat' ORDER BY RAND()";
  }else {
    $sql = "SELECT * FROM siswa WHERE tingkat = '$tingkat' AND kelas = '$kelas' ORDER BY RAND()";
  }

  $result = mysqli_query($conn, $sql);

  $searchResults = array();
  if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      // Add each matching record to the results array
      $searchResults[] = $row;
    }
  }

  // Return search results as JSON
  header('Content-Type: application/json');
  echo json_encode($searchResults);
}
?>
