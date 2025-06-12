// ===================
// Dropdown User Menu
// ===================
function toggleDropdown() {
  const dropdown = document.getElementById("dropdown-menu");
  dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}

function toggleSidebar() {
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");

  sidebar.classList.toggle("active");
  overlay.style.display = sidebar.classList.contains("active") ? "block" : "none";
}

function closeSidebar() {
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");

  sidebar.classList.remove("active");
  overlay.style.display = "none";
}

// Tutup dropdown jika klik di luar
window.onclick = function(event) {
  if (!event.target.closest('.user-dropdown')) {
    document.getElementById("dropdown-menu").style.display = "none";
  }
};


function fetchData() {
      $.get('/api/dashboard-data', function(data) {
        if (data) {
          $('#status-sistem').text(data.status_sistem || '-');
          $('#posisi-sumbu').text(data.posisi_sumbu || '-');
          $('#kecepatan').text(data.kecepatan || '-');
          $('#beban').text(data.beban || '-');
          $('#kemiringan').text(data.kemiringan || '-');
        }
      });
    }

    // Fetch data setiap 5 detik
    setInterval(fetchData, 5000);

    // Fetch pertama kali saat halaman load
    fetchData();