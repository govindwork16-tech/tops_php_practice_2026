<!-- =============================================
     INCLUDE: header.html
     Paste inside .admin-main as first child
     Change breadcrumb per page
     ============================================= -->

<?php
require_once('config.php');
require_once('functions.php');

if (isset($_GET['logout'])) {
  adminlogout();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShopNova Admin — Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=DM+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<header class="admin-header">
  <button class="header-toggle" title="Toggle sidebar">
    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <line x1="3" y1="6" x2="21" y2="6" />
      <line x1="3" y1="12" x2="21" y2="12" />
      <line x1="3" y1="18" x2="21" y2="18" />
    </svg>
  </button>

  <div class="header-breadcrumb">
    <a href="dashboard.php">Admin</a>
    <span>›</span>
    <span class="current">Dashboard</span> <!-- Change this per page -->
  </div>

  <div class="header-spacer"></div>

  <div class="header-search">
    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <circle cx="11" cy="11" r="8" />
      <path d="m21 21-4.35-4.35" />
    </svg>
    <input type="text" placeholder="Search anything…">
  </div>

  <div class="header-actions">
    <button class="hdr-btn" title="Notifications">
      <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
        <path d="M13.73 21a2 2 0 0 1-3.46 0" />
      </svg>
      <span class="hdr-notif-dot"></span>
    </button>
    <button class="hdr-btn" title="Messages">
      <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
      </svg>
    </button>
    <div class="hdr-divider"></div>
    <div class="hdr-user dropdown">
      <div class="hdr-avatar">A</div>
      <div>
        <div class="hdr-user-name">Admin</div>
        <div class="hdr-user-role">Super Admin</div>
      </div>
      <div class="hdr-user-arrow">⌄</div>

      <!-- Dropdown -->
      <div class="hdr-dropdown">
        <a href="profile.php">My Profile</a>
        <a href="changepassword.php">Change Password</a>
        <a href="index.php?logout=true" name="logout" onclick="alert('Are You Sure You Want To Logout?')">Logout</a>
      </div>
    </div>
  </div>
</header>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>