<?php

require_once 'admin/functions.php';
require_once 'include/header.php';


if (isset($_SESSION['user_id'])) {
  $user = $_SESSION['user_id'];
  $user_fetch = user_data($user);
}

if (isset($_POST['update_btn'])) {

  $user_id = $_SESSION['user_id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $country = $_POST['country'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $update_user = update_user($user_id,$first_name, $last_name, $email, $phone_number, $country, $state, $city);

  if ($update_user) {
    echo "<script>alert('User Updated Successfully'); window.location = 'account_details.php';</script>";
  } else {
    echo "<script>alert('Something Went Wrong'); window.location = 'account_details.php';</script>";
  }
}

?>

<div class="section">
  <div class="container">

    <div class="card" style="max-width:600px;margin:auto;padding:36px;">

      <!-- Top -->
      <div style="text-align:center;margin-bottom:32px;">

        <!-- Avatar -->
        <div style="
          width:90px;
          height:90px;
          margin:auto;
          border-radius:50%;
          background:var(--clr-accent-light);
          display:flex;
          align-items:center;
          justify-content:center;
          font-size:2.2rem;
          font-weight:700;
          color:var(--clr-accent);
          margin-bottom:14px;
        ">
          <?php echo strtoupper($user_fetch['first_name'][0] . $user_fetch['last_name'][0]); ?>
        </div>

        <h3 style="margin-bottom:6px;">Edit Profile</h3>
        <p style="color:var(--clr-mid);font-size:14px;">Update your account details</p>

      </div>

      <!-- FORM -->
      <form method="post">

        <div style="display:flex;flex-direction:column;gap:18px;">

          <!-- First Name -->
          <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" value="<?php echo $user_fetch['first_name']; ?>">
          </div>

          <!-- Last Name -->
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control" value="<?php echo $user_fetch['last_name']; ?>">
          </div>

          <!-- Email -->
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $user_fetch['email']; ?>">
          </div>

          <!-- Phone -->
          <div class="form-group">
            <label>Phone Number</label>
            <input type="tel" name="phone_number" class="form-control" value="<?php echo $user_fetch['phone_number']; ?>">
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
                  <?php 
                    $country_select = select_state();
                    foreach ($country_select as $row) {
                      ?>
                      <option value="<?php echo $row['state_id'] ?>"><?php echo $row['state_name'] ?></option>
                      <?php
                    }
                  ?>
                </select>
              </div>
            </div>

            <div style="height:20px"></div>

            <!-- City -->
            <div class="form-group">
              <label>City</label>
              <select name="city" class="form-control" required>
                <option value="">Select City</option>
                <?php 
                    $country_select = select_city();
                    foreach ($country_select as $row) {
                      ?>
                      <option value="<?php echo $row['city_id'] ?>"><?php echo $row['city_name'] ?></option>
                      <?php
                    }
                  ?>
              </select>
            </div>

        </div>

        <!-- Buttons -->
        <div style="display:flex;gap:12px;margin-top:24px;">

          <!-- Save -->
          <button type="submit" name="update_btn" class="btn btn-primary" style="flex:1;justify-content:center;">
            Save Changes
          </button>

          <!-- Cancel -->
          <a href="account_details.php" class="btn btn-outline" style="flex:1;justify-content:center;text-align:center;">
            Cancel
          </a>

        </div>

      </form>

    </div>

  </div>
</div>