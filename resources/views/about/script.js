// Ambil elemen-elemen yang diperlukan
const sidebar = document.getElementById("sidebar");
const menuToggle = document.getElementById("menu-toggle");

// Fungsi untuk menampilkan atau menyembunyikan menu samping
function toggleSidebar() {
    sidebar.classList.toggle("active");
}

// Tambahkan event listener untuk tombol menu toggle
menuToggle.addEventListener("click", toggleSidebar);
