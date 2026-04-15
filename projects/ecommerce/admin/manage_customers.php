<?php
require_once('include/config.php');
require_once('include/header.php');
require_once('include/sidebar.php');
?>

<body>
<div class="admin-main">

  <div class="page-content">

    <div class="page-header">
      <div class="page-header-left">
        <h1>Manage Customers</h1>
        <p>View and manage registered customers.</p>
      </div>
    </div>

    <!-- Toolbar -->
    <div class="card mb-20">
      <div class="toolbar">
        <div class="toolbar-search">
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.35-4.35" />
          </svg>
          <input type="text" placeholder="Search customer...">
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
              <th>Customer</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Orders</th>
              <th>Status</th>
              <th>Joined</th>
              <th class="text-right">Actions</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td><input type="checkbox" class="row-check"></td>

              <td>
                <div class="tbl-product">
                  <div class="tbl-thumb">A</div>
                  <div>
                    <div class="tbl-product-name">Amit Patel</div>
                    <div class="tbl-product-sku">Customer ID: CUST001</div>
                  </div>
                </div>
              </td>

              <td>amit@gmail.com</td>
              <td>9876543210</td>
              <td>5 Orders</td>

              <td>
                <span class="badge badge-success">
                  <span class="badge-dot"></span>
                  Active
                </span>
              </td>

              <td>12 Mar 2026</td>

              <td class="text-right">
                <div class="tbl-actions">
                  <a href="view_customer.php" class="btn-icon">👁</a>
                  <a href="#" class="btn-icon danger btn-delete-confirm">🗑</a>
                </div>
              </td>
            </tr>

            <tr>
              <td><input type="checkbox" class="row-check"></td>

              <td>
                <div class="tbl-product">
                  <div class="tbl-thumb">R</div>
                  <div>
                    <div class="tbl-product-name">Riya Shah</div>
                    <div class="tbl-product-sku">Customer ID: CUST002</div>
                  </div>
                </div>
              </td>

              <td>riya@gmail.com</td>
              <td>9123456780</td>
              <td>2 Orders</td>

              <td>
                <span class="badge badge-danger">
                  <span class="badge-dot"></span>
                  Blocked
                </span>
              </td>

              <td>10 Mar 2026</td>

              <td class="text-right">
                <div class="tbl-actions">
                  <a href="viewcustomer.php" class="btn-icon">👁</a>
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>'
<script src="js/main.js"></script>
</body>