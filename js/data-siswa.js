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
                        <td class="col-1"><input class="form-check-input" type="checkbox" value="${row.id}" id="flexCheckDefault"></td>
                        <td class="col-1">${i}</td>
                        <td class="col-3">${row.nama}</td>
                        <td class="col-1">${row.nis}</td>
                        <td class="col-1">${row.kelas}</td>
                        <td class="col-2">
                            <p class="px-2 pb-2 pt-1 mb-0 rounded-3 text-light text-center ${row.gender == 1 ? "color-green" : "color-blue"}">
                            ${row.gender == 1 ? "LAKI - LAKI" : "PEREMPUAN"}
                            </p>
                        </td>
                        <td class="col-2 row-col">
                            <a href="siswa/edit-form.php?id=${row.id}" class="col btn color-blue"><img src="img/icon/pencil.svg" alt=""></a>
                            <button class="col btn color-red delete-btn" data-bs-toggle="modal" data-bs-target="#hapus_konfirmasi" data-id="${row.id}"><img src="img/icon/trash.svg" alt=""></button>
                            <a href="siswa/tampil.php?id=${row.id}" class="col btn color-blue-second"><img src="img/icon/eye.svg" alt=""></a>
                        </td>
                    `;
        const deleteButtons = document.querySelectorAll(".delete-btn");
        deleteButtons.forEach((button) => {
          button.addEventListener("click", function () {
            const id = this.getAttribute("data-id");
            const deleteLink = document.querySelector("#hapus_konfirmasi a.color-red");
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
  const selectElement = document.querySelector("#pilih");
  const selectAllButton = document.querySelector("#pilihSemua");

  const selectedIds = [];

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
                        <td class="col-1"><input class="form-check-input" type="checkbox" value="${row.id}" id="flexCheckDefault"></td>
                        <td class="col-1">${i}</td>
                        <td class="col-3">${row.nama}</td>
                        <td class="col-1">${row.nis}</td>
                        <td class="col-1">${row.kelas}</td>
                        <td class="col-2">
                            <p class="px-2 pb-2 pt-1 mb-0 rounded-3 text-light text-center ${row.gender == 1 ? "color-green" : "color-blue"}">
                            ${row.gender == 1 ? "LAKI - LAKI" : "PEREMPUAN"}
                            </p>
                        </td>
                        <td class="col-2 row-col">
                            <a href="siswa/edit-form.php?id=${row.id}" class="col btn color-blue"><img src="img/icon/pencil.svg" alt=""></a>
                            <button class="col btn color-red delete-btn" data-bs-toggle="modal" data-bs-target="#hapus_konfirmasi" data-id="${row.id}"><img src="img/icon/trash.svg" alt=""></button>
                            <a href="siswa/tampil.php?id=${row.id}" class="col btn color-blue-second"><img src="img/icon/eye.svg" alt=""></a>
                        </td>
                    `;
          const deleteButtons = document.querySelectorAll(".delete-btn");
          deleteButtons.forEach((button) => {
            button.addEventListener("click", function () {
              const id = this.getAttribute("data-id");
              const deleteLink = document.querySelector("#hapus_konfirmasi a.color-red");
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
  function handleSelectAll() {
    const selectedOption = selectElement.value;
    const checkedCheckboxes = document.querySelectorAll("#searchResults input[type='checkbox']:checked");
    const selectedIds = [];

    checkedCheckboxes.forEach((checkbox) => {
      selectedIds.push(checkbox.value);
    });

    // Collect the IDs of checked checkboxes
    if (selectedOption === "Edit") {
      // Limit selection to 10 checkboxes for editing
      if (selectedIds.length > 10) {
          alert("Maksimal Memilih 10 Data");
          return; // Exit function if more than 10 checkboxes selected
          }
      }

    

    // Perform actions based on the selected option
    if (selectedOption === "Edit") {
      if (selectedIds.length > 0) {
        // Redirect to the edit page with selected IDs
        window.location.href = `siswa/edit-form.php?id=${selectedIds.join(",")}`;
      } else {
        alert("Belum Memilih.");
      }
    } else if (selectedOption === "Hapus") {
      if (selectedIds.length > 0) {
        const confirmDelete = confirm("Apakah anda ingin menghapus data?");
        if (confirmDelete) {
          // Call a function to delete records based on selected IDs
          deleteSelectedRows(selectedIds);
        }
      } else {
        alert("Belum Memilih.");
      }
    }
  }

  // Function to delete selected rows
  async function deleteSelectedRows(ids) {
    try {
      // Send a request to delete rows with the selected IDs
      const response = await fetch(`siswa/delete.php?id=${ids.join(",")}`, {
        method: "DELETE",
        headers: {
          "Content-Type": "application/json"
        }
      });

      if (!response.ok) {
        throw new Error("Error deleting rows.");
      }

      // Refresh the search results
      handleSearch(new Event("submit"));
    } catch (error) {
      console.error(error);
      alert("Error deleting rows.");
    }
  }

  // Add event listener for form submission
  searchForm.addEventListener("submit", handleSearch);

  // Add event listener for search button click
  const searchBtn = document.querySelector(".search-btn");
  searchBtn.addEventListener("click", handleSearch);

  selectAllButton.addEventListener("click", handleSelectAll);

  // Load all data on page load
  handleSearch(new Event("submit"));

});


document.addEventListener("DOMContentLoaded", function() {
  let forms = document.querySelectorAll('.siswa-form');

  forms.forEach(function(form) {
      let tingkatSelects = form.querySelectorAll(".tingkat");
      let kelasSelects = form.querySelectorAll(".kelas");

      tingkatSelects.forEach(function(tingkatSelect, index) {
          let kelasSelect = kelasSelects[index];

          // Set default value for tingkat select element
          tingkatSelect.value = "SMK";

          // Handle change event for tingkat select element
          tingkatSelect.addEventListener("change", function() {
              let selectedTingkat = tingkatSelect.value;
              kelasSelect.innerHTML = ""; // Clear previous options

              if (selectedTingkat === "SMK") {
                  // Add class options for SMK
                  let kelasOptions = ["X DKV", "XI DKV", "XII DKV", "X PPLG", "XI PPLG", "XII PPLG"];
                  kelasOptions.forEach(function(kelas) {
                      let option = document.createElement("option");
                      option.value = kelas;
                      option.text = kelas;
                      kelasSelect.appendChild(option);
                  });
              } else if (selectedTingkat === "SMP") {
                  // Add class options for SMP
                  let kelasOptions = ["7 A", "7 B", "7 C", "8 A", "8 B", "8 C", "9 A", "9 B", "9 C"];
                  kelasOptions.forEach(function(kelas) {
                      let option = document.createElement("option");
                      option.value = kelas;
                      option.text = kelas;
                      kelasSelect.appendChild(option);
                  });
              } else {
                  // Add default options or options for other tingkat
                  let defaultOption = document.createElement("option");
                  defaultOption.text = "Kelas";
                  kelasSelect.appendChild(defaultOption);
              }
          });

          // Trigger change event for initial selection
          let event = new Event('change');
          tingkatSelect.dispatchEvent(event);
      });
  });
});

const selectElement = document.querySelectorAll(".form-kategori");
const searchResults = document.querySelector("#searchResults");

// Add event listener to each select element
selectElement.forEach(select => {
    select.addEventListener("change", async function (event) {
        event.preventDefault(); // Prevent form submission
        const selectedTingkat = document.getElementById("tingkat").value;
        const selectedKelas = document.getElementById("kelas").value;

        try {
            let searchData;

            // Fetch data based on the selected options
            if (selectedTingkat === "Tingkat" && selectedKelas === "Kelas") {
              // If no search query, fetch all data from the database
              const response = await fetch(`siswa/siswa.php`);
              if (!response.ok) {
                throw new Error("Error fetching all data");
              }
              searchData = await response.json();
            }else if(selectedTingkat === "SMK" && selectedKelas === "Kelas"){
              const response = await fetch(`siswa/kelas.php?tingkat=${selectedTingkat}&kelas=${selectedKelas}`);
              if (!response.ok) {
                  throw new Error("Error fetching search results");
              }
              searchData = await response.json();
            }else if(selectedTingkat === "SMP" && selectedKelas === "Kelas"){
                const response = await fetch(`siswa/kelas.php?tingkat=${selectedTingkat}&kelas=${selectedKelas}`);
                if (!response.ok) {
                    throw new Error("Error fetching search results");
                }
                searchData = await response.json();
            }else{
              const response = await fetch(`siswa/kelas.php?tingkat=${selectedTingkat}&kelas=${selectedKelas}`);
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
                        <td class="col-1"><input class="form-check-input" type="checkbox" value="${row.id}" id="flexCheckDefault"></td>
                        <td class="col-1">${i}</td>
                        <td class="col-3">${row.nama}</td>
                        <td class="col-1">${row.nis}</td>
                        <td class="col-1">${row.kelas}</td>
                        <td class="col-2">
                            <p class="px-2 pb-2 pt-1 mb-0 rounded-3 text-light text-center ${row.gender == 1 ? "color-green" : "color-blue"}">
                            ${row.gender == 1 ? "LAKI - LAKI" : "PEREMPUAN"}
                            </p>
                        </td>
                        <td class="col-2 row-col">
                            <a href="siswa/edit-form.php?id=${row.id}" class="col btn color-blue"><img src="img/icon/pencil.svg" alt=""></a>
                            <button class="col btn color-red delete-btn" data-bs-toggle="modal" data-bs-target="#hapus_konfirmasi" data-id="${row.id}"><img src="img/icon/trash.svg" alt=""></button>
                            <a href="siswa/tampil.php?id=${row.id}" class="col btn color-blue-second"><img src="img/icon/eye.svg" alt=""></a>
                        </td>
                    `;
                    searchResults.appendChild(newRow);
                    i++;
                });

                // Add event listener for delete buttons after rendering
                const deleteButtons = document.querySelectorAll(".delete-btn");
                deleteButtons.forEach((button) => {
                    button.addEventListener("click", function () {
                        const id = this.getAttribute("data-id");
                        const deleteLink = document.querySelector("#hapus_konfirmasi a.color-red");
                        deleteLink.href = `siswa/delete.php?id=${id}`;
                    });
                });
            }
        } catch (error) {
            console.error(error);
            // Handle error
            searchResults.innerHTML = "<tr><td colspan='6'>Error fetching search results</td></tr>";
        }
    });
});


document.addEventListener("DOMContentLoaded", function() {
  let tingkatSelect = document.getElementById("tingkat");
  let kelasSelect = document.getElementById("kelas");

  tingkatSelect.addEventListener("change", function() {
      let selectedTingkat = tingkatSelect.value;
      kelasSelect.innerHTML = ""; // Clear previous options

      if (selectedTingkat === "SMK") {
          // Add class options for SMK
          let kelasOptions = ["Kelas", "X DKV", "XI DKV", "XII DKV", "X PPLG", "XI PPLG", "XII PPLG"];
          kelasOptions.forEach(function(kelas) {
              let option = document.createElement("option");
              option.value = kelas;
              option.text = kelas;
              kelasSelect.appendChild(option);
          });
      } else if (selectedTingkat === "SMP") {
          // Add class options for SMP
          let kelasOptions = ["Kelas", "7 A", "7 B", "7 C", "8 A", "8 B", "8 C", "9 A", "9 B", "9 C"];
          kelasOptions.forEach(function(kelas) {
              let option = document.createElement("option");
              option.value = kelas;
              option.text = kelas;
              kelasSelect.appendChild(option);
          });
      } else {
          // Add default options or options for other tingkat
          let defaultOption = document.createElement("option");
          defaultOption.text = "Kelas";
          kelasSelect.appendChild(defaultOption);
      }
  });
});

let selectSiswa = document.getElementById('select-siswa');
let allForms = document.querySelectorAll('form[class*="siswa"]');

selectSiswa.addEventListener('change', function() {
    let selectedValue = this.value;

    // Hide all form sections
    allForms.forEach(function(form) {
        if (!form.classList.contains('siswa' + selectedValue)) {
            form.style.display = 'none';
        }
    });

    // Show only the selected form section
    let selectedForm = document.querySelector('.siswa' + selectedValue);
    if (selectedForm) {
        selectedForm.style.display = 'block';
    }
});

// Initially, show only the selected form section
let initialSelectedValue = selectSiswa.value;
let initialSelectedForm = document.querySelector('.siswa' + initialSelectedValue);
if (initialSelectedForm) {
    initialSelectedForm.style.display = 'block';
}

document.addEventListener("DOMContentLoaded", function() {
  let forms = document.querySelectorAll('.siswa-form');

  forms.forEach(function(form) {
      let tingkatSelects = form.querySelectorAll(".tingkat");
      let kelasSelects = form.querySelectorAll(".kelas");

      tingkatSelects.forEach(function(tingkatSelect, index) {
          let kelasSelect = kelasSelects[index];

          // Set default value for tingkat select element
          tingkatSelect.value = "SMK";

          // Handle change event for tingkat select element
          tingkatSelect.addEventListener("change", function() {
              let selectedTingkat = tingkatSelect.value;
              kelasSelect.innerHTML = ""; // Clear previous options

              if (selectedTingkat === "SMK") {
                  // Add class options for SMK
                  let kelasOptions = ["X DKV", "XI DKV", "XII DKV", "X PPLG", "XI PPLG", "XII PPLG"];
                  kelasOptions.forEach(function(kelas) {
                      let option = document.createElement("option");
                      option.value = kelas;
                      option.text = kelas;
                      kelasSelect.appendChild(option);
                  });
              } else if (selectedTingkat === "SMP") {
                  // Add class options for SMP
                  let kelasOptions = ["7 A", "7 B", "7 C", "8 A", "8 B", "8 C", "9 A", "9 B", "9 C"];
                  kelasOptions.forEach(function(kelas) {
                      let option = document.createElement("option");
                      option.value = kelas;
                      option.text = kelas;
                      kelasSelect.appendChild(option);
                  });
              } else {
                  // Add default options or options for other tingkat
                  let defaultOption = document.createElement("option");
                  defaultOption.text = "Kelas";
                  kelasSelect.appendChild(defaultOption);
              }
          });

          // Trigger change event for initial selection
          let event = new Event('change');
          tingkatSelect.dispatchEvent(event);
      });
  });
});



