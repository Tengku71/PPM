<?php
    session_start();
    if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../koneksi.php';

        $idSiswa = mysqli_real_escape_string($conn, $_POST['idSiswa']);
        $idBuku = mysqli_real_escape_string($conn, $_POST['idBuku']);
        $tanggal_peminjman = mysqli_real_escape_string($conn, $_POST['tanggal-peminjaman']);
        $tanggal_pengembalian = mysqli_real_escape_string($conn, $_POST['tanggal-pengembalian']);

        $sql = "INSERT INTO pinjaman (id_siswa, id_buku, tanggal_peminjaman, tanggal_pengembalian) VALUES ('$idSiswa', '$idBuku', '$tanggal_peminjman', '$tanggal_pengembalian')";
        if (mysqli_query($conn, $sql)) {
            header("Location: ../data-pinjaman.php");
            exit(); 
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
    }
?>
