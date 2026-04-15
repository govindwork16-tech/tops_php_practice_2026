<?php
require_once('include/config.php');
require_once('include/header.php');
require_once('include/sidebar.php');
?>

<div class="admin-main">

  <div class="page-content">

    <!-- Customer Profile -->
    <div class="card mb-20">
      <div class="customer-profile-header">
        <div class="customer-big-avatar">A</div>

        <div>
          <div class="customer-big-name">Amit Patel</div>
          <div class="customer-big-email">amit@gmail.com</div>

          <div class="customer-big-stats">
            <div class="customer-big-stat">
              <div class="val">5</div>
              <div class="lbl">Orders</div>
            </div>

            <div class="customer-big-stat">
              <div class="val">₹25,000</div>
              <div class="lbl">Total Spent</div>
            </div>

            <div class="customer-big-stat">
              <div class="val">
                <span class="badge badge-success">
                  <span class="badge-dot"></span>
                  Active
                </span>
              </div>
              <div class="lbl">Status</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Customer Info -->
    <div class="grid-2 mb-20">

      <div class="card">
        <div class="card-header">
          <div class="card-title">Customer Information</div>
        </div>

        <div class="card-body">
          <div class="mb-16"><strong>Full Name:</strong> Amit Patel</div>
          <div class="mb-16"><strong>Email:</strong> amit@gmail.com</div>
          <div class="mb-16"><strong>Phone:</strong> 9876543210</div>
          <div class="mb-16"><strong>Joined:</strong> 12 Mar 2026</div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <div class="card-title">Address</div>
        </div>

        <div class="card-body">
          <div class="mb-16"><strong>City:</strong> Rajkot</div>
          <div class="mb-16"><strong>State:</strong> Gujarat</div>
          <div class="mb-16"><strong>Country:</strong> India</div>
          <div class="mb-16"><strong>Pincode:</strong> 360001</div>
        </div>
      </div>

    </div>

    <!-- Recent Orders -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">Recent Orders</div>
      </div>

      <div class="table-wrapper">
        <table class="data-table">
          <thead>
            <tr>
              <th>Order ID</th>
              <th>Date</th>
              <th>Amount</th>
              <th>Status</th>
              <th class="text-right">View</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>#ORD001</td>
              <td>12 Mar 2026</td>
              <td>₹5,000</td>
              <td>
                <span class="badge badge-success">
                  <span class="badge-dot"></span>
                  Delivered
                </span>
              </td>
              <td class="text-right">
                <a href="vieworder.php" class="btn btn-sm btn-secondary">View</a>
              </td>
            </tr>

            <tr>
              <td>#ORD002</td>
              <td>10 Mar 2026</td>
              <td>₹3,500</td>
              <td>
                <span class="badge badge-warning">
                  <span class="badge-dot"></span>
                  Pending
                </span>
              </td>
              <td class="text-right">
                <a href="vieworder.php" class="btn btn-sm btn-secondary">View</a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

  </div>

</div>