<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kontrol | Monitoring Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/control.css') }}" />
  @vite(['resources/js/app.js'])

</head>
<body>
  <div class="sidebar" id="sidebar">
    <div class="logo">System Monitoring</div>    
    <nav>
      <a href="{{ route('pages.dashboard') }}">🏠 Dashboard</a>
      <a href="{{ route('pages.datahistory') }}">📊 Riwayat Data</a>
      <a href="#" class="active">📐 Kontrol</a>
    </nav>
  </div>

  <div class="overlay" id="overlay" onclick="closeSidebar()"></div>

  <div class="main">
    <!-- Topbar -->
    <div class="topbar">

              <button class="toggle-btn" onclick="toggleSidebar()">☰</button>

      <div class="user-dropdown" onclick="toggleDropdown()">

        <b><span>Hallo! {{ Auth::user()->username}} 🌐 ▼</span></b>
        <div id="dropdown-menu" class="dropdown-content">
          <a href="{{ route('pages.editprofile') }}">✏️ Edit Profil</a>
          <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">🔓 Logout</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </div>
    </div>
        <!-- Kontainer utama untuk model 3D dan kontrolnya -->
    <div class="">
        <!-- Kontainer model 3D dengan latar belakang gelap dan sudut membulat -->
        <div class="kontrol-container">
            <h2 class="">Kontrol Model 3D</h2>
            <!-- Elemen canvas untuk rendering 3D Three.js -->
            <canvas id="sceneCanvas" class="model-canvas"></canvas>
            <!-- Kontrol untuk interaksi model -->
            <div class="">
                <button class="btn" data-action="rotate">Putar Model</button>
                <button class="btn" data-action="zoom">Zoom In/Out</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/control.js') }}"></script>
</body>
</html>
