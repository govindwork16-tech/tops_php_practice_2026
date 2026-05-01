<?php

require_once 'admin/functions.php';
require_once('include/header.php');


if (!isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
  header('location: index.php');
}

if (isset($_SESSION['user_id'])) {
  $user = $_SESSION['user_id'];
  $user_fetch = user_data($user);
}

if (isset($_GET['logout'])) {
  $logout = logout();
  if ($logout) {
    echo "<script>alert('Logout Successful'); window.location = 'index.php';</script>";
  } else {
    echo "<script>alert('Something Went Wrong'); window.location = 'index.php';</script>";
  }
}

if (isset($_GET['delete'])) {
  $delete = delete_account($user_id);
  if ($delete) {
    header('location: index.php');
  } else {
    echo "<script>alert('Something Went Wrong'); window.location = 'account_details.php';</script>";
  }
}

?>

<div class="section">
  <div class="container">

    <div class="card" style="max-width:600px;margin:auto;padding:36px;">

      <!-- Profile Top -->
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
          <?php
          echo strtoupper($user_fetch['first_name'][0] . $user_fetch['last_name'][0])
          ?>
        </div>

        <h3 style="margin-bottom:6px;"><?php echo $user_fetch['first_name']; ?> <?php echo $user_fetch['last_name']; ?></h3>
        <p style="color:var(--clr-mid);font-size:14px;">My Account</p>

      </div>

      <!-- Info List -->
      <div style="display:flex;flex-direction:column;gap:18px;">

        <div style="display:flex;justify-content:space-between;border-bottom:1px solid var(--clr-border);padding-bottom:10px;">
          <span style="color:var(--clr-mid);font-size:14px;">First Name</span>
          <span style="font-weight:600;"><?php echo $user_fetch['first_name']; ?></span>
        </div>

        <div style="display:flex;justify-content:space-between;border-bottom:1px solid var(--clr-border);padding-bottom:10px;">
          <span style="color:var(--clr-mid);font-size:14px;">Last Name</span>
          <span style="font-weight:600;"><?php echo $user_fetch['last_name']; ?></span>
        </div>

        <div style="display:flex;justify-content:space-between;border-bottom:1px solid var(--clr-border);padding-bottom:10px;">
          <span style="color:var(--clr-mid);font-size:14px;">Email</span>
          <span style="font-weight:600;"><?php echo $user_fetch['email']; ?></span>
        </div>

        <div style="display:flex;justify-content:space-between;border-bottom:1px solid var(--clr-border);padding-bottom:10px;">
          <span style="color:var(--clr-mid);font-size:14px;">Phone</span>
          <span style="font-weight:600;"><?php echo $user_fetch['phone_number']; ?></span>
        </div>

        <div style="display:flex;justify-content:space-between;border-bottom:1px solid var(--clr-border);padding-bottom:10px;">
          <span style="color:var(--clr-mid);font-size:14px;">Country</span>
          <span style="font-weight:600;"><?php echo $user_fetch['country_name']; ?></span>
        </div>

        <div style="display:flex;justify-content:space-between;border-bottom:1px solid var(--clr-border);padding-bottom:10px;">
          <span style="color:var(--clr-mid);font-size:14px;">State</span>
          <span style="font-weight:600;"><?php echo $user_fetch['state_name']; ?></span>
        </div>

        <div style="display:flex;justify-content:space-between;">
          <span style="color:var(--clr-mid);font-size:14px;">City</span>
          <span style="font-weight:600;"><?php echo $user_fetch['city_name']; ?></span>
        </div>

      </div>

      <div style="display:flex;gap:12px;margin-top:24px;justify-content:center;">

        <!-- Edit Button -->
        <a href="edit_account.php" style="
        flex:1;
        text-align:center;
        padding:12px;
        border-radius:8px;
        background:var(--clr-accent);
        color:#fff;
        font-weight:600;
        text-decoration:none;
      ">
          Edit Account
        </a>

        <!-- Logout Button -->
        <a href="account_details.php?logout=1" style="
        flex:1;
        text-align:center;
        padding:12px;
        border-radius:8px;
        background:#f1f1f1;
        color:#333;
        font-weight:600;
        text-decoration:none;
      ">
          Logout
        </a>

        <!-- Delete Button -->
        <a type="submit" href="account_details.php?delete=1"
          onclick="return confirm('Are you sure you want to delete your account? This cannot be undone.')"
          style="
          flex:1;
          text-align:center;
          padding:12px;
          border-radius:8px;
          background:#fde8e3;
          color:#c0392b;
          font-weight:600;
          border:none;
          cursor:pointer;
        ">
          Delete
        </a>

      </div>

    </div>

  </div>

  <div class="card" style="max-width:600px;margin:24px auto;padding:24px;">

    <h3 style="margin-bottom:16px;">My Orders</h3>

    <!-- Single Order -->
    <div style="
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:14px;
    border-bottom:1px solid var(--clr-border);
  ">
      <div>
        <div style="font-weight:600;">Order #1234</div>
        <div style="font-size:13px;color:var(--clr-mid);">12 Apr 2026</div>
      </div>

      <div style="
      padding:4px 10px;
      border-radius:20px;
      font-size:12px;
      background:#e3f2ec;
      color:#3a7d5e;
      font-weight:600;
    ">
        Delivered
      </div>
    </div>

    <!-- Another Order -->
    <div style="
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:14px;
  ">
      <div>
        <div style="font-weight:600;">Order #1235</div>
        <div style="font-size:13px;color:var(--clr-mid);">15 Apr 2026</div>
      </div>

      <div style="
      padding:4px 10px;
      border-radius:20px;
      font-size:12px;
      background:#fff8e3;
      color:#b07d00;
      font-weight:600;
    ">
        In Transit
      </div>
    </div>

  </div>
</div>

<?php

require_once('include/footer.php');

?>