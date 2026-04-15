<?php

require_once('include/config.php');
require_once('include/header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShopNova – Checkout</title>
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
        <!-- Steps -->
        <div class="step-indicator">
          <div class="step done">
            <div class="step-num">✓</div>
            <div class="step-label">Cart</div>
          </div>
          <div class="step-line done"></div>
          <div class="step active">
            <div class="step-num">2</div>
            <div class="step-label">Shipping</div>
          </div>
          <div class="step-line"></div>
          <div class="step pending">
            <div class="step-num">3</div>
            <div class="step-label">Payment</div>
          </div>
          <div class="step-line"></div>
          <div class="step pending">
            <div class="step-num">4</div>
            <div class="step-label">Confirm</div>
          </div>
        </div>

        <div class="checkout-layout">
          <!-- Left: Forms -->
          <div>
            <!-- Contact -->
            <div class="section-box">
              <h4>Contact Information</h4>
              <div class="grid-2" style="gap:16px">
                <div class="form-group" style="margin:0"><label>First Name</label><input type="text"
                    class="form-control" placeholder="Rohan"></div>
                <div class="form-group" style="margin:0"><label>Last Name</label><input type="text" class="form-control"
                    placeholder="Patel"></div>
              </div>
              <div style="height:16px"></div>
              <div class="form-group"><label>Email</label><input type="email" class="form-control"
                  placeholder="rohan@email.com"></div>
              <div class="form-group" style="margin:0"><label>Phone</label><input type="tel" class="form-control"
                  placeholder="+91 98765 43210"></div>
            </div>

            <!-- Shipping Address -->
            <div class="section-box">
              <h4>Shipping Address</h4>
              <div class="form-group"><label>Address Line 1</label><input type="text" class="form-control"
                  placeholder="House/Flat No., Street"></div>
              <div class="form-group"><label>Address Line 2 (Optional)</label><input type="text" class="form-control"
                  placeholder="Area, Landmark"></div>
              <div class="grid-2" style="gap:16px">
                <div class="form-group" style="margin:0"><label>City</label><input type="text" class="form-control"
                    placeholder="Rajkot"></div>
                <div class="form-group" style="margin:0"><label>State</label><select class="form-control">
                    <option>Gujarat</option>
                    <option>Maharashtra</option>
                    <option>Delhi</option>
                  </select></div>
              </div>
              <div style="height:16px"></div>
              <div class="grid-2" style="gap:16px">
                <div class="form-group" style="margin:0"><label>PIN Code</label><input type="text" class="form-control"
                    placeholder="360001"></div>
                <div class="form-group" style="margin:0"><label>Country</label><select class="form-control">
                    <option>India</option>
                  </select></div>
              </div>
            </div>

            <!-- Payment -->
            <div class="section-box">
              <h4>Payment Method</h4>
              <label class="payment-option selected"><input type="radio" name="payment" checked> <span>💳</span>
                <div><strong>Credit / Debit Card</strong><br><span style="font-size:12px;color:var(--clr-mid)">Visa,
                    Mastercard, RuPay</span></div>
              </label>
              <label class="payment-option"><input type="radio" name="payment"> <span>📱</span>
                <div><strong>UPI</strong><br><span style="font-size:12px;color:var(--clr-mid)">GPay, PhonePe,
                    Paytm</span></div>
              </label>
              <label class="payment-option"><input type="radio" name="payment"> <span>🏦</span>
                <div><strong>Net Banking</strong></div>
              </label>
              <label class="payment-option"><input type="radio" name="payment"> <span>💵</span>
                <div><strong>Cash on Delivery</strong><br><span style="font-size:12px;color:var(--clr-mid)">+ ₹50 COD
                    fee</span></div>
              </label>
              <div style="margin-top:16px">
                <div class="form-group"><label>Card Number</label><input type="text" class="form-control"
                    placeholder="1234 5678 9012 3456"></div>
                <div class="grid-2" style="gap:16px">
                  <div class="form-group" style="margin:0"><label>Expiry</label><input type="text" class="form-control"
                      placeholder="MM/YY"></div>
                  <div class="form-group" style="margin:0"><label>CVV</label><input type="text" class="form-control"
                      placeholder="•••"></div>
                </div>
              </div>
            </div>
            <button class="btn btn-primary" style="width:100%;justify-content:center;padding:16px">🔒 Place Order —
              ₹4,071</button>
          </div>

          <!-- Right: Order Summary -->
          <div>
            <div class="order-summary"
              style="position:sticky;top:96px;background:#fff;border:1px solid var(--clr-border);border-radius:var(--radius-md);padding:28px">
              <h3
                style="font-size:1.1rem;margin-bottom:24px;padding-bottom:16px;border-bottom:1px solid var(--clr-border)">
                Order Summary</h3>
              <div class="order-mini-item">
                <div class="order-mini-img">📱</div>
                <div class="order-mini-info">
                  <div class="order-mini-name">Wireless Earbuds Pro</div>
                  <div class="order-mini-qty">Qty: 1 · Black</div>
                </div>
                <div style="font-weight:700">₹1,299</div>
              </div>
              <div class="order-mini-item">
                <div class="order-mini-img" style="background:linear-gradient(135deg,#d8e8d0,#b8d4b0)">🎒</div>
                <div class="order-mini-info">
                  <div class="order-mini-name">Canvas Backpack</div>
                  <div class="order-mini-qty">Qty: 1 · Olive</div>
                </div>
                <div style="font-weight:700">₹899</div>
              </div>
              <div class="order-mini-item">
                <div class="order-mini-img" style="background:linear-gradient(135deg,#e8e8c8,#d4d498)">🌿</div>
                <div class="order-mini-info">
                  <div class="order-mini-name">Skincare Kit</div>
                  <div class="order-mini-qty">Qty: 2</div>
                </div>
                <div style="font-weight:700">₹1,498</div>
              </div>
              <div style="margin-top:20px">
                <div
                  style="display:flex;justify-content:space-between;font-size:14px;color:var(--clr-mid);margin-bottom:10px">
                  <span>Subtotal</span><span>₹3,696</span></div>
                <div
                  style="display:flex;justify-content:space-between;font-size:14px;color:var(--clr-mid);margin-bottom:10px">
                  <span>Shipping</span><span style="color:var(--clr-success)">Free</span></div>
                <div
                  style="display:flex;justify-content:space-between;font-size:14px;color:var(--clr-mid);margin-bottom:10px">
                  <span>Discount</span><span style="color:var(--clr-accent)">−₹200</span></div>
                <div
                  style="display:flex;justify-content:space-between;font-size:14px;color:var(--clr-mid);margin-bottom:16px">
                  <span>GST (18%)</span><span>₹575</span></div>
                <div
                  style="display:flex;justify-content:space-between;font-size:1.1rem;font-weight:700;color:var(--clr-dark);padding-top:16px;border-top:2px solid var(--clr-border)">
                  <span>Total</span><span>₹4,071</span></div>
              </div>
            </div>
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