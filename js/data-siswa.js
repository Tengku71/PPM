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
  data_siswaBtn.classList.remove("color-green");
  data_siswaBtn.classList.add("text-dark");
  data_siswaSvg.style.fill = "black";
});
dashboardBtn.addEventListener("mouseleave", function () {
  dashboardBtn.classList.remove("color-green");
  dashboardBtn.classList.remove("text-light");
  dashboardSvg.style.fill = "black";
  data_siswaBtn.classList.add("color-green");
  data_siswaBtn.classList.remove("text-dark");
  data_siswaSvg.style.fill = "white";
});

// Hover Data Buku
data_bukuBtn.addEventListener("mouseenter", function () {
  data_bukuBtn.classList.add("color-green");
  data_bukuBtn.classList.add("text-light");
  data_bukuSvg.style.fill = "white";
  data_siswaBtn.classList.remove("color-green");
  data_siswaBtn.classList.add("text-dark");
  data_siswaSvg.style.fill = "black";
});
data_bukuBtn.addEventListener("mouseleave", function () {
  data_bukuBtn.classList.remove("color-green");
  data_bukuBtn.classList.remove("text-light");
  data_bukuSvg.style.fill = "black";
  data_siswaBtn.classList.add("color-green");
  data_siswaBtn.classList.remove("text-dark");
  data_siswaSvg.style.fill = "white";
});

// Hover Pinjaman
pinjamanBtn.addEventListener("mouseenter", function () {
  pinjamanBtn.classList.add("color-green");
  pinjamanBtn.classList.add("text-light");
  pinjamanSvg.style.fill = "white";
  data_siswaBtn.classList.remove("color-green");
  data_siswaBtn.classList.add("text-dark");
  data_siswaSvg.style.fill = "black";
});
pinjamanBtn.addEventListener("mouseleave", function () {
  pinjamanBtn.classList.remove("color-green");
  pinjamanBtn.classList.remove("text-light");
  pinjamanSvg.style.fill = "black";
  data_siswaBtn.classList.add("color-green");
  data_siswaBtn.classList.remove("text-dark");
  data_siswaSvg.style.fill = "white";
});

// Hover Data Pinjaman
data_pinjamanBtn.addEventListener("mouseenter", function () {
  data_pinjamanBtn.classList.add("color-green");
  data_pinjamanBtn.classList.add("text-light");
  data_pinjamanSvg.style.fill = "white";
  data_siswaBtn.classList.remove("color-green");
  data_siswaBtn.classList.add("text-dark");
  data_siswaSvg.style.fill = "black";
});
data_pinjamanBtn.addEventListener("mouseleave", function () {
  data_pinjamanBtn.classList.remove("color-green");
  data_pinjamanBtn.classList.remove("text-light");
  data_pinjamanSvg.style.fill = "black";
  data_siswaBtn.classList.add("color-green");
  data_siswaBtn.classList.remove("text-dark");
  data_siswaSvg.style.fill = "white";
});

// Hover Logout
logoutBtn.addEventListener("mouseenter", function () {
  logoutBtn.classList.add("color-green");
  logoutBtn.classList.add("text-light");
  logoutSvg.style.fill = "white";
  data_siswaBtn.classList.remove("color-green");
  data_siswaBtn.classList.add("text-dark");
  data_siswaSvg.style.fill = "black";
});
logoutBtn.addEventListener("mouseleave", function () {
  logoutBtn.classList.remove("color-green");
  logoutBtn.classList.remove("text-light");
  logoutSvg.style.fill = "black";
  data_siswaBtn.classList.add("color-green");
  data_siswaBtn.classList.remove("text-dark");
  data_siswaSvg.style.fill = "white";
});

