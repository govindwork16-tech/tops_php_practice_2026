
<?php

require_once('include/config.php');
require_once('include/header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShopNova – Product Detail</title>
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
        <div class="breadcrumb"><a href="index.php">Home</a><span>›</span><a
            href="products.php">Products</a><span>›</span><span style="color:var(--clr-dark)">Wireless Earbuds
            Pro</span></div>
        <div class="product-detail">
          <!-- Gallery -->
          <div>
            <div class="gallery-main"><img class="main-product-img" src="" alt="" style="display:none">📱</div>
            <div class="gallery-thumbs">
              <div class="thumb active thumb-img" data-src="">📱</div>
              <div class="thumb thumb-img" data-src="">🎧</div>
              <div class="thumb thumb-img" data-src="">📦</div>
              <div class="thumb thumb-img" data-src="">🔋</div>
            </div>
          </div>
          <!-- Info -->
          <div class="product-info">
            <span class="badge badge-success" style="margin-bottom:12px">In Stock</span>
            <h1>Wireless Earbuds Pro</h1>
            <div class="product-meta">
              <div class="stars">★★★★★</div>
              <span>4.8 (248 reviews)</span>
              <span>|</span>
              <span>SKU: WEP-2025</span>
            </div>
            <p style="color:var(--clr-mid);line-height:1.8">Experience crystal-clear audio with active noise
              cancellation, 36-hour battery life, and a premium ergonomic design that fits perfectly.</p>
            <div class="product-price">
              <span class="current">₹1,299</span>
              <span class="old">₹2,499</span>
              <span class="save-badge">Save 48%</span>
            </div>
            <div>
              <p
                style="font-size:13px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:var(--clr-mid);margin-bottom:10px">
                Color</p>
              <div class="variant-options">
                <button class="variant-btn active">Midnight Black</button>
                <button class="variant-btn">Pearl White</button>
                <button class="variant-btn">Navy Blue</button>
              </div>
            </div>
            <div style="margin-top:16px">
              <p
                style="font-size:13px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:var(--clr-mid);margin-bottom:10px">
                Quantity</p>
              <div class="qty-control">
                <button class="qty-minus">−</button>
                <input type="number" value="1" min="1">
                <button class="qty-plus">+</button>
              </div>
            </div>
            <div class="add-actions">
              <button class="btn btn-primary" style="flex:1"
                onclick="window.showToast && window.showToast('Added to cart!', 'success')">🛒 Add to Cart</button>
              <a href="checkout.php" class="btn btn-outline">Buy Now</a>
              <button class="icon-btn"
                style="border:1.5px solid var(--clr-border);border-radius:var(--radius-sm);width:46px;height:46px"
                title="Wishlist">♡</button>
            </div>
            <div class="product-features">
              <div class="feat">✅ Free delivery on this order</div>
              <div class="feat">↩️ 7-day easy return</div>
              <div class="feat">🔒 Secure checkout</div>
              <div class="feat">🎁 Gift wrap available</div>
            </div>
          </div>
        </div>

        <!-- Tabs -->
        <div style="margin-top:64px">
          <div class="tab-bar">
            <button class="tab-btn active" data-tab="tab-desc">Description</button>
            <button class="tab-btn" data-tab="tab-specs">Specifications</button>
            <button class="tab-btn" data-tab="tab-reviews">Reviews (248)</button>
          </div>
          <div id="tab-desc" class="tab-pane active">
            <p style="color:var(--clr-mid);max-width:700px;line-height:1.8">The Wireless Earbuds Pro deliver an
              unmatched audio experience. Featuring Hybrid Active Noise Cancellation, you can focus on what matters. The
              custom 10mm drivers produce rich bass and detailed highs. With touch controls, voice assistant support,
              and IPX5 water resistance, these earbuds are built for every lifestyle.</p>
          </div>
          <div id="tab-specs" class="tab-pane">
            <table class="data-table" style="max-width:600px">
              <tr>
                <td style="font-weight:600">Driver Size</td>
                <td>10mm Dynamic</td>
              </tr>
              <tr>
                <td style="font-weight:600">Battery Life</td>
                <td>36 Hours (with case)</td>
              </tr>
              <tr>
                <td style="font-weight:600">ANC</td>
                <td>Hybrid Active Noise Cancellation</td>
              </tr>
              <tr>
                <td style="font-weight:600">Water Resistance</td>
                <td>IPX5</td>
              </tr>
              <tr>
                <td style="font-weight:600">Connectivity</td>
                <td>Bluetooth 5.3</td>
              </tr>
              <tr>
                <td style="font-weight:600">Charging</td>
                <td>USB-C, 15min = 3hr play</td>
              </tr>
            </table>
          </div>
          <div id="tab-reviews" class="tab-pane">
            <div class="review-item">
              <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px"><strong>Priya
                  S.</strong>
                <div class="stars">★★★★★</div>
              </div>
              <p style="font-size:14px;color:var(--clr-mid)">Absolutely love these earbuds! The sound quality is amazing
                and ANC works great on the metro.</p>
            </div>
            <div class="review-item">
              <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px"><strong>Rohan
                  M.</strong>
                <div class="stars">★★★★★</div>
              </div>
              <p style="font-size:14px;color:var(--clr-mid)">Great value for money. Battery lasts all day and the build
                quality feels premium.</p>
            </div>
          </div>
        </div>

        <!-- Related Products -->
        <div style="margin-top:64px">
          <h3 style="margin-bottom:32px">You Might Also Like</h3>
          <div class="grid-4">
            <div class="product-card">
              <div class="product-card__img">
                <div
                  style="width:100%;height:100%;background:linear-gradient(135deg,#e8e8c8,#d4d498);display:flex;align-items:center;justify-content:center;font-size:2.5rem">
                  ⌚</div>
                <div class="product-card__actions"><button class="product-card__btn btn-addcart">Add to
                    Cart</button><button class="product-card__wish">♡</button></div>
              </div>
              <div class="product-card__body">
                <div class="product-card__cat">Electronics</div>
                <div class="product-card__name">Smart Watch X</div>
                <div class="product-card__price"><span class="price-current">₹3,499</span></div>
              </div>
            </div>
            <div class="product-card">
              <div class="product-card__img">
                <div
                  style="width:100%;height:100%;background:linear-gradient(135deg,#d8e8d0,#b8d4b0);display:flex;align-items:center;justify-content:center;font-size:2.5rem">
                  🔊</div>
                <div class="product-card__actions"><button class="product-card__btn btn-addcart">Add to
                    Cart</button><button class="product-card__wish">♡</button></div>
              </div>
              <div class="product-card__body">
                <div class="product-card__cat">Electronics</div>
                <div class="product-card__name">Portable Speaker</div>
                <div class="product-card__price"><span class="price-current">₹1,899</span></div>
              </div>
            </div>
            <div class="product-card">
              <div class="product-card__img">
                <div
                  style="width:100%;height:100%;background:linear-gradient(135deg,#e8d8c8,#d0bfa8);display:flex;align-items:center;justify-content:center;font-size:2.5rem">
                  💻</div>
                <div class="product-card__actions"><button class="product-card__btn btn-addcart">Add to
                    Cart</button><button class="product-card__wish">♡</button></div>
              </div>
              <div class="product-card__body">
                <div class="product-card__cat">Electronics</div>
                <div class="product-card__name">Laptop Stand</div>
                <div class="product-card__price"><span class="price-current">₹699</span></div>
              </div>
            </div>
            <div class="product-card">
              <div class="product-card__img">
                <div
                  style="width:100%;height:100%;background:linear-gradient(135deg,#e8d8e8,#d0b0d8);display:flex;align-items:center;justify-content:center;font-size:2.5rem">
                  🖱️</div>
                <div class="product-card__actions"><button class="product-card__btn btn-addcart">Add to
                    Cart</button><button class="product-card__wish">♡</button></div>
              </div>
              <div class="product-card__body">
                <div class="product-card__cat">Electronics</div>
                <div class="product-card__name">Wireless Mouse</div>
                <div class="product-card__price"><span class="price-current">₹449</span></div>
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