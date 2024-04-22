<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
  }

  require_once '../koneksi.php';

  if (isset($_GET['cari'])) {
    $query = $_GET['cari'];

    // Construct SQL query to fetch matching records
    $sql = "SELECT pinjaman.*, siswa.nama, buku.judul FROM pinjaman
          INNER JOIN siswa ON pinjaman.id_siswa = siswa.id
          INNER JOIN buku ON pinjaman.id_buku = buku.id
          WHERE siswa.nama LIKE '%$query%'
          OR buku.judul LIKE '%$query%'";
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
