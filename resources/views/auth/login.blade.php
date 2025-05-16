<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
  <div class="login-container">
    <h2 class="title">Login Here!</h2>
    <p class="subtitle">
      Silakan masuk untuk mengakses dashboard pemantauan<br>
      dan pengelolaan data secara real-time.
    </p>

    <!-- Session Status -->
    @if (session('status'))
        <div class="session-status">
            {{ session('status') }}
        </div>
    @endif

    <form class="login-form" method="POST" action="{{ route('login') }}">
      @csrf

      <!-- Username -->
      <input type="text" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus autocomplete="username">
      @error('username')
          <div class="input-error">{{ $message }}</div>
      @enderror

      <!-- Password -->
      <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
      @error('password')
          <div class="input-error">{{ $message }}</div>
      @enderror

      <!-- Submit -->
      <button type="submit" class="login-btn">Login</button>
    </form>

    <!-- Register Link -->
    <div class="create-account">
      <a href="{{ route('pages.register') }}">Create new account</a>
    </div>
  </div>
</body>
</html>
