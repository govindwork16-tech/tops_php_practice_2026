<!-- =============================================
     INCLUDE: sidebar.html
     Paste inside .admin-shell before .admin-main
     ============================================= -->

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

<aside class="sidebar">
  <div class="sidebar-brand">
    <div class="sidebar-brand-icon">🛍</div>
    <div class="sidebar-brand-text">Shop<span>Nova</span></div>
  </div>

  <!-- MAIN -->
  <div class="sidebar-section">
    <div class="sidebar-section-label">Main</div>
    <nav class="sidebar-nav">
      <a href="dashboard.php" class="nav-item active">
        <svg class="nav-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <rect x="3" y="3" width="7" height="7" />
          <rect x="14" y="3" width="7" height="7" />
          <rect x="14" y="14" width="7" height="7" />
          <rect x="3" y="14" width="7" height="7" />
        </svg>
        Dashboard
      </a>
    </nav>
  </div>

  <!-- CATALOGUE -->
  <div class="sidebar-section">
    <div class="sidebar-section-label">Catalogue</div>
    <nav class="sidebar-nav">
      <a href="add_category.php" class="nav-item">Add Category</a>
      <a href="manage_category.php" class="nav-item">Manage Categories</a>
      <a href="add_sub_category.php" class="nav-item">Add Sub-Category</a>
      <a href="manage_sub_category.php" class="nav-item">Manage Sub-Category</a>
      <a href="add_products.php" class="nav-item">Add Products</a>
      <a href="manage_products.php" class="nav-item">Manage Products</a>
    </nav>
  </div>

  <!-- PEOPLE -->
  <div class="sidebar-section">
    <div class="sidebar-section-label">People</div>
    <nav class="sidebar-nav">
      <a href="manage_customers.php" class="nav-item">Manage Customers</a>
    </nav>
  </div>

  <!-- SYSTEM -->
  <div class="sidebar-section">
    <div class="sidebar-section-label">System</div>
    <nav class="sidebar-nav">
      <a href="index.php" class="nav-item">Logout</a>
    </nav>
  </div>

  <div class="sidebar-footer">
    <div class="sidebar-user dropdown">
      <div class="sidebar-avatar">A</div>
      <div>
        <div class="sidebar-user-name">Admin</div>
        <div class="sidebar-user-role">Super Admin</div>
      </div>
      <div class="sidebar-user-arrow">⌄</div>

      <!-- Dropdown -->
      <div class="sidebar-dropdown">
        <a href="profile.php">My Profile</a>
        <a href="settings.php">Settings</a>
        <a href="index.php">Logout</a>
      </div>
    </div>
  </div>
</aside>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/main.js"></script>