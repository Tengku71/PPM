<?php
session_start();
if($_SESSION['status']!="login"){
	header("location:../index.php?pesan=belum_login");
}
require_once '../koneksi.php';

if (isset($_GET['cari'])) {
  $query = $_GET['cari'];

  // Construct SQL query to fetch matching records
  $sql = "SELECT * FROM buku 
            WHERE judul LIKE '%$query%' 
            OR pengarang LIKE '%$query%' 
            OR penerbit LIKE '%$query%'";

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
