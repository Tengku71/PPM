<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'koneksi.php';

        $user = mysqli_real_escape_string($conn, $_POST['user']);
        $nama = mysqli_real_escape_string($conn, $_POST['nama']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);

        $sql = "INSERT INTO users (nama, user, email, pass) VALUES ('$nama', '$user', '$email', '$pass')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
            exit(); 
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
    }
?>
