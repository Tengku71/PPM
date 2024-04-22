<?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
  }
  require_once 'koneksi.php'; 
  $user = $_SESSION['username'];
  $sql = "SELECT * FROM siswa ORDER BY RAND() LIMIT 10;";
  $result = mysqli_query($conn, $sql);
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
  </head>
  <body style="height: 100vh;">
    <div class="main h-100 w-100 d-flex g-0">
      <!-- Side Navbar -->
      <div class="d-flex ms-3 pe-3 flex-column border-end border-dark-subtle border-1 justify-content-start h-100 w-25">
        <div class="logo d-flex column-gap-3 align-items-center mt-3 mb-5 ">
          <img src="img/logo.jpeg" alt="logo" width="65">
          <p class="d-flex flex-column fw-bold">
            <span>Library Ponpes</span>
            <span>Zaenudin</span>
          </p>
        </div>

        <!-- Navbar -->
        <div class="navbar d-flex flex-column align-items-start h-75 w-100">
          <!-- Home -->
          <div class="home w-100">
            <p class="fw-bold">HOME</p>
            <div class="dashboard">
              <a href="dashboard.php" class="btn btn-success dashboard-btn d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-grid me-2 dashboard-svg" viewBox="0 0 16 16">
                  <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
                </svg>
                <span class="">Dashboard</span>
              </a>
            </div>
          </div>

          <div class="master-data w-100">
            <p class="fw-bold">MASTER DATA</p>
            <!-- Data Siswa -->
            <a href="data-siswa.php" class="data-siswa-btn btn d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person me-2 data-siswa-svg" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
              </svg>
              <span class="">Data Siswa</span>
            </a>

            <!-- Data Buku -->
            <a href="data-buku.php" class="data-buku-btn btn d-flex align-items-center ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text me-2 data-buku-svg" viewBox="0 0 16 16">
              <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
              <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
              <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
            </svg>
              <span class="">Data Buku</span>
            </a>
          </div>

          <div class="transaksi w-100">
            <p class="fw-bold">TRANSAKSI</p>
            <!-- Pinjaman -->
            <a href="pinjaman.php" class="pinjaman-btn btn d-flex align-items-center ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text me-2 pinjaman-svg" viewBox="0 0 16 16">
                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
              </svg>
              <span class="">Pinjaman</span>
            </a>

            <!-- Data Pinjaman -->
            <a href="data-pinjaman.php" class="data-pinjaman-btn btn d-flex align-items-center ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text me-2 data-pinjaman-svg" viewBox="0 0 16 16">
                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
              </svg>
              <span class="">Data Pinjaman</span>
            </a>
          </div>

          <div class="auth w-100">
            <p class="fw-bold">AUTH</p>
            <!-- Logout -->
            <a href="" class="logout-btn btn d-flex align-items-center ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left me-2 logout-svg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
              </svg>
              <span class="">Logout</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Right Side -->
    <div class="right-side bg-body-tertiary container-fluid mx-0">
      <!-- Account Logo -->
      <div class="header-right d-flex justify-content-end mb-2">
        <a class="account btn mt-3" href="users/edit-form.php?<?php echo $user?>">
          <img src="img/icon/person-circle.svg" alt="">
        </a>
      </div>

        <!-- Statistik -->
      <div class="statistik d-flex gap-3 mb-5 mt-5">
        <!-- Total Siswa -->
        <div class="total-siswa w-25 bg-body shadow-sm ms-2">
          <div class="d-flex justify-content-between align-items-center pt-3 px-3">
            <p class="d-flex flex-column justify-content-center  fs-6"><span>Total</span> <span>Siswa</span></p>
            <div class="bg-success rounded-circle d-flex align-items-center justify-content-center" style="width: 7vh; height: 7vh;">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-person " viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
              </svg>
            </div>
          </div>
          <p class="ps-3">
            <?php 
              $sql1 = "SELECT COUNT(*) AS total FROM siswa";
              $result1 = mysqli_query($conn, $sql1);
              if ($result1) {
                $row = mysqli_fetch_assoc($result1);
                echo $row["total"];
              } else {
                echo "Error: " . mysqli_error($conn);
              }
            ?>
          </p>
        </div>
        
        <!-- Total Buku -->
        <div class="total-buku w-25 bg-body shadow-sm">
          <div class="d-flex justify-content-between align-items-center pt-3 px-3">
            <p class="d-flex flex-column justify-content-center  fs-6"><span>Total</span> <span>Buku</span></p>
            <div class="bg-success rounded-circle d-flex align-items-center justify-content-center" style="width: 7vh; height: 7vh;">
              <img src="img/icon/book.svg" alt="" width="25">
            </div>
          </div>
          <p class="ps-3"><?php 
              $sql2 = "SELECT COUNT(*) AS total FROM buku";
              $result2 = mysqli_query($conn, $sql2);
              if ($result2) {
                $row = mysqli_fetch_assoc($result2);
                echo $row["total"];
              } else {
                echo "Error: " . mysqli_error($conn);
              }
            ?></p>
        </div>

        <!-- Total Peminjaman -->
        <div class="total-peminjamnan w-25 bg-body shadow-sm">
          <div class="d-flex justify-content-between align-items-center pt-3 px-3">
            <p class="d-flex flex-column justify-content-center  fs-6"><span>Total</span> <span>Peminjaman</span></p>
            <div class="bg-success rounded-circle d-flex align-items-center justify-content-center" style="width: 7vh; height: 7vh;">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-journal-check" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
              </svg>
            </div>
          </div>
          <p class="ps-3"><?php 
              $sql3 = "SELECT COUNT(*) AS total FROM pinjaman";
              $result3 = mysqli_query($conn, $sql3);
              if ($result3) {
                $row = mysqli_fetch_assoc($result3);
                echo $row["total"];
              } else {
                echo "Error: " . mysqli_error($conn);
              }
            ?></p>
        </div>

        <!-- Total Terlambat -->
        <div class="total-terlambat w-25 bg-body shadow-sm">
          <div class="d-flex justify-content-between align-items-center pt-3 px-3">
            <p class="d-flex flex-column justify-content-center  fs-6"><span>Belum</span> <span>Dikembalikan</span></p>
            <div class="bg-success rounded-circle d-flex align-items-center justify-content-center" style="width: 7vh; height: 7vh;">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-journal-text" viewBox="0 0 16 16">
                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
              </svg>
            </div>
          </div>
          <p class="ps-3"><?php 
              $sql4 = "SELECT COUNT(*) AS total FROM pinjaman WHERE tanggal_pengembalian = '0000-00-00'";
              $result4 = mysqli_query($conn, $sql4);
              if ($result4) {
                $row = mysqli_fetch_assoc($result4);
                echo $row["total"];
              } else {
                echo "Error: " . mysqli_error($conn);
              }
            ?></p>
        </div>
      </div>

      <!-- Sample Data Siswa -->
      <div class="sample-data-siswa bg-body shadow-sm ms-2">
        <h3 class="fs-4 ps-3 pt-3">Data Siswa</h3>
        <div class="isi-data-siswa ms-2 overflow-auto" style="height: 42vh;">
          <table class="table">
            <tr class="sticky-top">
              <th class="col-1">No</th>
              <th class="col-4">Nama</th>
              <th class="col-2">NIS</th>
              <th class="col-2">Kelas</th>
              <th class="col-3">Jenis Kelamin</th>
            </tr>
            <?php 
              $i = 1; 
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) { ?>
                  <tr>
                    <td class="col-1"><?php echo $i ?></td>
                    <td class="col-4"><?php echo $row["nama"] ?></td>
                    <td class="col-2"><?php echo $row["nis"] ?></td>
                    <td class="col-2"><?php echo $row["kelas"] ?></td>
                    <td class="col-3">
                        <p class="px-2 py-1 mb-0 rounded-3 text-light text-center <?php echo ($row["gender"] == 1) ? 'bg-success' : 'bg-primary' ?>">
                            <?php echo ($row["gender"] == 1) ? 'LAKI - LAKI' : 'PEREMPUAN' ?>
                        </p>
                    </td>
                  </tr>
                  <?php $i++;
                 }
              } else {
                  echo "<tr><td colspan='5'>No records found</td></tr>";
              }
              ?>
          </table>              
        </div>
      </div>
    </div>
    <script src="js/dashboard.js"></script>
  </body>
</html>