<?php

require_once 'admin/functions.php';
require_once('include/header.php');

?>

<style>
  .prod_img {
    object-fit: cover;
    object-position: top;
  }
</style>

<body>
  <main>

    <!-- ===== HERO ===== -->
    <section class="hero">
      <div class="container" style="display:flex; align-items:center; gap:64px; padding-top:60px; padding-bottom:60px">
        <div class="hero-content">
          <div class="hero-eyebrow">✦ New Collection 2025</div>
          <h1>Discover Products You'll <em style="color:var(--clr-accent); font-style:italic">Love</em></h1>
          <p>Premium quality, thoughtfully curated — everything you need, delivered fast across India.</p>
          <div class="hero-actions">
            <a href="products.php" class="btn btn-primary">Shop Now <svg width="16" height="16" fill="none"
                stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg></a>
            <a href="category.php" class="btn btn-outline">Browse Categories</a>
          </div>
          <div class="hero-stats">
            <div class="stat-item">
              <div class="num">12K+</div>
              <div class="lbl">Products</div>
            </div>
            <div class="stat-item">
              <div class="num">98%</div>
              <div class="lbl">Happy Customers</div>
            </div>
            <div class="stat-item">
              <div class="num">50+</div>
              <div class="lbl">Brands</div>
            </div>
          </div>
        </div>
        <div class="hero-img">
          <div class="hero-img-inner">
            🛍️
            <div class="hero-badge">
              <div class="icon">🔥</div>
              <div class="info"><strong>Flash Sale Live</strong>Up to 60% off today</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== CATEGORIES ===== -->
    <section class="section--sm" style="border-top:1px solid var(--clr-border)">
      <div class="container">
        <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:24px">
          <h3>Shop by Category</h3>
          <a href="category.php" class="btn btn-ghost">View All →</a>
        </div>
        <div class="cats-strip">
          <div class="cat-chip active"><span class="emoji">🛒</span> All Products</div>
          <?php
          $category = show_category();

          foreach ($category as $value) {
          ?>
            <div class="cat-chip"><span class="emoji">🛒</span> <a href="products.php?category_id=<?php echo $value['category_id']; ?>"><?php echo $value['category_name']; ?></a></div>
          <?php
          }
          ?>

        </div>
      </div>
    </section>

    <!-- ===== FEATURED PRODUCTS ===== -->
    <section class="section">
      <div class="container">
        <div class="section-header" style="display:flex; align-items:flex-end; justify-content:space-between">
          <div>
            <div class="eyebrow">Handpicked</div>
            <h2>Our Products</h2>
          </div>
          <a href="products.php" class="btn btn-outline">See All Products</a>
        </div>
        <div class="grid-4">
          <!-- Product Card x4 -->
          <?php
          $products = show_products();

          foreach ($products as $value) {
          ?>
            <div class="product-card">
              <div class="product-card__img">
                <div
                  style="width:100%;height:100%;background:linear-gradient(135deg,#e8d8c8,#d0bfa8);display:flex;align-items:center;justify-content:center;font-size:3.5rem;"><img class="prod_img" src="admin/<?php echo $value['product_image']; ?>" alt=""></div>
                <div class="product-card__actions">
                  <?php
                  $qty = $value['qty'];
                  if ($qty > 0) {
                  ?>
                    <button class="product-card__btn btn-addcart">Add to Cart</button>
                    <button class="product-card__wish">♡</button>
                  <?php
                  } else {
                  ?>
                    <button class="product-card__btn  btn-out-of-stock">Out Of Stock</button>
                    <button class="product-card__wish">♡</button>
                  <?php
                  }
                  ?>
                </div>
                <div style="position:absolute;top:12px;left:12px">
                  <?php
                  $qty = $value['qty'];
                  if ($qty > 0) {
                  ?>
                    <span class="badge badge-accent">Sale</span>
                  <?php
                  } else {
                  ?>
                    <span class="badge badge-danger">Out Of Stock</span>
                  <?php
                  }
                  ?>
                </div>
              </div>
              <div class="product-card__body">
                <div class="product-card__cat"><?php echo $value['category_name'] ?></div>
                <div class="product-card__name"><?php echo $value['product_name'] ?></div>
                <div class="stars">★★★★★</div>
                <div class="product-card__price" style="margin-top:8px">
                  <span class="price-current"><?php echo number_format($value['new_price']); ?></span>
                  <span class="price-old"><del><?php echo number_format($value['old_price']); ?></del></span>
                  <span class="price-save">
                    <?php
                    $old_price = $value['old_price'];
                    $new_price = $value['new_price'];

                    echo round((($old_price - $new_price) / $old_price) * 100) . "%";
                    ?>
                  </span>
                </div>
                <a class="view_product btn btn-primary" style="width: 100%; margin-top: 10px;" href="products-details.php?product_id=<?php echo $value['product_id']; ?>">View Product</a>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>

    <!-- ===== PROMO BANNER ===== -->
    <section class="section--sm">
      <div class="container">
        <div class="promo-banner">
          <div style="position:relative;z-index:1">
            <div class="eyebrow" style="color:var(--clr-accent)">Limited Time</div>
            <h2>Mega Sale — Up to 60% Off</h2>
            <p>Don't miss our biggest sale of the year. Thousands of products at unbeatable prices.</p>
            <a href="products.php" class="btn btn-primary">Shop the Sale</a>
          </div>
          <div style="font-size:8rem; position:relative; z-index:1">🎉</div>
        </div>
      </div>
    </section>

    <!-- ===== FEATURES ===== -->
    <section class="section" style="background:var(--clr-surface)">
      <div class="container">
        <div class="grid-4">
          <div class="feature-box">
            <div class="ico">🚚</div>
            <h4>Free Delivery</h4>
            <p>On orders above ₹999 across India</p>
          </div>
          <div class="feature-box">
            <div class="ico">↩️</div>
            <h4>Easy Returns</h4>
            <p>7-day hassle-free return policy</p>
          </div>
          <div class="feature-box">
            <div class="ico">🔒</div>
            <h4>Secure Payment</h4>
            <p>UPI, Cards, NetBanking — 100% safe</p>
          </div>
          <div class="feature-box">
            <div class="ico">🎁</div>
            <h4>Gift Wrapping</h4>
            <p>Available on all orders at ₹49</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== TESTIMONIALS ===== -->
    <section class="section">
      <div class="container">
        <div class="section-header" style="text-align:center; margin-bottom:48px">
          <div class="eyebrow">Reviews</div>
          <h2>What Our Customers Say</h2>
        </div>
        <div class="grid-3">
          <div class="testimonial">
            <p class="quote">Absolutely love the quality! Packaging was perfect and delivery was super fast. Will
              definitely order again.</p>
            <div class="testi-author">
              <div class="testi-avatar">👩</div>
              <div class="testi-info">
                <div class="name">Priya Sharma</div>
                <div class="loc">Ahmedabad</div>
              </div>
              <div style="margin-left:auto">
                <div class="stars">★★★★★</div>
              </div>
            </div>
          </div>
          <div class="testimonial">
            <p class="quote">Best shopping experience. The return process was so smooth, and customer support was very
              responsive.</p>
            <div class="testi-author">
              <div class="testi-avatar">👨</div>
              <div class="testi-info">
                <div class="name">Rohan Mehta</div>
                <div class="loc">Surat</div>
              </div>
              <div style="margin-left:auto">
                <div class="stars">★★★★★</div>
              </div>
            </div>
          </div>
          <div class="testimonial">
            <p class="quote">Great prices, genuine products. I've been shopping here for 6 months and every order has
              been perfect.</p>
            <div class="testi-author">
              <div class="testi-avatar">👩</div>
              <div class="testi-info">
                <div class="name">Anjali Patel</div>
                <div class="loc">Rajkot</div>
              </div>
              <div style="margin-left:auto">
                <div class="stars">★★★★☆</div>
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