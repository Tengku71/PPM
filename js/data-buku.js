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
  data_bukuBtn.classList.remove("color-green");
  data_bukuBtn.classList.add("text-dark");
  data_bukuSvg.style.fill = "black";
});
dashboardBtn.addEventListener("mouseleave", function () {
  dashboardBtn.classList.remove("color-green");
  dashboardBtn.classList.remove("text-light");
  dashboardSvg.style.fill = "black";
  data_bukuBtn.classList.add("color-green");
  data_bukuBtn.classList.remove("text-dark");
  data_bukuSvg.style.fill = "white";
});

// Hover Data Siswa
data_siswaBtn.addEventListener("mouseenter", function () {
  data_siswaBtn.classList.add("color-green");
  data_siswaBtn.classList.add("text-light");
  data_siswaSvg.style.fill = "white";
  data_bukuBtn.classList.remove("color-green");
  data_bukuBtn.classList.add("text-dark");
  data_bukuSvg.style.fill = "black";
});
data_siswaBtn.addEventListener("mouseleave", function () {
  data_siswaBtn.classList.remove("color-green");
  data_siswaBtn.classList.remove("text-light");
  data_siswaSvg.style.fill = "black";
  data_bukuBtn.classList.add("color-green");
  data_bukuBtn.classList.remove("text-dark");
  data_bukuSvg.style.fill = "white";
});

// Hover Pinjaman
pinjamanBtn.addEventListener("mouseenter", function () {
  pinjamanBtn.classList.add("color-green");
  pinjamanBtn.classList.add("text-light");
  pinjamanSvg.style.fill = "white";
  data_bukuBtn.classList.remove("color-green");
  data_bukuBtn.classList.add("text-dark");
  data_bukuSvg.style.fill = "black";
});
pinjamanBtn.addEventListener("mouseleave", function () {
  pinjamanBtn.classList.remove("color-green");
  pinjamanBtn.classList.remove("text-light");
  pinjamanSvg.style.fill = "black";
  data_bukuBtn.classList.add("color-green");
  data_bukuBtn.classList.remove("text-dark");
  data_bukuSvg.style.fill = "white";
});

// Hover Data Pinjaman
data_pinjamanBtn.addEventListener("mouseenter", function () {
  data_pinjamanBtn.classList.add("color-green");
  data_pinjamanBtn.classList.add("text-light");
  data_pinjamanSvg.style.fill = "white";
  data_bukuBtn.classList.remove("color-green");
  data_bukuBtn.classList.add("text-dark");
  data_bukuSvg.style.fill = "black";
});
data_pinjamanBtn.addEventListener("mouseleave", function () {
  data_pinjamanBtn.classList.remove("color-green");
  data_pinjamanBtn.classList.remove("text-light");
  data_pinjamanSvg.style.fill = "black";
  data_bukuBtn.classList.add("color-green");
  data_bukuBtn.classList.remove("text-dark");
  data_bukuSvg.style.fill = "white";
});

// Hover Logout
logoutBtn.addEventListener("mouseenter", function () {
  logoutBtn.classList.add("color-green");
  logoutBtn.classList.add("text-light");
  logoutSvg.style.fill = "white";
  data_bukuBtn.classList.remove("color-green");
  data_bukuBtn.classList.add("text-dark");
  data_bukuSvg.style.fill = "black";
});
logoutBtn.addEventListener("mouseleave", function () {
  logoutBtn.classList.remove("color-green");
  logoutBtn.classList.remove("text-light");
  logoutSvg.style.fill = "black";
  data_bukuBtn.classList.add("color-green");
  data_bukuBtn.classList.remove("text-dark");
  data_bukuSvg.style.fill = "white";
});

