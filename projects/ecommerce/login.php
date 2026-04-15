<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShopNova – Login / Register</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=DM+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="auth-page">
    <!-- Visual Side -->
    <div class="auth-visual">
      <div class="auth-visual-content">
        <div class="logo">Shop<span style="color:var(--clr-accent)">Nova</span></div>
        <h2>Welcome Back!</h2>
        <p>Sign in to access your orders, wishlist, and exclusive member deals.</p>
        <div class="auth-perks">
          <div class="auth-perk"><span>🚀</span> Fast order tracking</div>
          <div class="auth-perk"><span>❤️</span> Save to wishlist</div>
          <div class="auth-perk"><span>💸</span> Exclusive member discounts</div>
          <div class="auth-perk"><span>📦</span> Easy returns & refunds</div>
        </div>
      </div>
    </div>

    <!-- Form Side -->
    <div class="auth-form-side">
      <div class="auth-box">
        <div class="auth-tabs">
          <div class="auth-tab active" onclick="switchTab('login', this)">Login</div>
          <div class="auth-tab" onclick="switchTab('register', this)">Register</div>
        </div>

        <!-- Login Form -->
        <div id="form-login">
          <div class="social-auth">
            <button class="social-auth-btn">🔵 Google</button>
            <button class="social-auth-btn">⬛ Facebook</button>
          </div>
          <div class="divider">or continue with email</div>
          <div class="form-group"><label>Email Address</label><input type="email" class="form-control"
              placeholder="you@email.com"></div>
          <div class="form-group"><label>Password</label><input type="password" class="form-control"
              placeholder="••••••••"></div>
          <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;font-size:14px">
            <label style="display:flex;align-items:center;gap:8px;cursor:pointer"><input type="checkbox"
                style="accent-color:var(--clr-accent)"> Remember me</label>
            <a href="#" style="color:var(--clr-accent)">Forgot password?</a>
          </div>
          <button class="btn btn-primary" style="width:100%;justify-content:center;padding:14px;font-size:15px">Login to
            Account</button>
          <p style="text-align:center;margin-top:20px;font-size:14px;color:var(--clr-mid)">Don't have an account? <a
              href="register.php" style="color:var(--clr-accent);font-weight:600"
              onclick="event.preventDefault();document.querySelectorAll('.auth-tab')[1].click()">Register →</a></p>
        </div>

        <!-- Register Form (hidden by default in register.php) -->
        <div id="form-register" style="display:none">
          <div class="grid-2" style="gap:16px">
            <div class="form-group" style="margin:0"><label>First Name</label><input type="text" class="form-control"
                placeholder="Rohan"></div>
            <div class="form-group" style="margin:0"><label>Last Name</label><input type="text" class="form-control"
                placeholder="Patel"></div>
          </div>
          <div style="height:20px"></div>
          <div class="form-group"><label>Email Address</label><input type="email" class="form-control"
              placeholder="you@email.com"></div>
          <div class="form-group"><label>Phone Number</label><input type="tel" class="form-control"
              placeholder="+91 98765 43210"></div>
          <div class="form-group"><label>Password</label><input type="password" class="form-control"
              placeholder="Min. 8 characters"></div>
          <div class="form-group"><label>Confirm Password</label><input type="password" class="form-control"
              placeholder="Repeat password"></div>
          <label
            style="display:flex;align-items:flex-start;gap:10px;font-size:13px;color:var(--clr-mid);margin-bottom:24px;cursor:pointer"><input
              type="checkbox" style="accent-color:var(--clr-accent);margin-top:3px"> I agree to the <a href="terms.php"
              style="color:var(--clr-accent)">Terms & Conditions</a> and <a href="privacy.php"
              style="color:var(--clr-accent)">Privacy Policy</a></label>
          <button class="btn btn-primary" style="width:100%;justify-content:center;padding:14px;font-size:15px">Create
            Account</button>
          <p style="text-align:center;margin-top:20px;font-size:14px;color:var(--clr-mid)">Already have an account? <a
              href="#" style="color:var(--clr-accent);font-weight:600"
              onclick="event.preventDefault();document.querySelectorAll('.auth-tab')[0].click()">Login →</a></p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>