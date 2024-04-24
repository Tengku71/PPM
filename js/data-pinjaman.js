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
  dashboardBtn.classList.add("color-green");
  dashboardBtn.classList.add("text-light");
  dashboardSvg.style.fill = "white";
  data_pinjamanBtn.classList.remove("color-green");
  data_pinjamanBtn.classList.add("text-dark");
  data_pinjamanSvg.style.fill = "black";
});
dashboardBtn.addEventListener("mouseleave", function () {
  dashboardBtn.classList.remove("color-green");
  dashboardBtn.classList.remove("text-light");
  dashboardSvg.style.fill = "black";
  data_pinjamanBtn.classList.add("color-green");
  data_pinjamanBtn.classList.remove("text-dark");
  data_pinjamanSvg.style.fill = "white";
});

// Hover Data Siswa
data_siswaBtn.addEventListener("mouseenter", function () {
  data_siswaBtn.classList.add("color-green");
  data_siswaBtn.classList.add("text-light");
  data_siswaSvg.style.fill = "white";
  data_pinjamanBtn.classList.remove("color-green");
  data_pinjamanBtn.classList.add("text-dark");
  data_pinjamanSvg.style.fill = "black";
});
data_siswaBtn.addEventListener("mouseleave", function () {
  data_siswaBtn.classList.remove("color-green");
  data_siswaBtn.classList.remove("text-light");
  data_siswaSvg.style.fill = "black";
  data_pinjamanBtn.classList.add("color-green");
  data_pinjamanBtn.classList.remove("text-dark");
  data_pinjamanSvg.style.fill = "white";
});

// Hover Data Buku
data_bukuBtn.addEventListener("mouseenter", function () {
  data_bukuBtn.classList.add("color-green");
  data_bukuBtn.classList.add("text-light");
  data_bukuSvg.style.fill = "white";
  data_pinjamanBtn.classList.remove("color-green");
  data_pinjamanBtn.classList.add("text-dark");
  data_pinjamanSvg.style.fill = "black";
});
data_bukuBtn.addEventListener("mouseleave", function () {
  data_bukuBtn.classList.remove("color-green");
  data_bukuBtn.classList.remove("text-light");
  data_bukuSvg.style.fill = "black";
  data_pinjamanBtn.classList.add("color-green");
  data_pinjamanBtn.classList.remove("text-dark");
  data_pinjamanSvg.style.fill = "white";
});

// Hover Pinjaman
pinjamanBtn.addEventListener("mouseenter", function () {
  pinjamanBtn.classList.add("color-green");
  pinjamanBtn.classList.add("text-light");
  pinjamanSvg.style.fill = "white";
  data_pinjamanBtn.classList.remove("color-green");
  data_pinjamanBtn.classList.add("text-dark");
  data_pinjamanSvg.style.fill = "black";
});
pinjamanBtn.addEventListener("mouseleave", function () {
  pinjamanBtn.classList.remove("color-green");
  pinjamanBtn.classList.remove("text-light");
  pinjamanSvg.style.fill = "black";
  data_pinjamanBtn.classList.add("color-green");
  data_pinjamanBtn.classList.remove("text-dark");
  data_pinjamanSvg.style.fill = "white";
});

// Hover Logout
logoutBtn.addEventListener("mouseenter", function () {
  logoutBtn.classList.add("color-green");
  logoutBtn.classList.add("text-light");
  logoutSvg.style.fill = "white";
  data_pinjamanBtn.classList.remove("color-green");
  data_pinjamanBtn.classList.add("text-dark");
  data_pinjamanSvg.style.fill = "black";
});
logoutBtn.addEventListener("mouseleave", function () {
  logoutBtn.classList.remove("color-green");
  logoutBtn.classList.remove("text-light");
  logoutSvg.style.fill = "black";
  data_pinjamanBtn.classList.add("color-green");
  data_pinjamanBtn.classList.remove("text-dark");
  data_pinjamanSvg.style.fill = "white";
});