document.addEventListener("DOMContentLoaded", async function () {
  const searchResults = document.querySelector("#searchResults"); // Changed the selector to tbody

  try {
    // Fetch all data from the database when the page is loaded
    const response = await fetch(`buku/buku.php`);
    if (!response.ok) {
      throw new Error("Error fetching data");
    }
    const allData = await response.json();

    // Display all data in the table body
    if (allData.length === 0) {
      // If no data found, display a message
      searchResults.innerHTML = "<tr><td colspan='6'>Data buku Tidak Ditemukan</td></tr>";
    } else {
      let i = 1;
      allData.forEach(function (row) {
        const newRow = document.createElement("tr");
        newRow.innerHTML = `
                    <td class="col-1 ">${i}</td>
                    <td class="col-3">${row.judul}</td>
                    <td class="col-2">${row.pengarang}</td>
                    <td class="col-2">${row.penerbit}</td>
                    <td class="col-2 text-center">${row.jumlah}</td>
                    <td class="col-2 text-center">
                    <a href="buku/edit-form.php?id=${row.id}" class="col btn color-blue"><img src="img/icon/pencil.svg" alt=""></a>
                    <button class=" btn color-red delete-btn" data-bs-toggle="modal" data-bs-target="#hapus_konfirmasi" data-id="${row.id}"><img src="img/icon/trash.svg" alt=""></button>
                    <a href="buku/tampil.php?id=${row.id}" class="col btn color-blue-second"><img src="img/icon/eye.svg" alt=""></a>
                </td>
                `;
        const deleteButtons = document.querySelectorAll(".delete-btn");
        deleteButtons.forEach((button) => {
          button.addEventListener("click", function () {
            const id = this.getAttribute("data-id");
            const deleteLink = document.querySelector("#hapus_konfirmasi a.color-red");
            deleteLink.href = `buku/delete.php?id=${id}`;
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
      const allDataResponse = await fetch(`buku/buku.php`);
      if (!allDataResponse.ok) {
        throw new Error("Error fetching all data");
      }
      searchData = await allDataResponse.json();
    } else {
      // If there's a search query, fetch data based on the query
      response = await fetch(`buku/search.php?cari=${searchQuery}`);
      if (!response.ok) {
        throw new Error("Error fetching search results");
      }
      searchData = await response.json();
    }

    // Clear existing table rows
    searchResults.innerHTML = "";

    if (searchData.length === 0) {
      // If no results found, display a message
      searchResults.innerHTML = "<tr><td colspan='6'>Data Buku Tidak Ditemukan</td></tr>";
    } else {
      // Append search results to the table body
      let i = 1;
      searchData.forEach(function (row) {
        const newRow = document.createElement("tr");
        newRow.innerHTML = `
                    <td class="col-1 ">${i}</td>
                    <td class="col-3">${row.judul}</td>
                    <td class="col-2">${row.pengarang}</td>
                    <td class="col-2">${row.penerbit}</td>
                    <td class="col-2 text-center">${row.jumlah}</td>
                    <td class="col-2 text-center">
                    <a href="buku/edit-form.php?id=${row.id}" class="col btn color-blue"><img src="img/icon/pencil.svg" alt=""></a>
                      <button class=" btn color-red delete-btn" data-bs-toggle="modal" data-bs-target="#hapus_konfirmasi" data-id="${row.id}"><img src="img/icon/trash.svg" alt=""></button>
                    <a href="buku/tampil.php?id=${row.id}" class="col btn color-blue-second"><img src="img/icon/eye.svg" alt=""></a>
                </td>
                `;
        const deleteButtons = document.querySelectorAll(".delete-btn");
        deleteButtons.forEach((button) => {
          button.addEventListener("click", function () {
            const id = this.getAttribute("data-id");
            const deleteLink = document.querySelector("#hapus_konfirmasi a.color-red");
            deleteLink.href = `buku/delete.php?id=${id}`;
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
        const allDataResponse = await fetch(`buku/buku.php`);
        if (!allDataResponse.ok) {
          throw new Error("Error fetching all data");
        }
        searchData = await allDataResponse.json();
      } else {
        // If there's a search query, fetch data based on the query
        response = await fetch(`buku/search.php?cari=${searchQuery}`);
        if (!response.ok) {
          throw new Error("Error fetching search results");
        }
        searchData = await response.json();
      }

      // Clear existing table rows
      searchResults.innerHTML = "";

      if (searchData.length === 0) {
        // If no results found, display a message
        searchResults.innerHTML = "<tr><td colspan='6'>Data Buku Tidak Ditemukan</td></tr>";
      } else {
        // Append search results to the table body
        let i = 1;
        searchData.forEach(function (row) {
          const newRow = document.createElement("tr");
          newRow.innerHTML = `
                        <td class="col-1 ">${i}</td>
                        <td class="col-3">${row.judul}</td>
                        <td class="col-2">${row.pengarang}</td>
                        <td class="col-2">${row.penerbit}</td>
                        <td class="col-2 text-center">${row.jumlah}</td>
                        <td class="col-2 text-center">
                        <a href="buku/edit-form.php?id=${row.id}" class="col btn color-blue"><img src="img/icon/pencil.svg" alt=""></a>
                        <button class=" btn color-red delete-btn" data-bs-toggle="modal" data-bs-target="#hapus_konfirmasi" data-id="${row.id}"><img src="img/icon/trash.svg" alt=""></button>
                        <a href="buku/tampil.php?id=${row.id}" class="col btn color-blue-second"><img src="img/icon/eye.svg" alt=""></a>
                    </td>
                    `;
          const deleteButtons = document.querySelectorAll(".delete-btn");
          deleteButtons.forEach((button) => {
            button.addEventListener("click", function () {
              const id = this.getAttribute("data-id");
              const deleteLink = document.querySelector("#hapus_konfirmasi a.color-red");
              deleteLink.href = `buku/delete.php?id=${id}`;
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
  let buku_id = document.getElementById("buku_id").value;
  if (buku_id == "") {
    displayError("buku_id", "Buku ID Tidak Boleh Kosong!");
  } else {
    clearError("buku_id");
  }

  let judul = document.getElementById("judul").value;
  if (judul == "") {
    displayError("judul", "Judul Tidak Boleh Kosong!");
  } else {
    clearError("judul");
  }

  let pengarang = document.getElementById("pengarang").value;
  if (pengarang == "") {
    displayError("pengarang", "Pengarang Tidak Boleh Kosong!");
  } else {
    clearError("pengarang");
  }

  let penerbit = document.getElementById("penerbit").value;
  if (penerbit == "") {
    displayError("penerbit", "Penerbit Tidak Boleh Kosong!");
  } else {
    clearError("penerbit");
  }

  let tahun = document.getElementById("tahun").value;
  if (tahun == "") {
    displayError("tahun", "Tahun Tidak Boleh Kosong!");
  } else {
    clearError("tahun");
  }

  let jumlah = document.getElementById("jumlah").value;
  if (jumlah == "") {
    displayError("jumlah", "Jumlah Tidak Boleh Kosong!");
  } else {
    clearError("jumlah");
  }

  // let isbn = document.getElementById("isbn").value;
  // if (isbn == "") {
  //   displayError("isbn", "ISBN Tidak Boleh Kosong!");
  // } else {
  //   clearError("isbn");
  // }

  let kategori = document.getElementById("kategori").value;
  if (kategori == "") {
    displayError("kategori", "Tidak Boleh Kosong!");
  } else {
    clearError("kategori");
  }

  let rak = document.getElementById("rak").value;
  if (rak == "") {
    displayError("rak", "Tidak Boleh Kosong!");
  } else {
    clearError("rak");
  }

  // let sampul = document.getElementById("sampul").value;
  // if (sampul == "") {
  //   displayError("sampul", "Sampul Tidak Boleh Kosong!");
  // } else {
  //   clearError("sampul");
  // }

  // let lampiran = document.getElementById("lampiran").value;
  // if (lampiran == "") {
  //   displayError("lampiran", "Lampiran Tidak Boleh Kosong!");
  // } else {
  //   clearError("lampiran");
  // }

  // let isi = document.getElementById("isi").value;
  // if (isi == "") {
  //   displayError("isi", "Isi Tidak Boleh Kosong!");
  // } else {
  //   clearError("isi");
  // }

  // let tanggal_masuk = document.getElementById("tanggal_masuk").value;
  // if (tanggal_masuk == "") {
  //   displayError("tanggal_masuk", "Tanggal Masuk Tidak Boleh Kosong!");
  // } else {
  //   clearError("tanggal_masuk");
  // }

  // Repeat this process for other fields...

  // Return overall form validity
  return isValid;
}
