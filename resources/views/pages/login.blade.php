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
    <p class="subtitle">Silakan masuk untuk mengakses dashboard pemantauan<br>dan pengelolaan data secara real-time.</p>

    <form class="login-form">
      <input type="email" placeholder="email" required>
      <input type="password" placeholder="password" required>
      <div class="forgot-password">
        <a href="#">Forgot your password?</a>
      </div>
      <button type="submit" class="login-btn">Login</button>
    </form>

    <div class="create-account">
      <a href="{{ route('pages.register') }}">Create new account</a>
    </div>
      
  </div>

  <script src="loginairbearing.js"></script>
</body>
</html>
