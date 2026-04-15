<?php 

require_once('include/config.php');
require_once('include/functions.php');

if (isset($_GET['logout'])) {
    adminlogout();
}

if (!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
}

require_once('include/header.php');
require_once('include/sidebar.php');

?>

<body>
  <div class="admin-shell">

    <!-- MAIN -->
    <div class="admin-main">

      <div class="page-content">
        <!-- Page Header -->
        <div class="page-header">
          <div class="page-header-left">
            <h1>Dashboard Overview</h1>
            <p>Welcome back, Admin. Here's what's happening today.</p>
          </div>
          <div class="page-header-actions">
            <button class="btn btn-secondary"><svg fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
                <polyline points="17 6 23 6 23 12" />
              </svg>Export Report</button>
            <button class="btn btn-primary"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 5v14M5 12h14" />
              </svg>Add Product</button>
          </div>
        </div>

        <!-- KPI Stats -->
        <div class="stats-grid">
          <div class="stat-card animate-up">
            <div class="stat-icon stat-icon-accent"><svg fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <line x1="12" y1="1" x2="12" y2="23" />
                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
              </svg></div>
            <div class="stat-body">
              <div class="stat-label">Total Revenue</div>
              <div class="stat-value">₹8,42,390</div>
              <div class="stat-change stat-up"><svg fill="none" stroke="currentColor" stroke-width="2.5"
                  viewBox="0 0 24 24">
                  <polyline points="18 15 12 9 6 15" />
                </svg>+18.4% vs last month</div>
            </div>
          </div>
          <div class="stat-card animate-up">
            <div class="stat-icon stat-icon-success"><svg fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                <line x1="3" y1="6" x2="21" y2="6" />
                <path d="M16 10a4 4 0 0 1-8 0" />
              </svg></div>
            <div class="stat-body">
              <div class="stat-label">Total Orders</div>
              <div class="stat-value">3,847</div>
              <div class="stat-change stat-up"><svg fill="none" stroke="currentColor" stroke-width="2.5"
                  viewBox="0 0 24 24">
                  <polyline points="18 15 12 9 6 15" />
                </svg>+9.2% vs last month</div>
            </div>
          </div>
          <div class="stat-card animate-up">
            <div class="stat-icon stat-icon-warning"><svg fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
              </svg></div>
            <div class="stat-body">
              <div class="stat-label">Customers</div>
              <div class="stat-value">12,480</div>
              <div class="stat-change stat-up"><svg fill="none" stroke="currentColor" stroke-width="2.5"
                  viewBox="0 0 24 24">
                  <polyline points="18 15 12 9 6 15" />
                </svg>+5.1% vs last month</div>
            </div>
          </div>
          <div class="stat-card animate-up">
            <div class="stat-icon stat-icon-info"><svg fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path
                  d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
              </svg></div>
            <div class="stat-body">
              <div class="stat-label">Total Products</div>
              <div class="stat-value">12,034</div>
              <div class="stat-change stat-down"><svg fill="none" stroke="currentColor" stroke-width="2.5"
                  viewBox="0 0 24 24">
                  <polyline points="6 9 12 15 18 9" />
                </svg>-2.3% vs last month</div>
            </div>
          </div>
        </div>

        <!-- Charts Row -->
        <div class="grid-2 mb-20">
          <div class="card">
            <div class="card-header">
              <div>
                <div class="card-title">Revenue Overview</div>
                <div class="card-subtitle">Monthly revenue — 2025</div>
              </div>
              <div class="card-header-actions">
                <select class="toolbar-filter" style="font-size:12px;padding:5px 28px 5px 10px;border-radius:5px">
                  <option>This Year</option>
                  <option>Last Year</option>
                </select>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-placeholder">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                </svg>
                <span>Revenue chart — connect Chart.js here</span>
              </div>
              <div class="mini-bars mt-16">
                <div class="mini-bar" style="height:40%"></div>
                <div class="mini-bar" style="height:60%"></div>
                <div class="mini-bar" style="height:45%"></div>
                <div class="mini-bar" style="height:80%"></div>
                <div class="mini-bar" style="height:55%"></div>
                <div class="mini-bar" style="height:70%"></div>
                <div class="mini-bar" style="height:90%"></div>
                <div class="mini-bar active" style="height:100%"></div>
                <div class="mini-bar" style="height:75%"></div>
                <div class="mini-bar" style="height:65%"></div>
                <div class="mini-bar" style="height:50%"></div>
                <div class="mini-bar" style="height:85%"></div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <div>
                <div class="card-title">Order Status</div>
                <div class="card-subtitle">Current period breakdown</div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-placeholder">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M12 2a10 10 0 0 1 10 10" />
                </svg>
                <span>Donut chart — connect Chart.js here</span>
              </div>
              <div class="mt-16">
                <div class="flex-between mb-16">
                  <div class="flex-center gap-8">
                    <div class="badge-dot"
                      style="width:10px;height:10px;border-radius:50%;background:var(--clr-success);display:inline-block">
                    </div><span class="text-sm">Delivered</span>
                  </div>
                  <div><span class="text-bold">2,840</span><span class="text-muted text-xs"> (73%)</span></div>
                </div>
                <div class="progress-bar-track mb-16">
                  <div class="progress-bar-fill success" style="width:73%"></div>
                </div>
                <div class="flex-between mb-16">
                  <div class="flex-center gap-8">
                    <div class="badge-dot"
                      style="width:10px;height:10px;border-radius:50%;background:var(--clr-warning);display:inline-block">
                    </div><span class="text-sm">In Transit</span>
                  </div>
                  <div><span class="text-bold">620</span><span class="text-muted text-xs"> (16%)</span></div>
                </div>
                <div class="progress-bar-track mb-16">
                  <div class="progress-bar-fill warning" style="width:16%"></div>
                </div>
                <div class="flex-between mb-16">
                  <div class="flex-center gap-8">
                    <div class="badge-dot"
                      style="width:10px;height:10px;border-radius:50%;background:var(--clr-danger);display:inline-block">
                    </div><span class="text-sm">Cancelled</span>
                  </div>
                  <div><span class="text-bold">387</span><span class="text-muted text-xs"> (10%)</span></div>
                </div>
                <div class="progress-bar-track">
                  <div class="progress-bar-fill" style="width:10%;background:var(--clr-danger)"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Bottom Row -->
        <div class="grid-2">
          <!-- Recent Orders -->
          <div class="card">
            <div class="card-header">
              <div>
                <div class="card-title">Recent Orders</div>
                <div class="card-subtitle">Latest 5 transactions</div>
              </div>
              <a href="#" class="btn btn-ghost btn-sm">View All</a>
            </div>
            <div class="card-body">
              <div class="recent-order-row">
                <div class="order-avatar avatar-a">P</div>
                <div>
                  <div class="order-customer-name">Priya Sharma</div>
                  <div class="order-customer-email">priya@email.com</div>
                </div>
                <span class="badge badge-success"><span class="badge-dot"></span>Delivered</span>
                <div>
                  <div class="order-amount">₹4,071</div>
                  <div class="order-date">Dec 15</div>
                </div>
              </div>
              <div class="recent-order-row">
                <div class="order-avatar avatar-b">R</div>
                <div>
                  <div class="order-customer-name">Rohan Mehta</div>
                  <div class="order-customer-email">rohan@email.com</div>
                </div>
                <span class="badge badge-warning"><span class="badge-dot"></span>Transit</span>
                <div>
                  <div class="order-amount">₹3,499</div>
                  <div class="order-date">Dec 14</div>
                </div>
              </div>
              <div class="recent-order-row">
                <div class="order-avatar avatar-c">A</div>
                <div>
                  <div class="order-customer-name">Anjali Patel</div>
                  <div class="order-customer-email">anjali@email.com</div>
                </div>
                <span class="badge badge-info"><span class="badge-dot"></span>Processing</span>
                <div>
                  <div class="order-amount">₹1,898</div>
                  <div class="order-date">Dec 14</div>
                </div>
              </div>
              <div class="recent-order-row">
                <div class="order-avatar avatar-d">K</div>
                <div>
                  <div class="order-customer-name">Karan Shah</div>
                  <div class="order-customer-email">karan@email.com</div>
                </div>
                <span class="badge badge-success"><span class="badge-dot"></span>Delivered</span>
                <div>
                  <div class="order-amount">₹2,200</div>
                  <div class="order-date">Dec 13</div>
                </div>
              </div>
              <div class="recent-order-row">
                <div class="order-avatar avatar-e">N</div>
                <div>
                  <div class="order-customer-name">Nisha Gupta</div>
                  <div class="order-customer-email">nisha@email.com</div>
                </div>
                <span class="badge badge-danger"><span class="badge-dot"></span>Cancelled</span>
                <div>
                  <div class="order-amount">₹899</div>
                  <div class="order-date">Dec 12</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Top Products -->
          <div class="card">
            <div class="card-header">
              <div>
                <div class="card-title">Top Products</div>
                <div class="card-subtitle">By revenue this month</div>
              </div>
              <a href="manageproducts.html" class="btn btn-ghost btn-sm">View All</a>
            </div>
            <div class="card-body">
              <div class="top-product-row">
                <div class="top-product-rank gold">1</div>
                <div class="tbl-thumb">📱</div>
                <div>
                  <div class="top-product-name">Wireless Earbuds Pro</div>
                  <div class="top-product-sales">248 sold</div>
                </div>
                <div class="top-product-revenue">₹3,22,152</div>
              </div>
              <div class="top-product-row">
                <div class="top-product-rank silver">2</div>
                <div class="tbl-thumb">⌚</div>
                <div>
                  <div class="top-product-name">Smart Watch Series X</div>
                  <div class="top-product-sales">189 sold</div>
                </div>
                <div class="top-product-revenue">₹6,61,311</div>
              </div>
              <div class="top-product-row">
                <div class="top-product-rank bronze">3</div>
                <div class="tbl-thumb">🎒</div>
                <div>
                  <div class="top-product-name">Canvas Backpack</div>
                  <div class="top-product-sales">142 sold</div>
                </div>
                <div class="top-product-revenue">₹1,27,658</div>
              </div>
              <div class="top-product-row">
                <div class="top-product-rank">4</div>
                <div class="tbl-thumb">🌿</div>
                <div>
                  <div class="top-product-name">Natural Skincare Kit</div>
                  <div class="top-product-sales">118 sold</div>
                </div>
                <div class="top-product-revenue">₹88,382</div>
              </div>
              <div class="top-product-row">
                <div class="top-product-rank">5</div>
                <div class="tbl-thumb">👟</div>
                <div>
                  <div class="top-product-name">Sport Runner Shoes</div>
                  <div class="top-product-sales">97 sold</div>
                </div>
                <div class="top-product-revenue">₹1,84,203</div>
              </div>
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