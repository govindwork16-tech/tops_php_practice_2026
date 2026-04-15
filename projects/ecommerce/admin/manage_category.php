<?php 
    
    require_once('include/config.php');
require_once('include/header.php');
require_once('include/sidebar.php');

?>


<body>
<div class="admin-shell">

  <div class="admin-main">

    <!-- HEADER -->

    <!-- PAGE CONTENT -->
    <div class="page-content">

      <!-- Page Title -->
      <div class="page-header">
        <div class="page-header-left">
          <h1>Manage Categories</h1>
          <p>View, edit and manage product categories.</p>
        </div>

        <div class="page-header-actions">
          <a href="addcategory.php" class="btn btn-primary">
            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M12 5v14M5 12h14"/>
            </svg>
            Add Category
          </a>
        </div>
      </div>

      <!-- Toolbar -->
      <div class="card mb-20">
        <div class="toolbar">
          <div class="toolbar-search">
            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="11" cy="11" r="8"/>
              <path d="m21 21-4.35-4.35"/>
            </svg>
            <input type="text" placeholder="Search category...">
          </div>

          <div class="toolbar-filter">
            <select>
              <option>All Status</option>
              <option>Active</option>
              <option>Inactive</option>
            </select>
          </div>

          <div class="toolbar-spacer"></div>

          <div class="toolbar-right">
            <button class="btn btn-danger btn-sm">Delete Selected</button>
          </div>
        </div>

        <!-- TABLE -->
        <div class="table-wrapper">
          <table class="data-table">
            <thead>
              <tr>
                <th><input type="checkbox" id="select-all"></th>
                <th>Image</th>
                <th>Category Name</th>
                <th>Slug</th>
                <th>Status</th>
                <th>Created</th>
                <th class="text-right">Actions</th>
              </tr>
            </thead>

            <tbody>

              <!-- Row -->
              <tr>
                <td><input type="checkbox" class="row-check"></td>

                <td>
                  <div class="tbl-thumb">📦</div>
                </td>

                <td>Electronics</td>
                <td>electronics</td>

                <td>
                  <label class="toggle">
                    <input type="checkbox" class="toggle-input" checked>
                    <div class="toggle-track">
                      <div class="toggle-thumb"></div>
                    </div>
                    <span class="toggle-label">Active</span>
                  </label>
                </td>

                <td>12 Mar 2026</td>

                <td class="text-right">
                  <div class="tbl-actions">
                    <a href="editcategory.php" class="btn-icon">
                      ✏️
                    </a>
                    <a href="#" class="btn-icon danger btn-delete-confirm">
                      🗑
                    </a>
                  </div>
                </td>
              </tr>

              <!-- Row -->
              <tr>
                <td><input type="checkbox" class="row-check"></td>
                <td><div class="tbl-thumb">👕</div></td>
                <td>Clothing</td>
                <td>clothing</td>
                <td>
                  <label class="toggle">
                    <input type="checkbox" class="toggle-input">
                    <div class="toggle-track">
                      <div class="toggle-thumb"></div>
                    </div>
                    <span class="toggle-label">Inactive</span>
                  </label>
                </td>
                <td>10 Mar 2026</td>
                <td class="text-right">
                  <div class="tbl-actions">
                    <a href="editcategory.php" class="btn-icon">✏️</a>
                    <a href="#" class="btn-icon danger btn-delete-confirm">🗑</a>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div class="card-footer">
          <div class="pagination-info">
            Showing 1 to 10 of 50 entries
          </div>

          <div class="pagination">
            <button class="page-btn">‹</button>
            <button class="page-btn active">1</button>
            <button class="page-btn">2</button>
            <button class="page-btn">3</button>
            <button class="page-btn">›</button>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>