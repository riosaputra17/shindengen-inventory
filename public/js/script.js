// ======================= SIDEBAR ACTIVE =======================
const allSideMenu = document.querySelectorAll("#sidebar .side-menu.top li a");

// cek halaman aktif berdasarkan URL
document.addEventListener("DOMContentLoaded", function () {
    const allSideMenu = document.querySelectorAll("#sidebar .side-menu li a");
    const currentLocation = window.location.pathname; // ex: /material-in

    allSideMenu.forEach((item) => {
        const li = item.parentElement;
        const itemHref = new URL(item.href).pathname; // ambil pathname dari href

        if (currentLocation === itemHref) {
            li.classList.add("active");
        } else if (itemHref !== "/" && currentLocation.startsWith(itemHref)) {
            li.classList.add("active");
        } else {
            li.classList.remove("active");
        }
    });
});

// ======================= TOGGLE SIDEBAR =======================
const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
    sidebar.classList.toggle("hide");
});

// AUTO TOGGLE DENGAN POINTER
sidebar.addEventListener("mouseenter", function () {
    sidebar.classList.remove("hide"); // buka saat pointer masuk
});

sidebar.addEventListener("mouseleave", function () {
    sidebar.classList.add("hide"); // tutup saat pointer keluar
});

// ======================= SEARCH =======================
const searchButton = document.querySelector(
    "#content nav form .form-input button"
);
const searchButtonIcon = document.querySelector(
    "#content nav form .form-input button .bx"
);
const searchForm = document.querySelector("#content nav form");

searchButton.addEventListener("click", function (e) {
    if (window.innerWidth < 576) {
        e.preventDefault();
        searchForm.classList.toggle("show");
        if (searchForm.classList.contains("show")) {
            searchButtonIcon.classList.replace("bx-search", "bx-x");
        } else {
            searchButtonIcon.classList.replace("bx-x", "bx-search");
        }
    }
});

if (window.innerWidth < 768) {
    sidebar.classList.add("hide");
} else if (window.innerWidth > 576) {
    searchButtonIcon.classList.replace("bx-x", "bx-search");
    searchForm.classList.remove("show");
}

window.addEventListener("resize", function () {
    if (this.innerWidth > 576) {
        searchButtonIcon.classList.replace("bx-x", "bx-search");
        searchForm.classList.remove("show");
    }
});

// ======================= DARK MODE =======================
const switchMode = document.getElementById("switch-mode");

switchMode.addEventListener("change", function () {
    if (this.checked) {
        document.body.classList.add("dark");
    } else {
        document.body.classList.remove("dark");
    }
});
