<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kontrol | Monitoring Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/control.css') }}" />
</head>
<body>
  <div class="sidebar">
    <div class="logo">System Monitoring</div>
    <div class="status">🟢 System Active</div>
    <nav>
      <a href="{{ route('pages.dashboard') }}">🏠 Dashboard</a>
      <a href="{{ route('pages.datahistory') }}">📊 Riwayat Data</a>
      <a href="#" class="active">📐 Kontrol</a>
      <a href="#">📈 belum tau</a>
    </nav>
  </div>

  <div class="main">
    <!-- Topbar -->
    <div class="topbar">
      <div class="user-dropdown" onclick="toggleDropdown()">
        <b><span>Hallo! {{ Auth::user()->username}} 🌐 ▼</span></b>
        <div id="dropdown-menu" class="dropdown-content">
          <a href="#">✏️ Edit Profil</a>
          <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">🔓 Logout</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </div>
    </div>

    <!-- Kontrol Content -->
    <div class="kontrol-container">
        <div class="kontrol-panel">
          <p><strong>nanti ini buat tampilan 3D alatnya</strong><br>masih bingung tampilan alatnya gimana</p>
        </div>

      <!-- Hiasan lingkaran -->
      <div class="circle-decor"></div>

        <div class="kontrol-buttons">
          <button class="circle-btn">
            <svg class="icon" viewBox="0 0 24 24">
              <path d="M15 18l-6-6 6-6" stroke="white" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <button class="circle-btn">
            <svg class="icon" viewBox="0 0 24 24">
              <path d="M9 6l6 6-6 6" stroke="white" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>

        </div>
      </div>
      

  <script>
    function toggleDropdown() {
      document.querySelector('.user-dropdown').classList.toggle('active');
    }
  </script>
</body>
</html>