document.addEventListener("DOMContentLoaded", async function () {
  const searchResults = document.querySelector("#searchResults"); // Changed the selector to tbody

  try {
    // Fetch all data from the database when the page is loaded
    const response = await fetch(`pinjaman/pinjaman.php`);
    if (!response.ok) {
      throw new Error("Error fetching data");
    }
    const allData = await response.json();

    // Display all data in the table body
    if (allData.length === 0) {
      // If no data found, display a message
      searchResults.innerHTML = "<tr><td colspan='6'>Data Peminjam Tidak Ditemukan</td></tr>";
    } else {
      let i = 1;
      allData.forEach(function (row) {
        const status = row.tanggal_pengembalian === "0000-00-00" ? "Belum Dikembalikan" : "Dikembalikan";

        const newRow = document.createElement("tr");
        newRow.innerHTML = `
                    <td class="col-1">${i}</td>
                    <td class="col-3">${row.nama}</td>
                    <td class="col-2">${row.judul}</td>
                    <td class="col-2">${row.tanggal_peminjaman}</td>
                    <td class="col-2">${status}</td>
                    <td class="col-2">
                        <a href="pinjaman/edit-form.php?id=${row.id}" class="col btn color-blue"><img src="img/icon/pencil.svg" alt=""></a>
                        <button class="col btn color-red delete-btn" data-bs-toggle="modal" data-bs-target="#hapus_konfirmasi" data-id="${row.id}"><img src="img/icon/trash.svg" alt=""></button>
                        <a href="pinjaman/tampil.php?id=${row.id}" class="col btn color-blue-second"><img src="img/icon/eye.svg" alt=""></a>
                    </td>
                `;        
        searchResults.appendChild(newRow);
        i++;
      });
    }
  } catch (error) {
    console.error(error);
    // Handle error
    searchResults.innerHTML = "<tr><td colspan='6'>Error fetching data</td></tr>";
  }

  searchResults.addEventListener("click", function(event) {
    if (event.target.classList.contains("delete-btn")) {
      const id = event.target.getAttribute("data-id");
      const deleteLink = document.querySelector("#hapus_konfirmasi a.color-red");
      deleteLink.href = `pinjaman/delete.php?id=${id}`;
    }
  });
  // Add event listener for input
  const searchForm = document.querySelector("#search-form");
  searchForm.addEventListener("input", handleInput);
});

async function handleInput(event) {
  event.preventDefault();
  const searchForm = event.target.closest("form");
  const formData = new FormData(searchForm);
  const searchQuery = formData.get("search").trim(); // Trim whitespace from the search query
  const searchResults = document.querySelector("#searchResults");

  try {
    let response;
    let searchData;

    if (searchQuery === "") {
      // If no search query, fetch all data from the database
      const allDataResponse = await fetch(`pinjaman/pinjaman.php`);
      if (!allDataResponse.ok) {
        throw new Error("Error fetching all data");
      }
      searchData = await allDataResponse.json();
    } else {
      // If there's a search query, fetch data based on the query
      response = await fetch(`pinjaman/search.php?cari=${searchQuery}`);
      if (!response.ok) {
        throw new Error("Error fetching search results");
      }
      searchData = await response.json();
    }
    // Clear existing table rows
    searchResults.innerHTML = "";

    if (searchData.length === 0) {
      // If no results found, display a message
      searchResults.innerHTML = "<tr><td colspan='6'>Data Peminjam Tidak Ditemukan</td></tr>";
    } else {
      // Append search results to the table body
      let i = 1;
      searchData.forEach(function (row) {
        const status = row.tanggal_pengembalian === "0000-00-00" ? "Belum Dikembalikan" : "Dikembalikan";

        const newRow = document.createElement("tr");
        newRow.innerHTML = `
                    <td class="col-1">${i}</td>
                    <td class="col-3">${row.nama}</td>
                    <td class="col-2">${row.judul}</td>
                    <td class="col-2">${row.tanggal_peminjaman}</td>
                    <td class="col-2">${status}</td>
                    <td class="col-2">
                        <a href="pinjaman/edit-form.php?id=${row.id}" class="col btn color-blue"><img src="img/icon/pencil.svg" alt=""></a>
                        <button class="col btn color-red delete-btn" data-bs-toggle="modal" data-bs-target="#hapus_konfirmasi" data-id="${row.id}"><img src="img/icon/trash.svg" alt=""></button>
                        <a href="pinjaman/tampil.php?id=${row.id}" class="col btn color-blue-second"><img src="img/icon/eye.svg" alt=""></a>
                    </td>
                `;
        searchResults.appendChild(newRow);
        i++;
      });
    }
  } catch (error) {
    console.error(error);
    // Handle error
    searchResults.innerHTML = "<tr><td colspan='6'>Error fetching search results</td></tr>";
  }

  searchResults.addEventListener("click", function(event) {
    if (event.target.classList.contains("delete-btn")) {
      const id = event.target.getAttribute("data-id");
      const deleteLink = document.querySelector("#hapus_konfirmasi a.color-red");
      deleteLink.href = `pinjaman/delete.php?id=${id}`;
    }
  });
}