document.addEventListener("DOMContentLoaded", async function () {
  const searchResults = document.querySelector("#searchResults"); // Changed the selector to tbody

  try {
    // Fetch all data from the database when the page is loaded
    const response = await fetch(`siswa/siswa.php`);
    if (!response.ok) {
      throw new Error("Error fetching data");
    }
    const allData = await response.json();

    // Display all data in the table body
    if (allData.length === 0) {
      // If no data found, display a message
      searchResults.innerHTML = "<tr><td colspan='6'>Data Siswa Tidak Ditemukan</td></tr>";
    } else {
      let i = 1;
      allData.forEach(function (row) {
        const newRow = document.createElement("tr");
        newRow.innerHTML = `
                    <td class="col-1">${i}</td>
                    <td class="col-4">${row.nama}</td>
                    <td class="col-2">${row.nis}</td>
                    <td class="col-1">${row.kelas}</td>
                    <td class="col-2">
                        <p class="px-2 pb-2 pt-1 mb-0 rounded-3 text-light text-center ${row.gender == 1 ? "color-green" : "color-blue"}">
                            ${row.gender == 1 ? "LAKI - LAKI" : "PEREMPUAN"}
                        </p>
                    </td>
                    <td class="col-2 row-col">
                        <a href="siswa/edit-form.php?id=${row.id}" class="col btn color-blue"><img src="img/icon/pencil.svg" alt=""></a>
                        <button class="col btn btn-danger delete-btn" data-bs-toggle="modal" data-bs-target="#hapus_konfirmasi" data-id="${row.id}"><img src="img/icon/trash.svg" alt=""></button>
                        <a href="siswa/tampil.php?id=${row.id}" class="col btn color-blue-second"><img src="img/icon/eye.svg" alt=""></a>
                    </td>
                `;
        const deleteButtons = document.querySelectorAll(".delete-btn");
        deleteButtons.forEach((button) => {
          button.addEventListener("click", function () {
            const id = this.getAttribute("data-id");
            const deleteLink = document.querySelector("#hapus_konfirmasi a.btn-danger");
            deleteLink.href = `siswa/delete.php?id=${id}`;
          });
        });
        searchResults.appendChild(newRow);
        i++;
      });
    }
  } catch (error) {
    console.error(error);
    // Handle error
    searchResults.innerHTML = "<tr><td colspan='6'>Error fetching data</td></tr>";
  }

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
      const allDataResponse = await fetch(`siswa/siswa.php`);
      if (!allDataResponse.ok) {
        throw new Error("Error fetching all data");
      }
      searchData = await allDataResponse.json();
    } else {
      // If there's a search query, fetch data based on the query
      response = await fetch(`siswa/search.php?cari=${searchQuery}`);
      if (!response.ok) {
        throw new Error("Error fetching search results");
      }
      searchData = await response.json();
    }

    // Clear existing table rows
    searchResults.innerHTML = "";

    if (searchData.length === 0) {
      // If no results found, display a message
      searchResults.innerHTML = "<tr><td colspan='6'>Data Siswa Tidak Ditemukan</td></tr>";
    } else {
      // Append search results to the table body
      let i = 1;
      searchData.forEach(function (row) {
        const newRow = document.createElement("tr");
        newRow.innerHTML = `
                    <td class="col-1">${i}</td>
                    <td class="col-4">${row.nama}</td>
                    <td class="col-2">${row.nis}</td>
                    <td class="col-1">${row.kelas}</td>
                    <td class="col-2">
                        <p class="px-2 pb-2 pt-1 mb-0 rounded-3 text-light text-center ${row.gender == 1 ? "color-green" : "color-blue"}">
                            ${row.gender == 1 ? "LAKI - LAKI" : "PEREMPUAN"}
                        </p>
                    </td>
                    <td class="col-2 row-col">
                        <a href="siswa/edit-form.php?id=${row.id}" class="col btn color-blue"><img src="img/icon/pencil.svg" alt=""></a>
                        <button class="col btn btn-danger delete-btn" data-bs-toggle="modal" data-bs-target="#hapus_konfirmasi" data-id="${row.id}"><img src="img/icon/trash.svg" alt=""></button>
                        <a href="siswa/tampil.php?id=${row.id}" class="col btn color-blue-second"><img src="img/icon/eye.svg" alt=""></a>
                    </td>
                `;
        const deleteButtons = document.querySelectorAll(".delete-btn");
        deleteButtons.forEach((button) => {
          button.addEventListener("click", function () {
            const id = this.getAttribute("data-id");
            const deleteLink = document.querySelector("#hapus_konfirmasi a.btn-danger");
            deleteLink.href = `siswa/delete.php?id=${id}`;
          });
        });
        searchResults.appendChild(newRow);
        i++;
      });
    }
  } catch (error) {
    console.error(error);
    // Handle error
    searchResults.innerHTML = "<tr><td colspan='6'>Error fetching search results</td></tr>";
  }
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
        const allDataResponse = await fetch(`siswa/siswa.php`);
        if (!allDataResponse.ok) {
          throw new Error("Error fetching all data");
        }
        searchData = await allDataResponse.json();
      } else {
        // If there's a search query, fetch data based on the query
        response = await fetch(`siswa/search.php?cari=${searchQuery}`);
        if (!response.ok) {
          throw new Error("Error fetching search results");
        }
        searchData = await response.json();
      }

      // Clear existing table rows
      searchResults.innerHTML = "";

      if (searchData.length === 0) {
        // If no results found, display a message
        searchResults.innerHTML = "<tr><td colspan='6'>Data Siswa Tidak Ditemukan</td></tr>";
      } else {
        // Append search results to the table body
        let i = 1;
        searchData.forEach(function (row) {
          const newRow = document.createElement("tr");
          newRow.innerHTML = `
                        <td class="col-1">${i}</td>
                        <td class="col-4">${row.nama}</td>
                        <td class="col-2">${row.nis}</td>
                        <td class="col-1">${row.kelas}</td>
                        <td class="col-2">
                            <p class="px-2 pb-2 pt-1 mb-0 rounded-3 text-light text-center ${row.gender == 1 ? "color-green" : "color-blue"}">
                                ${row.gender == 1 ? "LAKI - LAKI" : "PEREMPUAN"}
                            </p>
                        </td>
                        <td class="col-2 row-col">
                            <a href="siswa/edit-form.php?id=${row.id}" class="col btn color-blue"><img src="img/icon/pencil.svg" alt=""></a>
                            <button class="col btn btn-danger delete-btn" data-bs-toggle="modal" data-bs-target="#hapus_konfirmasi" data-id="${row.id}" ><img src="img/icon/trash.svg" alt=""></button>
                            <a href="siswa/tampil.php?id=${row.id}" class="col btn color-blue-second"><img src="img/icon/eye.svg" alt=""></a>
                        </td>
                    `;
          const deleteButtons = document.querySelectorAll(".delete-btn");
          deleteButtons.forEach((button) => {
            button.addEventListener("click", function () {
              const id = this.getAttribute("data-id");
              const deleteLink = document.querySelector("#hapus_konfirmasi a.btn-danger");
              deleteLink.href = `siswa/delete.php?id=${id}`;
            });
          });
          searchResults.appendChild(newRow);
          i++;
        });
      }
    } catch (error) {
      console.error(error);
      // Handle error
      searchResults.innerHTML = "<tr><td colspan='6'>Error fetching data</td></tr>";
    }
  }

  // Add event listener for form submission
  searchForm.addEventListener("submit", handleSearch);

  // Add event listener for search button click
  const searchBtn = document.querySelector(".search-btn");
  searchBtn.addEventListener("click", handleSearch);

  // Load all data on page load
  handleSearch(new Event("submit"));
});

