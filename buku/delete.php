<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location:../index.php?pesan=belum_login");
  exit(); // Ensure script execution stops after redirection
}

if (isset($_GET['id'])) {
  // Access the 'ids' key if it exists
  $ids = $_GET['id'];
  require_once '../koneksi.php';

  // Convert comma-separated IDs string into an array
  $idArray = explode(",", $ids);
  $idArray = array_map('intval', $idArray); // Convert string IDs to integers to prevent SQL injection

  // Construct the SQL query with placeholders
  $placeholders = implode(',', array_fill(0, count($idArray), '?'));
  $sql = "DELETE FROM buku WHERE id IN ($placeholders)";

  // Prepare the statement
  $stmt = mysqli_prepare($conn, $sql);

  if ($stmt) {
    // Bind the parameters
    mysqli_stmt_bind_param($stmt, str_repeat('i', count($idArray)), ...$idArray);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
      // Redirect to the page after successful deletion
      header("Location: ../data-buku.php");
      exit(); // Ensure script execution stops after redirection
    } else {
      echo "Error executing statement: " . mysqli_stmt_error($stmt);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
  } else {
    echo "Error preparing statement: " . mysqli_error($conn);
  }

  // Close the connection
  mysqli_close($conn);
} else {
  // Handle the case when the 'ids' key is not present
  echo "IDs parameter is missing.";
}
?>
