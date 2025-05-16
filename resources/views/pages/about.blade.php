<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tentang Kami</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/about.css') }}" />
</head>
<body>
  <header class="navbar">
    <h1 class="logo">Monitoring System</h1>
    <nav>
      <a href="{{ route('pages.home') }}">Home</a>
      <a href="{{ route('pages.feature') }}">Fitur</a>
      <a href="#" class="active">Tentang Kami</a>
    </nav>
    <a href="{{ route('login') }}" class="btn">Get Started</a>
  </header>

  <main class="about-container">
    <div class="decor star left"></div>
    <div class="decor star right"></div>
    <h2 class="title">Tentang Kami</h2>
    <p class="desc animate">
      <b><i>SABER</i></b> adalah singkatan dari <b><i>Satelit Beraksi</i></b>, tim mahasiswa yang bergerak di bidang pengembangan teknologi berbasis <i>Internet Of Things</i>. Fokus utama tim ini adalah membangun sistem kontrol dan monitoring untuk kebutuhan simulasi satelit skala kecil.
    </p>
    <p class="desc animate delay">
      Proyek utama saat ini adalah sistem pengendali rotasi satu sumbu berbasis air bearing yang menggunakan mikrokontroler ESP32. Sistem ini dirancang untuk meminimalkan gesekan antar penyangga dan memungkinkan simulasi gerakan satelit secara lebih presisi.
    </p> 
  </main>
  <div class="decor circle"></div>
</body>
</html>
