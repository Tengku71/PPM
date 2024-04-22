// Btn Dashboard
const dashboardBtn = document.querySelector(".dashboard-btn");
const dashboardSvg = document.querySelector(".dashboard-svg");

// Btn Data Siswa
const data_siswaSvg = document.querySelector(".data-siswa-svg");
const data_siswaBtn = document.querySelector(".data-siswa-btn");

// Btn Data Buku
const data_bukuSvg = document.querySelector(".data-buku-svg");
const data_bukuBtn = document.querySelector(".data-buku-btn");

// Btn Pinjaman
const pinjamanSvg = document.querySelector(".pinjaman-svg");
const pinjamanBtn = document.querySelector(".pinjaman-btn");

// Btn Data Pinjaman
const data_pinjamanSvg = document.querySelector(".data-pinjaman-svg");
const data_pinjamanBtn = document.querySelector(".data-pinjaman-btn");

// Btn Logout
const logoutSvg = document.querySelector(".logout-svg");
const logoutBtn = document.querySelector(".logout-btn");

// Hover Dashboard
dashboardBtn.addEventListener("mouseenter", function () {
  dashboardBtn.classList.add("btn-success");
  dashboardSvg.style.fill = "white";
  pinjamanBtn.classList.remove("btn-success");
  pinjamanSvg.style.fill = "black";
});
dashboardBtn.addEventListener("mouseleave", function () {
  dashboardBtn.classList.remove("btn-success");
  dashboardSvg.style.fill = "black";
  pinjamanBtn.classList.add("btn-success");
  pinjamanSvg.style.fill = "white";
});

// Hover Data Siswa
data_siswaBtn.addEventListener("mouseenter", function () {
  data_siswaBtn.classList.add("btn-success");
  data_siswaSvg.style.fill = "white";
  pinjamanBtn.classList.remove("btn-success");
  pinjamanSvg.style.fill = "black";
});
data_siswaBtn.addEventListener("mouseleave", function () {
  data_siswaBtn.classList.remove("btn-success");
  data_siswaSvg.style.fill = "black";
  pinjamanBtn.classList.add("btn-success");
  pinjamanSvg.style.fill = "white";
});

// Hover Data Buku
data_bukuBtn.addEventListener("mouseenter", function () {
  data_bukuBtn.classList.add("btn-success");
  data_bukuSvg.style.fill = "white";
  pinjamanBtn.classList.remove("btn-success");
  pinjamanSvg.style.fill = "black";
});
data_bukuBtn.addEventListener("mouseleave", function () {
  data_bukuBtn.classList.remove("btn-success");
  data_bukuSvg.style.fill = "black";
  pinjamanBtn.classList.add("btn-success");
  pinjamanSvg.style.fill = "white";
});

// Hover Data Pinjaman
data_pinjamanBtn.addEventListener("mouseenter", function () {
  data_pinjamanBtn.classList.add("btn-success");
  data_pinjamanSvg.style.fill = "white";
  pinjamanBtn.classList.remove("btn-success");
  pinjamanSvg.style.fill = "black";
});
data_pinjamanBtn.addEventListener("mouseleave", function () {
  data_pinjamanBtn.classList.remove("btn-success");
  data_pinjamanSvg.style.fill = "black";
  pinjamanBtn.classList.add("btn-success");
  pinjamanSvg.style.fill = "white";
});

// Hover Logout
logoutBtn.addEventListener("mouseenter", function () {
  logoutBtn.classList.add("btn-success");
  logoutSvg.style.fill = "white";
  pinjamanBtn.classList.remove("btn-success");
  pinjamanSvg.style.fill = "black";
});
logoutBtn.addEventListener("mouseleave", function () {
  logoutBtn.classList.remove("btn-success");
  logoutSvg.style.fill = "black";
  pinjamanBtn.classList.add("btn-success");
  pinjamanSvg.style.fill = "white";
});

