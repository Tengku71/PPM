<?php
    session_start();
    if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../koneksi.php';

        $nama = mysqli_real_escape_string($conn, $_POST['nama']);
        $nis = mysqli_real_escape_string($conn, $_POST['nis']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $kelas = mysqli_real_escape_string($conn, $_POST['kelas']);

        $sql = "INSERT INTO siswa (nama, nis, gender, kelas) VALUES ('$nama', '$nis', '$gender', '$kelas')";
        if (mysqli_query($conn, $sql)) {
            header("Location: ../data-siswa.php");
            exit(); 
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
    }
?>
