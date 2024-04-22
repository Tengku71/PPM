<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
  }
  require_once '../koneksi.php';

  if (isset($_GET['cari'])) {
    $query = $_GET['cari'];

    // Construct SQL query to fetch matching records
    $sql = "SELECT * FROM siswa 
          WHERE nama LIKE '%$query%' 
          OR gender LIKE '%$query%' 
          OR nis LIKE '%$query%' 
          OR kelas LIKE '%$query%'
          ORDER BY RAND()
          LIMIT 10"; // Adjust the limit according to your preference


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