function validateForm() {
  let isValid = true;

  // Function to display error message under a field
  function displayError(fieldId, errorMessage) {
    document.getElementById(fieldId + "-error").innerText = errorMessage;
    isValid = false; // Set flag to false when there's an error
  }

  // Function to clear error message under a field
  function clearError(fieldId) {
    document.getElementById(fieldId + "-error").innerText = "";
  }

  // Check each field for validity
  let nama_peminjam = document.getElementById("nama-peminjam").value;
  if (nama_peminjam == "") {
    displayError("nama-peminjam", "Nama Peminjam Tidak Boleh Kosong!");
  } else {
    clearError("nama-peminjam");
  }

  let nama_buku = document.getElementById("nama-buku").value;
  if (nama_buku == "") {
    displayError("nama-buku", "Nama Buku Tidak Boleh Kosong!");
  } else {
    clearError("nama-buku");
  }

  let tanggal_peminjaman = document.getElementById("tanggal-peminjaman").value;
  if (tanggal_peminjaman == "") {
    displayError("tanggal-peminjaman", "Tanggal Peminjaman Tidak Boleh Kosong!");
  } else {
    clearError("tanggal-peminjaman");
  }

  //   let tanggal_pengembalian = document.getElementById("tanggal-pengembalian").value;
  //   if (tanggal_pengembalian == "") {
  //     displayError("tanggal-pengembalian", "Tanggal Pengembalian Tidak Boleh Kosong!");
  //   } else {
  //     clearError("tanggal-pengembalian");
  //   }

  return isValid;
}

// siswa
document.addEventListener("DOMContentLoaded", function () {
  const namaPeminjamInput = document.querySelector("#nama-peminjam");

  namaPeminjamInput.addEventListener("input", function () {
    const searchValue = this.value.trim(); // Trim whitespace
    if (searchValue !== "") {
      // Send AJAX request to search for names
      fetch(`pinjaman/siswa.php?nama=${searchValue}`)
        .then((response) => {
          if (!response.ok) {
            throw new Error("Error searching for names");
          }
          return response.json();
        })
        .then((data) => {
          // Display search results as popover under input field
          showSearchResultsSiswa(data);
        })
        .catch((error) => {
          console.error(error);
        });
    } else {
      // Hide popover if search input is empty
      hideSearchResultsSiswa();
    }
  });

  // Additional event listener to hide popover when input is cleared
  namaPeminjamInput.addEventListener("change", function () {
    if (this.value.trim() === "") {
      hideSearchResultsSiswa();
    }
  });
});
// buku
let ValueFieldSiswa = document.querySelector("#idSiswa");
let ValueFieldBuku = document.querySelector("#idBuku");
let popoverContentSiswa = document.getElementById("popoverContentSiswa");
// let popoverInstance = null;

function showSearchResultsSiswa(results) {
    // If popover content element doesn't exist, recreate it
    if (!popoverContentSiswa) {
        popoverContentSiswa = document.createElement("div");
        popoverContentSiswa.id = "popoverContentSiswa";
        popoverContentSiswa.classList.add("popover-contentSiswa");
        document.body.appendChild(popoverContentSiswa); // Append to body or appropriate parent element
    }
    
    // Clear previous results
    popoverContentSiswa.innerHTML = "";
    
    // Create a table to display results
    const table = document.createElement("table");
    table.classList.add("table", "table-bordered", "table-hover"); // Add Bootstrap table classes
    
    // Create table body
    const tbody = document.createElement("tbody");
    
    // Add each result to the table body
    results.forEach(result => {
        const row = document.createElement("tr");
    row.addEventListener("click", function () {
        fillInputFieldSiswa(result.nama, result.id); // Fill input field with selected value
        hideSearchResultsSiswa(); // Hide popover after selection
    });
    
    const cell = document.createElement("td");
    cell.textContent = result.nama; // Assuming "nama" is the property containing the name
    
    row.appendChild(cell);
    tbody.appendChild(row);
});

// Append table body to table
table.appendChild(tbody);

// Append table to popover content
popoverContentSiswa.appendChild(table);

// Show the popover content
popoverContentSiswa.style.display = "block";

// Create or update the popover instance (if needed)
if (!popoverInstance) {
    popoverInstance = new bootstrap.Popover(document.querySelector("#nama-peminjam"), {
        content: popoverContentSiswa,
        placement: "bottom",
        trigger: "manual",
        html: true
    });
}

// Show the popover
popoverInstance.show();

inputField.addEventListener("blur", hidePopover);
}

