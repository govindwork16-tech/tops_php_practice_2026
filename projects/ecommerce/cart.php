<?php

require_once('include/config.php');
require_once('include/header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShopNova – Cart</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=DM+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <main>
    <section class="section">
      <div class="container">
        <div class="breadcrumb"><a href="index.php">Home</a><span>›</span><span style="color:var(--clr-dark)">Shopping
            Cart</span></div>
        <h2 style="margin-bottom:32px">Your Cart <span style="font-size:1rem;font-weight:400;color:var(--clr-mid)">(3
            items)</span></h2>
        <div class="cart-layout">
          <!-- Cart Items -->
          <div class="card" style="padding:0">
            <div class="cart-item">
              <div class="cart-item-img">📱</div>
              <div>
                <div class="cart-item-name">Wireless Earbuds Pro</div>
                <div class="cart-item-meta">Color: Midnight Black</div>
                <div class="cart-item-actions">
                  <div class="qty-control"><button class="qty-minus">−</button><input type="number" value="1"
                      min="1"><button class="qty-plus">+</button></div>
                  <span class="remove-btn">🗑 Remove</span>
                </div>
              </div>
              <div style="text-align:right">
                <div style="font-weight:700;font-size:1.05rem">₹1,299</div>
                <div style="font-size:12px;color:var(--clr-light);text-decoration:line-through">₹2,499</div>
              </div>
            </div>
            <div class="cart-item">
              <div class="cart-item-img" style="background:linear-gradient(135deg,#d8e8d0,#b8d4b0)">🎒</div>
              <div>
                <div class="cart-item-name">Canvas Backpack</div>
                <div class="cart-item-meta">Color: Olive Green</div>
                <div class="cart-item-actions">
                  <div class="qty-control"><button class="qty-minus">−</button><input type="number" value="1"
                      min="1"><button class="qty-plus">+</button></div>
                  <span class="remove-btn">🗑 Remove</span>
                </div>
              </div>
              <div style="text-align:right">
                <div style="font-weight:700;font-size:1.05rem">₹899</div>
              </div>
            </div>
            <div class="cart-item">
              <div class="cart-item-img" style="background:linear-gradient(135deg,#e8e8c8,#d4d498)">🌿</div>
              <div>
                <div class="cart-item-name">Natural Skincare Kit</div>
                <div class="cart-item-meta">Pack of 5</div>
                <div class="cart-item-actions">
                  <div class="qty-control"><button class="qty-minus">−</button><input type="number" value="2"
                      min="1"><button class="qty-plus">+</button></div>
                  <span class="remove-btn">🗑 Remove</span>
                </div>
              </div>
              <div style="text-align:right">
                <div style="font-weight:700;font-size:1.05rem">₹1,498</div>
              </div>
            </div>
            <div
              style="padding:20px 24px;display:flex;justify-content:space-between;align-items:center;border-top:1px solid var(--clr-border)">
              <a href="products.php" class="btn btn-ghost">← Continue Shopping</a>
              <button class="btn btn-outline" style="font-size:13px">Update Cart</button>
            </div>
          </div>

          <!-- Order Summary -->
          <div class="order-summary">
            <h3>Order Summary</h3>
            <div class="summary-line"><span>Subtotal (3 items)</span><span>₹3,696</span></div>
            <div class="summary-line"><span>Shipping</span><span style="color:var(--clr-success)">Free</span></div>
            <div class="summary-line"><span>Discount</span><span style="color:var(--clr-accent)">− ₹200</span></div>
            <div class="summary-line"><span>Tax (GST 18%)</span><span>₹575</span></div>
            <div class="summary-total"><span>Total</span><span>₹4,071</span></div>
            <div class="coupon-row">
              <input type="text" class="form-control" placeholder="Coupon code">
              <button class="btn btn-outline btn-sm">Apply</button>
            </div>
            <a href="checkout.php" class="btn btn-primary"
              style="width:100%;justify-content:center;margin-top:8px">Proceed to Checkout →</a>
            <div
              style="display:flex;align-items:center;gap:8px;justify-content:center;margin-top:16px;font-size:12px;color:var(--clr-light)">
              🔒 Secure & Encrypted Checkout</div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/main.js"></script>
</body>

<?php

require_once('include/footer.php');

?>

</html>