// Add an event listener to the select element
const selectElement = document.querySelector(".form-select");
selectElement.addEventListener("change", async function (event) {
  event.preventDefault(); // Prevent form submission
  const selectedOption = event.target.value; // Get the selected option value

  // Your existing code for handling the search based on the selected option
  const searchResults = document.querySelector("#searchResults");

  try {
    let searchData;

    // Fetch data based on the selected option

    if (selectedOption == "Kelas") {
      // If no search query, fetch all data from the database
      const response = await fetch(`siswa/siswa.php`);
      if (!response.ok) {
        throw new Error("Error fetching all data");
      }
      searchData = await response.json();
    } else {
      // If there's a search query, fetch data based on the query
      const response = await fetch(`siswa/kelas.php?cari=${selectedOption}`);
      if (!response.ok) {
        throw new Error("Error fetching search results");
      }
      searchData = await response.json();
    }

    // Clear existing table rows
    searchResults.innerHTML = "";

    if (searchData.length === 0) {
      // If no results found, display a message
      searchResults.innerHTML = "<tr><td colspan='6'>Data Siswa Tidak Ditemukan</td></tr>";
    } else {
      // Append search results to the table body
      let i = 1;
      searchData.forEach(function (row) {
        const newRow = document.createElement("tr");
        newRow.innerHTML = `
          <td class="col-1">${i}</td>
          <td class="col-4">${row.nama}</td>
          <td class="col-2">${row.nis}</td>
          <td class="col-1">${row.kelas}</td>
          <td class="col-2">
            <p class="px-2 pb-2 pt-1 mb-0 rounded-3 text-light text-center ${row.gender == 1 ? "color-green" : "color-blue"}">
              ${row.gender == 1 ? "LAKI - LAKI" : "PEREMPUAN"}
            </p>
          </td>
          <td class="col-2 row-col">
            <a href="siswa/edit-form.php?id=${row.id}" class="col btn color-blue"><img src="img/icon/pencil.svg" alt=""></a>
            <button class="col btn btn-danger delete-btn" data-bs-toggle="modal" data-bs-target="#hapus_konfirmasi" data-id="${row.id}"><img src="img/icon/trash.svg" alt=""></button>
            <a href="siswa/tampil.php?id=${row.id}" class="col btn color-blue-second"><img src="img/icon/eye.svg" alt=""></a>
          </td>
        `;
        const deleteButtons = document.querySelectorAll(".delete-btn");
        deleteButtons.forEach((button) => {
          button.addEventListener("click", function () {
            const id = this.getAttribute("data-id");
            const deleteLink = document.querySelector("#hapus_konfirmasi a.btn-danger");
            deleteLink.href = `siswa/delete.php?id=${id}`;
          });
        });
        searchResults.appendChild(newRow);
        i++;
      });
    }
  } catch (error) {
    console.error(error);
    // Handle error
    searchResults.innerHTML = "<tr><td colspan='6'>Error fetching search results</td></tr>";
  }
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
  let nama = document.getElementById("nama").value;
  if (nama == "") {
    displayError("nama", "Nama Tidak Boleh Kosong!");
  } else {
    clearError("nama");
  }

  let nis = document.getElementById("nis").value;
  if (nis == "") {
    displayError("nis", "NIS Tidak Boleh Kosong!");
  } else {
    clearError("nis");
  }

  let kelas = document.getElementById("kelas").value;
  if (kelas == "") {
    displayError("kelas", "Pilih Salah Satu!");
  } else {
    clearError("kelas");
  }

  let gender = document.getElementById("gender").value;
  if (gender == "") {
    displayError("gender", "Pilih Salah Satu!");
  } else {
    clearError("gender");
  }

  return isValid;
}
