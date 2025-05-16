<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Monitoring System</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/feature.css') }}"/>
</head>
<body>
  <header class="navbar">
    <h1 class="logo">Monitoring System</h1>
    <nav>
      <a href="{{ route('pages.home') }}">Home</a>
      <a href="#" class="active">Fitur</a>
      <a href="{{ route('pages.about') }}">Tentang Kami</a>
    </nav>
    <a href="{{ route('login') }}" class="btn">Get Started</a>
  </header>

  <main class="main-content">
    <div class="star left"></div>
    <div class="star right"></div>

    <h2 class="title">Fitur Utama</h2>

    <div class="features">
      <div class="feature-card animate">Rotasi Sumbu X, Y, atau Z
        <p>Tinggal pilih sumbu yang ingin dikendalikan sesuai kebutuhan.</p>
      </div>
      <div class="feature-card active animate" style="animation-delay: 0.1s;">Monitoring Data Gerak
        <p>Lihat kecepatan rotasi dan posisi secara langsung lewat grafik dinamis.</p>
      </div>
      <div class="feature-card animate" style="animation-delay: 0.2s;">History Log Otomatis
        <p>Setiap sesi pemantauan akan otomatis tersimpan. Riwayat data memudahkan untuk analisis lebih lanjut evaluasi performa sistem.</p>
      </div>
      <div class="feature-card animate" style="animation-delay: 0.3s;">Monitoring Kecepatan Rotasi (RPM)
        <p>Pantau kecepatan putaran motor secara real-time dalam satuan RPM</p>
      </div>
      <div class="feature-card animate" style="animation-delay: 0.4s;">Status System Secara Real Time
        <p>Lihat status terkini sistem secara langsung</p>
      </div>
    </div>
  </main>
  <script src="{{ asset('js/feature.js') }}"></script>

  <div class="circle-decor"></div>
</body>
</html>
