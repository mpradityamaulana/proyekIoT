// ===================
// Chart.js Code
// ===================
const ctx = document.getElementById('lineChart').getContext('2d');

new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['0', '1', '2', '3', '4', '5', '6', '7'],
    datasets: [{
      label: 'Data Sensor',
      data: [1000, 2000, 1500, 4000, 6000, 5000, 7000, 12000],
      fill: false,
      borderColor: 'limegreen',
      tension: 0.4,
      pointRadius: 4,
    }]
  },
  options: {
    plugins: {
      legend: { display: false }
    },
    scales: {
      x: {
        title: {
          display: true,
          text: 'Waktu',
          color: 'white'
        },
        ticks: { color: 'white' }
      },
      y: {
        title: {
          display: true,
          text: 'Nilai',
          color: 'white'
        },
        ticks: { color: 'white' }
      }
    }
  }
});

// ===================
// Dropdown User Menu
// ===================
function toggleDropdown() {
  const dropdown = document.getElementById("dropdown-menu");
  dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}

// Tutup dropdown jika klik di luar
window.onclick = function(event) {
  if (!event.target.closest('.user-dropdown')) {
    document.getElementById("dropdown-menu").style.display = "none";
  }
};
