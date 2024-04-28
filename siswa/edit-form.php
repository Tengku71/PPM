<?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
  }
  require_once '../koneksi.php'; 
  
  $ids = $_GET['id'];

  $idArray = explode(",", $ids);
  $idArray = array_map('intval', $idArray); 

  $placeholders = implode(',', array_fill(0, count($idArray), '?'));
  $sql = "SELECT * FROM siswa WHERE id IN ($placeholders)";
  $stmt = mysqli_prepare($conn, $sql);
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
      
      <h3 class="fs-3 ps-4 mt-3">Edit Siswa</h3>
      <div class="sample-data-siswa bg-body shadow-sm ms-4">
        <p class="fs-5 ps-5 pt-4">Form Edit Siswa</p>
        <form class="px-5 pb-3 overflow-auto siswa-form" method="POST" action="update.php" style="height: 57vh;">
        <div class="row mb-2">
            <div class="col-3">
              <label for="nama" class="form-label">Nama</label>              
            </div>
            <div class="col-1">
              <label for="nis" class="form-label">Nis</label>              
            </div>
            <div class="col">
              <label for="gender" class="form-label">Jenis Kelamin</label>
            </div>
            <div class="col">
              <label for="tingkat" class="form-label">Tingkat</label>
            </div>
            <div class="col">
              <label for="kelas" class="form-label">Kelas</label>
            </div>           
            <div class="col">              
              <label for="wali_kelas" class="form-label">Wali Kelas</label>
            </div>           
          </div>
        <?php
        if ($stmt) {
          // Bind the parameters
          mysqli_stmt_bind_param($stmt, str_repeat('i', count($idArray)), ...$idArray);
      
          // Execute the statement
          if (mysqli_stmt_execute($stmt)) {
            // Fetch the results
            $result = mysqli_stmt_get_result($stmt);
      
            // Loop through the results and display the form fields
            while ($row = mysqli_fetch_assoc($result)) {
      ?>
        
          <input type="hidden" name="id[]" value="<?php echo $row['id'] ?>">
          <div class="row mb-2">
            <div class="col-3">
              <input type="text" class="form-control" name="nama[]" id="nama" value="<?php echo $row["nama"]?>" required>
              <div id="popoverContentNama" class="popover-contentNama"></div>
            </div>
            <div class="col-1">
              <input type="text" class="form-control" name="nis[]" id="nis" value="<?php echo $row["nis"]?>" required>
            </div>
            <div class="col">
              <select name="gender[]" id="gender" class="form-select" aria-label="Default select example">
                <option value="0" <?php echo ($row["gender"] == 0) ? 'selected="selected"' : "" ?>>PEREMPUAN</option>
                <option value="1" <?php echo ($row["gender"] == 1) ? 'selected="selected"' : "" ?>>LAKI - LAKI</option>
              </select>
            </div>
            <div class="col">
              <select name="tingkat[]" class="form-select tingkat" aria-label="Default select example">
                <option value="SMK" <?php echo ($row["tingkat"] == "SMK") ? 'selected="selected"' : "" ?>>SMK</option>
                <option value="SMP"<?php echo ($row["tingkat"] == "SMP") ? 'selected="selected"' : "" ?>>SMP</option>
              </select>
            </div>
            <div class="col">
              <select name="kelas[]" class="form-select kelas" aria-label="Default select example">
                <option value="<?php echo $row["kelas"]?>" selected><?php echo $row["kelas"]?></option>
              </select>
            </div>           
            <div class="col">
                <input type="text" class="form-control" name="wali_kelas[]" id="wali_kelas" value="<?php echo $row["wali_kelas"]?>" required>
            </div>
          </div>

          
          <?php
            } } else {
                  echo "Error executing statement: " . mysqli_stmt_error($stmt);
                }
            
                // Close the statement
                mysqli_stmt_close($stmt);
              } else {
                echo "Error preparing statement: " . mysqli_error($conn);
              } mysqli_close($conn);
              
          ?>
          <a class="btn color-green text-light px-4 my-5 me-4" href="../data-siswa.php">Kembali</a>
          <button type="submit" class="btn color-green text-light px-4 mb-3 my-3">Edit</button>
        </form>
      </div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const namaSiswa = document.querySelector("#nama");

        namaSiswa.addEventListener("input", function () {
          const searchValue = this.value.trim(); // Trim whitespace
          if (searchValue !== "") {
            // Send AJAX request to search for names
            fetch(`search.php?cari=${searchValue}`)
              .then((response) => {
                if (!response.ok) {
                  throw new Error("Error searching for names");
                }
                return response.json();
              })
              .then((data) => {
                // Display search results as popover under input field
                showSearchResultsNama(data);
              })
              .catch((error) => {
                console.error(error);
              });
          } else {
            // Hide popover if search input is empty
            hideSearchResultsNama();
          }
        });

        // Additional event listener to hide popover when input is cleared
        namaSiswa.addEventListener("change", function () {
          if (this.value.trim() === "") {
            hideSearchResultsNama();
          }
        });
      });

      let ValueFieldSiswa = document.querySelector("#nama");
      let popoverContentNama = document.getElementById("popoverContentNama");
      // let popoverInstance = null;

      function showSearchResultsNama(results) {
          // If popover content element doesn't exist, recreate it
          if (!popoverContentNama) {
              popoverContentNama = document.createElement("div");
              popoverContentNama.id = "popoverContentNama";
              popoverContentNama.classList.add("popover-contentNama");
              document.body.appendChild(popoverContentNama); // Append to body or appropriate parent element
          }
          
          // Clear previous results
          popoverContentNama.innerHTML = "";
          
          // Create a table to display results
          const table = document.createElement("table");
          table.classList.add("table", "table-bordered", "table-hover"); // Add Bootstrap table classes
          
          // Create table body
          const tbody = document.createElement("tbody");
          
          // Add each result to the table body
          results.forEach(result => {
              const row = document.createElement("tr");
          row.addEventListener("click", function () {
              fillInputFieldNama(result.nama); // Fill input field with selected value
              hideSearchResultsNama(); // Hide popover after selection
          });
          
          const cell = document.createElement("td");
          cell.textContent = result.nama; // Assuming "nama" is the property containing the name
          
          row.appendChild(cell);
          tbody.appendChild(row);
      });

      // Append table body to table
      table.appendChild(tbody);

      // Append table to popover content
      popoverContentNama.appendChild(table);

      // Show the popover content
      popoverContentNama.style.display = "block";

      // Create or update the popover instance (if needed)
      if (!popoverInstance) {
          popoverInstance = new bootstrap.Popover(document.querySelector("#nama"), {
              content: popoverContentNama,
              placement: "bottom",
              trigger: "manual",
              html: true
          });
      }

      // Show the popover
      popoverInstance.show();

      inputField.addEventListener("blur", hidePopover);
      }

      function hideSearchResultsNama() {
          // Hide the popover content
          popoverContentNama.style.display = "none";
          
          // Dispose of popover instance if it exists
          if (popoverInstance !== null) {
              popoverInstance.dispose();
              popoverInstance = null;
          }
      }

      function fillInputFieldNama(name) {
      const namaNama = document.querySelector("#nama");
      namaNama.value = name;
      hideSearchResultsNama();
}
    </script>
    <script src="../js/data-siswa.js"></script>
  </body>
</html>