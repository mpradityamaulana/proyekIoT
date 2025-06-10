<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Riwayat Data</title>
  <link rel="stylesheet" href="{{ asset('css/datahistory.css') }}" />
</head>
<body>
  <div class="sidebar">
    <div class="logo">System Monitoring</div>
    <div class="status">🟢 System Active</div>
    <nav>
      <a href="{{ route('pages.dashboard') }}">🏠 Dashboard</a>
      <a href="#" class="active">⏱️ Riwayat Data</a>
      <a href="{{ route('pages.control') }}">📐 Kontrol</a>    </nav>
  </div>

  <div class="main">
    <div class="topbar">
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

    <h1>Riwayat Data</h1>

    <div class="filters">
  <form method="GET" action="{{ route('pages.datahistory') }}">
    <div class="filter-group">
      <button type="button">Rentang Waktu</button>
      <input type="date" name="start_date" value="{{ request('start_date') }}">
      <input type="date" name="end_date" value="{{ request('end_date') }}">
    </div>
    <div class="filter-group">
      <button type="button">Tekanan</button>
      <input type="text" name="beban" placeholder="Tekanan" value="{{ request('beban') }}">
    </div>
    <div class="filter-group">
      <button type="button">Kecepatan</button>
      <input type="text" name="kecepatan" placeholder="RPM" value="{{ request('kecepatan') }}">
    </div>
    <button class="apply-btn" type="submit">Terapkan</button>
    <a href="{{ route('pages.datahistory') }}" class="reset-btn">Reset</a>
  </form>
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
      @forelse ($data as $row)
        <tr>
          <td>{{ \Carbon\Carbon::parse($row->created_at)->format('Y-m-d H:i:s') }}</td>
          <td>{{ number_format((float)$row->beban, 1, ',', '.') }}</td>
          <td>{{ $row->kecepatan }}</td>
          <td>{{ $row->status_sistem }}</td>
        </tr>
      @empty
        <tr>
          <td colspan="4" style="text-align: center">Tidak ada data</td>
        </tr>
      @endforelse
    </tbody>
  </table>
  <div class="pagination-wrapper">
    {{ $data->links('vendor.pagination.custom') }}
</div>

</div>
  </div>

  <script src="{{ asset('js/riwayatdata.js') }}"></script>
</body>
</html>
