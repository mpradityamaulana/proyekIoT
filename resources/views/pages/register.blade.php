<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <link rel="stylesheet" href="registerairbearing.css">
</head>
<body>
  <div class="register-container">
    <h2 class="title">Register Now!</h2>
    <p class="subtitle">Silakan daftar untuk membuat akun dan mulai mengakses sistem<br>pemantauan serta pengelolaan data secara real-time.</p>

    <form class="register-form">
      <div class="form-group">
        <input type="text" placeholder="nama lengkap" required>
        <input type="email" placeholder="email" required>
      </div>
      <input type="password" placeholder="password" required>
      <input type="password" placeholder="confirm password" required>

      <label class="terms">
        <input type="checkbox" required>
        <span>I agree to the terms and conditions.</span>
      </label>

      <button type="submit" class="register-btn">Create Account</button>
    </form>

    <div class="login-redirect">
      <span>Already have an account? <a href="loginairbearing.html">Log in here.</a></span>
    </div>

    <div class="divider">
      <span>or register with</span>
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

  <script src="registerairbearing.js"></script>
</body>
</html>