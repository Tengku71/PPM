<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="shortcut icon" type="image/png" href="../img/logo.jpeg" />
    <link href="../bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap5/css/style.css" rel="stylesheet">
    <script src="../bootstrap5/js/bootstrap.bundle.min.js"></script>
  </head>
  <body style="height: 100vh;">
    <div class="main h-100 w-100 d-flex g-0">
      <!-- Side Navbar -->
      <div class="d-flex ms-3 pe-3 flex-column border-end border-dark-subtle border-1 justify-content-start h-100 w-25">
        <div class="logo d-flex column-gap-3 align-items-center mt-3 mb-5 ">
          <img src="../img/logo.jpeg" alt="logo" width="65">
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
              <a href="../dashboard.php" class="btn dashboard-btn d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-grid me-2 dashboard-svg" viewBox="0 0 16 16">
                  <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
                </svg>
                <span class="">Dashboard</span>
              </a>
            </div>
          </div>

          <div class="master-data w-100">
            <p class="fw-bold">MASTER DATA</p>
            <!-- Data Siswa -->
            <a href="../data-siswa.php" class="data-siswa-btn btn color-green text-light d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-person me-2 data-siswa-svg" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
              </svg>
              <span class="">Data Siswa</span>
            </a>

            <!-- Data Buku -->
            <a href="../data-buku.php" class="data-buku-btn btn d-flex align-items-center ">
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
            <a href="../pinjaman.php" class="pinjaman-btn btn d-flex align-items-center ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text me-2 pinjaman-svg" viewBox="0 0 16 16">
                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
              </svg>
              <span class="">Pinjaman</span>
            </a>

            <!-- Data Pinjaman -->
            <a href="../data-pinjaman.php" class="data-pinjaman-btn btn d-flex align-items-center ">
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
            <a href="../logout.php" class="logout-btn btn d-flex align-items-center ">
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
        <a class="account btn mt-3" href="../users/edit-form.php">
          <img src="../img/icon/person-circle.svg" alt="">
        </a>
      </div>

      <h3 class="fs-3 ps-4 mt-3">Tambah Siswa</h3>
      <div class="sample-data-siswa bg-body shadow-sm ms-4">
        <div class="pt-4 pb-3">
          <p class="fs-5 px-5 pt-4 pb-3 d-inline">Form Tambah Siswa</p>
          <select class="form-select-siswa w-0 d-inline pb-2 ms-1" id="select-siswa" aria-label="Default select example">
            <option value="1" selected>1 Siswa</option>
            <option value="5">5 Siswa</option>
            <option value="10">10 Siswa</option>
            <option value="20">20 Siswa</option>
          </select>
        </div>
        <form class="px-5 pb-3 siswa1 siswa-form" id="siswa1" method="POST" action="tambah.php" onsubmit="return validateForm()">
          <div class="row mb-4">
            <div class="col">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <label for="nis" class="form-label">Nis</label>
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col-3">
              <label for="gender" class="form-label">Jenis Kelamin</label>
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
          </div>  
            <div class="row mb-4">
              <div class="col-2">
                <label for="tingkat" class="form-label">Tingkat</label>
                <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                  <option selected>SMK</option>
                  <option value="SMP">SMP</option>
                </select>
              </div>
              <div class="col-2" id="kelasDiv">
                <label for="kelas" class="form-label">Kelas</label>
                <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                 
                </select>
            </div>
              <div class="col">
                <label for="wali_kelas" class="form-label">Wali Kelas</label>
                <input type="text" class="form-control" name="wali_kelas" id="wali_kelas" required>
              </div>
          </div>
          <a class="btn color-green text-light px-4 my-5 me-4" href="../data-siswa.php">Kembali</a>
          <button type="submit" class="btn color-green text-light px-4 mb-3 my-3">Tambah</button>
        </form>
        <form class="px-5 pb-3 siswa5 siswa-form overflow-auto" id="siswa5" method="POST" action="tambah.php" style="display: none; height: 57vh;"  onsubmit="return validateForm()">
          <div class="row mb-2">
            <div class="col-4">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <label for="nis" class="form-label">Nis</label>
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <label for="gender" class="form-label">Jenis Kelamin</label>
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <label for="tingkat" class="form-label">Tingkat</label>
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <label for="kelas" class="form-label">Kelas</label>
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
              
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col-2">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col-2">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col-2" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
              
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col-2">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col-2">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col-2" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col-2">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col-2">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col-2" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col-2">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col-2">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col-2" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="col">
            <label for="wali_kelas" class="form-label">Wali Kelas</label>
            <input type="text" class="form-control" name="wali_kelas" id="wali_kelas" required>
          </div>
          <a class="btn color-green text-light px-4 my-5 me-4" href="../data-siswa.php">Kembali</a>
          <button type="submit" class="btn color-green text-light px-4 mb-3 my-3">Tambah</button>
        </form>
        <form class="px-5 pb-3 siswa10 siswa-form overflow-auto" id="siswa10" method="POST" action="tambah.php" style="display: none; height: 57vh;"  onsubmit="return validateForm()">
          <div class="row mb-2">
            <div class="col-4">
              <label for="n-4ama" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <label for="nis" class="form-label">Nis</label>
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col-2">
              <label for="gender" class="form-label">Jenis Kelamin</label>
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col-2">
              <label for="tingkat" class="form-label">Tingkat</label>
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col-2" id="kelasDiv">
              <label for="kelas" class="form-label">Kelas</label>
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
              
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
              
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
              
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
              
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="col">
            <label for="wali_kelas" class="form-label">Wali Kelas</label>
            <input type="text" class="form-control" name="wali_kelas" id="wali_kelas" required>
          </div>
          <a class="btn color-green text-light px-4 my-5 me-4" href="../data-siswa.php">Kembali</a>
          <button type="submit" class="btn color-green text-light px-4 mb-3 my-3">Tambah</button>
        </form>
        <form class="px-5 pb-3 siswa20 siswa-form overflow-auto" id="siswa20" method="POST" action="tambah.php" style="display: none; height: 57vh;"  onsubmit="return validateForm()">
          <div class="row mb-2">
            <div class="col-4">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <label for="nis" class="form-label">Nis</label>
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col-2">
              <label for="gender" class="form-label">Jenis Kelamin</label>
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col-2">
              <label for="tingkat" class="form-label">Tingkat</label>
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col-2" id="kelasDiv">
              <label for="kelas" class="form-label">Kelas</label>
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
              
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
              
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
              
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
              
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
              
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
              
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
              
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
              
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-4">
              <input type="text" class="form-control" name="nama[]" id="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="nis[]" id="nis" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0">PEREMPUAN</option>
                <option value="1">LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" id="tingkat" class="form-select tingkat" aria-label="Default select example">
                <option selected>SMK</option>
                <option value="SMP">SMP</option>
              </select>
            </div>
            <div class="col" id="kelasDiv">
              <select name="kelas[]" id="kelas" class="form-select kelas" aria-label="Default select example">
                
              </select>
            </div>
          </div>
          <div class="col">
            <label for="wali_kelas" class="form-label">Wali Kelas</label>
            <input type="text" class="form-control" name="wali_kelas" id="wali_kelas" required>
          </div>
          <a class="btn color-green text-light px-4 my-5 me-4" href="../data-siswa.php">Kembali</a>
          <button type="submit" class="btn color-green text-light px-4 mb-3 my-3">Tambah</button>
        </form>
      </div>
    </div>
    <script src="../js/data-siswa.js"></script>
  </body>
</html>