<?php

require_once 'admin/functions.php';
require_once('include/header.php');

?>

<body>
  <main>
    <section class="section">
      <div class="container">
        <h2 style="margin-bottom:32px">My Account</h2>
        <div class="account-layout">
          <div class="account-nav">
            <a href="orders.php" class="account-nav-item active">📦 My Orders</a>
            <a href="account_details.php" class="account-nav-item">👤 Profile</a>
            <a href="#" class="account-nav-item">📍 Addresses</a>
            <a href="#" class="account-nav-item">❤️ Wishlist</a>
            <a href="#" class="account-nav-item">🔔 Notifications</a>
            <a href="login.php" class="account-nav-item" style="color:#c0392b;margin-top:16px">🚪 Logout</a>
          </div>
          <div>
            <div class="card" style="padding:0">
              <div
                style="padding:20px 24px;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid var(--clr-border)">
                <h3 style="font-size:1.1rem">Order History</h3>
                <div style="display:flex;gap:10px">
                  <input type="text" class="form-control" placeholder="Search orders..."
                    style="width:200px;padding:8px 14px;font-size:13px">
                  <select class="form-control" style="width:auto;padding:8px 36px 8px 12px;font-size:13px">
                    <option>All Orders</option>
                    <option>Delivered</option>
                    <option>In Transit</option>
                    <option>Processing</option>
                  </select>
                </div>
              </div>
              <div class="order-row">
                <div>
                  <div class="order-id">#SNV-20251201</div>
                  <div class="order-name">Wireless Earbuds Pro + 2 more items</div>
                  <div class="order-date">Placed: Dec 1, 2025 · ₹4,071</div>
                </div>
                <div style="text-align:right"><span class="status-pill status-delivered">✓ Delivered</span><br><button
                    class="btn btn-outline btn-sm" style="margin-top:10px;font-size:12px">Reorder</button></div>
              </div>
              <div class="order-row">
                <div>
                  <div class="order-id">#SNV-20251118</div>
                  <div class="order-name">Smart Watch Series X</div>
                  <div class="order-date">Placed: Nov 18, 2025 · ₹3,499</div>
                </div>
                <div style="text-align:right"><span class="status-pill status-transit">🚚 In Transit</span><br><button
                    class="btn btn-outline btn-sm" style="margin-top:10px;font-size:12px">Track Order</button></div>
              </div>
              <div class="order-row">
                <div>
                  <div class="order-id">#SNV-20251105</div>
                  <div class="order-name">Natural Skincare Kit × 2</div>
                  <div class="order-date">Placed: Nov 5, 2025 · ₹1,498</div>
                </div>
                <div style="text-align:right"><span class="status-pill status-processing">⏳ Processing</span></div>
              </div>
              <div class="order-row">
                <div>
                  <div class="order-id">#SNV-20251020</div>
                  <div class="order-name">Canvas Backpack</div>
                  <div class="order-date">Placed: Oct 20, 2025 · ₹899</div>
                </div>
                <div style="text-align:right"><span class="status-pill status-cancelled">✕ Cancelled</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

<?php

require_once('include/footer.php');

?>

</html>