<?php

require_once('include/config.php');
require_once('include/header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShopNova – Categories</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=DM+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <main>
    <div class="page-hero">
      <div class="container">
        <h1>All Categories</h1>
        <p>Browse everything we offer</p>
      </div>
    </div>
    <section class="section">
      <div class="container">
        <div class="section-header">
          <div class="eyebrow">Shop By</div>
          <h2>Main Categories</h2>
        </div>
        <div class="grid-3" style="margin-bottom:64px">
          <a href="products.php" class="cat-card">
            <div class="cat-bg" style="background:linear-gradient(135deg,#e8d8c8,#d0bfa8)">📱</div>
            <div class="cat-overlay"></div>
            <div class="cat-body">
              <h3>Electronics</h3><span>420+ products</span>
            </div>
          </a>
          <a href="products.php" class="cat-card">
            <div class="cat-bg" style="background:linear-gradient(135deg,#d8e0e8,#b0c0d0)">👗</div>
            <div class="cat-overlay"></div>
            <div class="cat-body">
              <h3>Fashion</h3><span>780+ products</span>
            </div>
          </a>
          <a href="products.php" class="cat-card">
            <div class="cat-bg" style="background:linear-gradient(135deg,#e8e8d0,#d0d0a8)">🏠</div>
            <div class="cat-overlay"></div>
            <div class="cat-body">
              <h3>Home & Living</h3><span>330+ products</span>
            </div>
          </a>
          <a href="products.php" class="cat-card">
            <div class="cat-bg" style="background:linear-gradient(135deg,#e8d0d8,#d0a8b8)">💄</div>
            <div class="cat-overlay"></div>
            <div class="cat-body">
              <h3>Beauty</h3><span>250+ products</span>
            </div>
          </a>
          <a href="products.php" class="cat-card">
            <div class="cat-bg" style="background:linear-gradient(135deg,#d0e8d8,#a8d0b8)">📚</div>
            <div class="cat-overlay"></div>
            <div class="cat-body">
              <h3>Books</h3><span>610+ products</span>
            </div>
          </a>
          <a href="products.php" class="cat-card">
            <div class="cat-bg" style="background:linear-gradient(135deg,#d8d0e8,#b8a8d0)">⚽</div>
            <div class="cat-overlay"></div>
            <div class="cat-body">
              <h3>Sports</h3><span>190+ products</span>
            </div>
          </a>
        </div>
        <div class="section-header">
          <div class="eyebrow">Explore More</div>
          <h2>Sub Categories</h2>
        </div>
        <div class="sub-cat-grid">
          <a href="products.php" class="sub-cat">
            <div class="emoji">📱</div>
            <p>Mobiles</p>
          </a>
          <a href="products.php" class="sub-cat">
            <div class="emoji">💻</div>
            <p>Laptops</p>
          </a>
          <a href="products.php" class="sub-cat">
            <div class="emoji">⌚</div>
            <p>Watches</p>
          </a>
          <a href="products.php" class="sub-cat">
            <div class="emoji">🎧</div>
            <p>Audio</p>
          </a>
          <a href="products.php" class="sub-cat">
            <div class="emoji">📷</div>
            <p>Cameras</p>
          </a>
          <a href="products.php" class="sub-cat">
            <div class="emoji">🖥️</div>
            <p>Monitors</p>
          </a>
          <a href="products.php" class="sub-cat">
            <div class="emoji">👟</div>
            <p>Shoes</p>
          </a>
          <a href="products.php" class="sub-cat">
            <div class="emoji">👕</div>
            <p>T-Shirts</p>
          </a>
          <a href="products.php" class="sub-cat">
            <div class="emoji">👜</div>
            <p>Bags</p>
          </a>
          <a href="products.php" class="sub-cat">
            <div class="emoji">🕶️</div>
            <p>Sunglasses</p>
          </a>
          <a href="products.php" class="sub-cat">
            <div class="emoji">🧴</div>
            <p>Skincare</p>
          </a>
          <a href="products.php" class="sub-cat">
            <div class="emoji">🪑</div>
            <p>Furniture</p>
          </a>
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