function hideSearchResultsSiswa() {
    // Hide the popover content
    popoverContentSiswa.style.display = "none";
    
    // Dispose of popover instance if it exists
    if (popoverInstance !== null) {
        popoverInstance.dispose();
        popoverInstance = null;
    }
}

function fillInputFieldSiswa(name, id) {
    const namaPeminjamInput = document.querySelector("#nama-peminjam");
    namaPeminjamInput.value = name;
    ValueFieldSiswa.value = id; // Set ID to the hidden input field
}

// buku
document.addEventListener("DOMContentLoaded", function () {
  const namaBukuInput = document.querySelector("#nama-buku");

  namaBukuInput.addEventListener("input", function () {
    const searchValue = this.value.trim(); // Trim whitespace
    if (searchValue !== "") {
      // Send AJAX request to search for names
      fetch(`pinjaman/buku.php?judul=${searchValue}`)
        .then((response) => {
          if (!response.ok) {
            throw new Error("Error searching for names");
          }
          return response.json();
        })
        .then((data) => {
          // Display search results as popover under input field
          showSearchResultsBuku(data);
        })
        .catch((error) => {
          console.error(error);
        });
    } else {
      // Hide popover if search input is empty
      hideSearchResultsBuku();
    }
  });

  // Additional event listener to hide popover when input is cleared
  namaBukuInput.addEventListener("change", function () {
    if (this.value.trim() === "") {
      hideSearchResultsBuku();
    }
  });
});

function showSearchResultsBuku(results) {
    // If popover content element doesn't exist, recreate it
    if (!popoverContentBuku) {
        popoverContentBuku = document.createElement("div");
        popoverContentBuku.id = "popoverContentBuku";
        popoverContentBuku.classList.add("popover-contentBuku");
        document.body.appendChild(popoverContentBuku); // Append to body or appropriate parent element
    }
    
    // Clear previous results
    popoverContentBuku.innerHTML = "";
    
    // Create a table to display results
    const table = document.createElement("table");
    table.classList.add("table", "table-bordered", "table-hover"); // Add Bootstrap table classes
    
    // Create table body
    const tbody = document.createElement("tbody");
    
    // Add each result to the table body
    results.forEach(result => {
        const row = document.createElement("tr");
    row.addEventListener("click", function () {
        fillInputFieldBuku(result.judul, result.id); // Fill input field with selected value
        hideSearchResultsBuku(); // Hide popover after selection
    });
    
    const cell = document.createElement("td");
    cell.textContent = result.judul; // Assuming "nama" is the property containing the name
    
    row.appendChild(cell);
    tbody.appendChild(row);
});

// Append table body to table
table.appendChild(tbody);

// Append table to popover content
popoverContentBuku.appendChild(table);

// Show the popover content
popoverContentBuku.style.display = "block";

// Create or update the popover instance (if needed)
if (!popoverInstance) {
    popoverInstance = new bootstrap.Popover(document.querySelector("#nama-buku"), {
        content: popoverContentBuku,
        placement: "bottom",
        trigger: "manual",
        html: true
    });
}

// Show the popover
popoverInstance.show();

inputField.addEventListener("blur", hidePopover);
}

function hideSearchResultsBuku() {
    // Hide the popover content
    popoverContentBuku.style.display = "none";
    
    // Dispose of popover instance if it exists
    if (popoverInstance !== null) {
        popoverInstance.dispose();
        popoverInstance = null;
    }
}

function fillInputFieldBuku(judul, id) {
    const namaBukuInput = document.querySelector("#nama-buku");
    namaBukuInput.value = judul;
    ValueFieldBuku.value = id; // Set ID to the hidden input field
}





