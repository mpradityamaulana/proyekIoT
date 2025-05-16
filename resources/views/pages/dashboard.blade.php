<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Monitoring Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div class="sidebar">
    <div class="logo">System Monitoring</div>
    <div class="status">🟢 System Active</div>
    <nav>
      <a href="#" class="active">🏠 Dashboard</a>
      <a href="{{ route('pages.datahistory') }}">📊 Riwayat Data</a>
      <a href="#">📁 belum tau</a>
      <a href="#">📈 belum tau</a>
    </nav>
  </div>

  <div class="main">
    <!-- Topbar with Dropdown -->
    <div class="topbar">
  <div class="user-dropdown" onclick="toggleDropdown()">
      <span>Hallo! {{ Auth::user()->username }} 🌐 ▼</span>
      <div id="dropdown-menu" class="dropdown-content">
          <a href="#">✏️ Edit Profil</a>
          <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">🔓 Logout</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </div>
    </div>


    <h1>Dashboard</h1>

    <div class="top-cards">
      <div class="card dark">Status Sistem<br><strong>Stabil</strong></div>
      <div class="card lightblue">Posisi Sumbu<br><strong>X</strong></div>
      <div class="card dark">Kecepatan<br><strong>500 RPM 🔁</strong></div>
    </div>

    <div class="content-layout">
      <div class="chart-container">
        <canvas id="lineChart"></canvas>
      </div>
      <div class="side-data">
        <div class="card right">Beban<br><strong>300 N</strong></div>
        <div class="card right lightblue">Kemiringan<br><strong>12°</strong></div>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/dashboardNew.js') }}"></script>
</body>
</html>
