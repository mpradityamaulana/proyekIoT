<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="loginairbearing.css">
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
      <a href="registerairbearing.html">Create new account</a>
    </div>

    <div class="divider">
      <span>or login with</span>
    </div>
      
      <div class="social-login">
        <button class="social-btn fb">
          <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" alt="Facebook">
        </button>
        <button class="social-btn apple">
          <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/apple.svg" alt="Apple">
        </button>
        <button class="social-btn google">
          <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/google.svg" alt="Google">
        </button>
      </div>
      
  </div>

  <script src="loginairbearing.js"></script>
</body>
</html>
