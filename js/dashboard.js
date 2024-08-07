// Btn Dashboard
const dashboardBtn = document.querySelector(".dashboard-btn");
const dashboardSvg = document.querySelector(".dashboard-svg");

// Btn Data Siswa
const data_siswaSvg = document.querySelector(".data-siswa-svg");
const data_siswaBtn = document.querySelector(".data-siswa-btn");

// Btn Data Buku
const data_bukuSvg = document.querySelector(".data-buku-svg");
const data_bukuBtn = document.querySelector(".data-buku-btn");

// Btn Data Buku
const pinjamanSvg = document.querySelector(".pinjaman-svg");
const pinjamanBtn = document.querySelector(".pinjaman-btn");

// Btn Pinjaman
const data_pinjamanSvg = document.querySelector(".data-pinjaman-svg");
const data_pinjamanBtn = document.querySelector(".data-pinjaman-btn");

// Btn Data Pinjaman
const logoutSvg = document.querySelector(".logout-svg");
const logoutBtn = document.querySelector(".logout-btn");

// Hover Data Siswa
data_siswaBtn.addEventListener("mouseenter", function () {
    data_siswaBtn.classList.add("color-green");
    data_siswaBtn.classList.add("text-light");
    data_siswaSvg.style.fill = "white";
    dashboardBtn.classList.remove("color-green");
    dashboardBtn.classList.add("text-dark");
    dashboardSvg.style.fill = "black";
});
data_siswaBtn.addEventListener("mouseleave", function () {
    data_siswaBtn.classList.remove("color-green");
    data_siswaBtn.classList.remove("text-light");
    data_siswaSvg.style.fill = "black";
    dashboardBtn.classList.add("color-green");
    dashboardBtn.classList.remove("text-dark");
    dashboardSvg.style.fill = "white";
});

// Hover Data Buku
data_bukuBtn.addEventListener("mouseenter", function () {
    data_bukuBtn.classList.add("color-green");
    data_bukuBtn.classList.add("text-light");
    data_bukuSvg.style.fill = "white";
    dashboardBtn.classList.remove("color-green");
    dashboardBtn.classList.add("text-dark");
    dashboardSvg.style.fill = "black";
});
data_bukuBtn.addEventListener("mouseleave", function () {
    data_bukuBtn.classList.remove("color-green");
    data_bukuBtn.classList.remove("text-light");
    data_bukuSvg.style.fill = "black";
    dashboardBtn.classList.add("color-green");
    dashboardBtn.classList.remove("text-dark");
    dashboardSvg.style.fill = "white";
});

// Hover Pinjaman
pinjamanBtn.addEventListener("mouseenter", function () {
    pinjamanBtn.classList.add("color-green");
    pinjamanBtn.classList.add("text-light");
    pinjamanSvg.style.fill = "white";
    dashboardBtn.classList.remove("color-green");
    dashboardBtn.classList.add("text-drk");
    dashboardSvg.style.fill = "black";
});
pinjamanBtn.addEventListener("mouseleave", function () {
    pinjamanBtn.classList.remove("color-green");
    pinjamanBtn.classList.remove("text-light");
    pinjamanSvg.style.fill = "black";
    dashboardBtn.classList.add("color-green");
    dashboardBtn.classList.remove("text-dark");
    dashboardSvg.style.fill = "white";
});

// Hover Data Pinjaman
data_pinjamanBtn.addEventListener("mouseenter", function () {
    data_pinjamanBtn.classList.add("color-green");
    data_pinjamanBtn.classList.add("text-light");
    data_pinjamanSvg.style.fill = "white";
    dashboardBtn.classList.remove("color-green");
    dashboardBtn.classList.add("text-dark");
    dashboardSvg.style.fill = "black";
});
data_pinjamanBtn.addEventListener("mouseleave", function () {
    data_pinjamanBtn.classList.remove("color-green");
    data_pinjamanBtn.classList.remove("text-light");
    data_pinjamanSvg.style.fill = "black";
    dashboardBtn.classList.add("color-green");
    dashboardBtn.classList.remove("dark");
    dashboardSvg.style.fill = "white";
});

// Hover Logout
logoutBtn.addEventListener("mouseenter", function () {
    logoutBtn.classList.add("color-green");
    logoutBtn.classList.add("text-light");
    logoutSvg.style.fill = "white";
    dashboardBtn.classList.remove("color-green");
    dashboardBtn.classList.add("text-dark");
    dashboardSvg.style.fill = "black";
});
logoutBtn.addEventListener("mouseleave", function () {
    logoutBtn.classList.remove("color-green");
    logoutBtn.classList.remove("text-light");
    logoutSvg.style.fill = "black";
    dashboardBtn.classList.add("color-green");
    dashboardBtn.classList.remove("text-dark");
    dashboardSvg.style.fill = "white";
});

