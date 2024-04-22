<?php
    session_start();
    if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
    }
  require_once '../koneksi.php';

  // Fetch all data from the database
  $sql = "SELECT pinjaman.*, siswa.nama, buku.judul FROM pinjaman
        INNER JOIN siswa ON pinjaman.id_siswa = siswa.id
        INNER JOIN buku ON pinjaman.id_buku = buku.id";

$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);
$conn->close();
?>