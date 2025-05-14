<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Riwayat Data</title>
  <link rel="stylesheet" href="riwayatdata.css" />
</head>
<body>
  <div class="sidebar">
    <div class="logo">System Monitoring</div>
    <div class="status">🟢 System Active</div>
    <nav>
      <a href="dashboard.html">🏠 Dashboard</a>
      <a href="#" class="active">⏱️ Riwayat Data</a>
      <a href="#">📁 belum tau</a>
      <a href="#">📈 belum tau</a>
    </nav>
  </div>

  <div class="main">
    <div class="topbar">
      <div class="user-dropdown" onclick="toggleDropdown()">
        <span>Hallo! 🌐 ▼</span>
        <div id="dropdown-menu" class="dropdown-content">
          <a href="#">✏️ Edit Profil</a>
          <a href="#">🔓 Logout</a>
        </div>
      </div>
    </div>

    <h1>Riwayat Data</h1>

    <div class="filters">
      <div class="filter-group">
        <button>Rentang Waktu</button>
        <input type="date" />
        <input type="date" />
      </div>
      <div class="filter-group">
        <button>Tekanan</button>
        <input type="text" placeholder="Tekanan" />
      </div>
      <div class="filter-group">
        <button>Kecepatan</button>
        <input type="text" placeholder="RPM" />
      </div>
      <button class="apply-btn">Terapkan</button>
    </div>

    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Waktu</th>
            <th>Tekanan (Bar)</th>
            <th>Kecepatan Putar (RPM)</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>2025 - 04 - 12 11:25:00</td><td>3,1</td><td>500</td><td>Normal</td></tr>
          <tr><td>2025 - 04 - 12 11:26:00</td><td>3,2</td><td>485</td><td>Normal</td></tr>
          <tr><td>2025 - 04 - 12 11:27:00</td><td>3,3</td><td>490</td><td>Normal</td></tr>
          <tr><td>2025 - 04 - 12 11:28:00</td><td>3,1</td><td>505</td><td>Normal</td></tr>
          <tr><td>2025 - 04 - 12 11:29:00</td><td>3,5</td><td>502</td><td>Normal</td></tr>
          <tr><td>2025 - 04 - 12 11:30:00</td><td>3,2</td><td>490</td><td>Normal</td></tr>
          <tr><td>2025 - 04 - 12 11:31:00</td><td>3,1</td><td>498</td><td>Normal</td></tr>
        </tbody>
      </table>
    </div>
  </div>

  <script src="riwayatdata.js"></script>
</body>
</html>