document.addEventListener("DOMContentLoaded", async function () {
  const searchForm = document.querySelector("#search-form");
  const searchResults = document.querySelector("#searchResults"); // Changed the selector to tbody

  // Function to handle search
  async function handleSearch(event) {
    event.preventDefault();
    const formData = new FormData(searchForm);
    const searchQuery = formData.get("search").trim(); // Trim whitespace from the search query

    try {
      let response;
      let searchData;

      if (searchQuery === "") {
        // If no search query, fetch all data from the database
        const allDataResponse = await fetch(`pinjaman/pinjaman.php`);
        if (!allDataResponse.ok) {
          throw new Error("Error fetching all data");
        }
        searchData = await allDataResponse.json();
      } else {
        // If there's a search query, fetch data based on the query
        response = await fetch(`pinjaman/search.php?cari=${searchQuery}`);
        if (!response.ok) {
          throw new Error("Error fetching search results");
        }
        searchData = await response.json();
      }

      // Clear existing table rows
      searchResults.innerHTML = "";

      if (searchData.length === 0) {
        // If no results found, display a message
        searchResults.innerHTML = "<tr><td colspan='6'>Data Peminjam Tidak Ditemukan</td></tr>";
      } else {
        // Append search results to the table body
        let i = 1;
        searchData.forEach(function (row) {
          const status = row.tanggal_pengembalian === "0000-00-00" ? "Belum Dikembalikan" : "Dikembalikan";

          const newRow = document.createElement("tr");
          newRow.innerHTML = `
                    <td class="col-1">${i}</td>
                    <td class="col-3">${row.nama}</td>
                    <td class="col-2">${row.judul}</td>
                    <td class="col-2">${row.tanggal_peminjaman}</td>
                    <td class="col-2">${status}</td>
                    <td class="col-2">
                        <a href="pinjaman/edit-form.php?id=${row.id}" class="col btn color-blue"><img src="img/icon/pencil.svg" alt=""></a>
                        <button class="col btn color-red delete-btn" data-bs-toggle="modal" data-bs-target="#hapus_konfirmasi" data-id="${row.id}"><img src="img/icon/trash.svg" alt=""></button>
                        <a href="pinjaman/tampil.php?id=${row.id}" class="col btn color-blue-second"><img src="img/icon/eye.svg" alt=""></a>
                    </td>
                `;
          searchResults.appendChild(newRow);
          i++;
        });
      }
    } catch (error) {
      console.error(error);
      // Handle error
      searchResults.innerHTML = "<tr><td colspan='6'>Error fetching data</td></tr>";
    }
    searchResults.addEventListener("click", function(event) {
      if (event.target.classList.contains("delete-btn")) {
        const id = event.target.getAttribute("data-id");
        const deleteLink = document.querySelector("#hapus_konfirmasi a.color-red");
        deleteLink.href = `pinjaman/delete.php?id=${id}`;
      }
    });


  }

  // Add event listener for form submission
  searchForm.addEventListener("submit", handleSearch);

  // Add event listener for search button click
  const searchBtn = document.querySelector(".search-btn");
  searchBtn.addEventListener("click", handleSearch);

});


document.addEventListener("DOMContentLoaded", function () {
  const namaPeminjamInput = document.querySelector("#nama-peminjam");
  
  const searchValue = this.value.trim(); // Trim whitespace
  if (searchValue !== "") {
    // Send AJAX request to search for names
    fetch(`siswa.php?nama=${searchValue}`)
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

  namaPeminjamInput.addEventListener("input", function () {
    const searchValue = this.value.trim(); // Trim whitespace
    if (searchValue !== "") {
      // Send AJAX request to search for names
      fetch(`siswa.php?nama=${searchValue}`)
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
      fetch(`buku.php?judul=${searchValue}`)
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