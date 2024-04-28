<?php
    session_start();
    if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../koneksi.php';

        $nama = $_POST['nama'];
        $nis = $_POST['nis'];
        $gender = $_POST['gender'];
        $kelas = $_POST['kelas'];
        $tingkat = $_POST['tingkat'];
        $wali_kelas = mysqli_real_escape_string($conn, $_POST['wali_kelas']); // Only one value for all students
        
        // Loop through each set of data
        for ($i = 0; $i < count($nama); $i++) {
            $nama_siswa = mysqli_real_escape_string($conn, $nama[$i]);
            $nis_siswa = mysqli_real_escape_string($conn, $nis[$i]);
            $gender_siswa = mysqli_real_escape_string($conn, $gender[$i]);
            $kelas_siswa = mysqli_real_escape_string($conn, $kelas[$i]);
            $tingkat_siswa = mysqli_real_escape_string($conn, $tingkat[$i]);
            
            $sql = "INSERT INTO siswa (nama, nis, gender, kelas, tingkat, wali_kelas) VALUES ('$nama_siswa', '$nis_siswa', '$gender_siswa', '$kelas_siswa', '$tingkat_siswa', '$wali_kelas')";
            
            if (mysqli_query($conn, $sql)) {
                header("Location: ../data-siswa.php");
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
        }

        // Close connection
        mysqli_close($conn);
    }
?>
