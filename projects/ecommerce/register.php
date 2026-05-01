<?php

require_once 'admin/functions.php';

if (isset($_POST['register_btn'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $country = $_POST['country'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $register = user_register($first_name, $last_name, $email, $phone_number, $password, $confirm_password,$country, $state, $city);

  if ($register) {
    header('location: login.php');
  } else {
    echo "<script>alert('Password is incorrect Or Less than 8 characters'); window.location = 'login.php';</script>";
  }
}

?>

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

        <!-- Register Form (hidden by default in register.php) -->
        <form method="post">
          <div id="form-register" style="display:none">

            <!-- First & Last Name -->
            <div class="grid-2" style="gap:16px">
              <div class="form-group" style="margin:0">
                <label>First Name</label>
                <input name="first_name" type="text" class="form-control" placeholder="Rohan" required>
              </div>
              <div class="form-group" style="margin:0">
                <label>Last Name</label>
                <input name="last_name" type="text" class="form-control" placeholder="Patel" required>
              </div>
            </div>

            <div style="height:20px"></div>

            <!-- Email -->
            <div class="form-group">
              <label>Email Address</label>
              <input name="email" type="email" class="form-control" placeholder="you@email.com" required>
            </div>

            <!-- Phone -->
            <div class="form-group">
              <label>Phone Number</label>
              <input name="phone_number" type="tel" class="form-control" placeholder="+91 98765 43210" required>
            </div>

            <!-- Country & State -->
            <div class="grid-2" style="gap:16px">
              <div class="form-group" style="margin:0">
                <label>Country</label>
                <select name="country" class="form-control" required>
                  <option value="">Select Country</option>
                  <?php 
                    $country_select = select_country();
                    foreach ($country_select as $row) {
                      ?>
                      <option value="<?php echo $row['country_id'] ?>"><?php echo $row['country_name'] ?></option>
                      <?php
                    }
                  ?>
                </select>
              </div>

              <div class="form-group" style="margin:0">
                <label>State</label>
                <select name="state" class="form-control" required>
                  <option value="">Select State</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Delhi">Delhi</option>
                </select>
              </div>
            </div>

            <div style="height:20px"></div>

            <!-- City -->
            <div class="form-group">
              <label>City</label>
              <select name="city" class="form-control" required>
                <option value="">Select City</option>
                <option value="Rajkot">Rajkot</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Surat">Surat</option>
              </select>
            </div>

            <!-- Password -->
            <div class="form-group">
              <label>Password</label>
              <input name="password" type="password" class="form-control" placeholder="Min. 8 characters" required>
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
              <label>Confirm Password</label>
              <input name="confirm_password" type="password" class="form-control" placeholder="Repeat password" required>
            </div>

            <!-- Terms -->
            <label style="display:flex;align-items:flex-start;gap:10px;font-size:13px;color:var(--clr-mid);margin-bottom:24px;cursor:pointer">
              <input type="checkbox" required style="accent-color:var(--clr-accent);margin-top:3px">
              I agree to the
              <a href="terms.php" style="color:var(--clr-accent)">Terms & Conditions</a>
              and
              <a href="privacy.php" style="color:var(--clr-accent)">Privacy Policy</a>
            </label>

            <!-- Submit -->
            <button name="register_btn" class="btn btn-primary" style="width:100%;justify-content:center;padding:14px;font-size:15px">
              Create Account
            </button>

            <!-- Login Link -->
            <p style="text-align:center;margin-top:20px;font-size:14px;color:var(--clr-mid)">
              Already have an account?
              <a href="#" style="color:var(--clr-accent);font-weight:600"
                onclick="event.preventDefault();document.querySelectorAll('.auth-tab')[0].click()">
                Login →
              </a>
            </p>

          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>