<?php

require_once('include/config.php');
require_once('include/header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShopNova – Products</title>
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
        <h1>All Products</h1>
        <p>Discover our handpicked collection of premium products</p>
      </div>
    </div>

    <section class="section">
      <div class="container">
        <div class="breadcrumb">
          <a href="index.php">Home</a><span>›</span><span style="color:var(--clr-dark)">Products</span>
        </div>
        <div class="shop-layout">
          <!-- Sidebar Filters -->
          <aside class="sidebar">
            <div class="filter-box">
              <h4>Categories</h4>
              <label class="filter-item"><input type="checkbox" checked> Electronics <span
                  style="margin-left:auto;color:var(--clr-light);font-size:12px">(42)</span></label>
              <label class="filter-item"><input type="checkbox"> Fashion <span
                  style="margin-left:auto;color:var(--clr-light);font-size:12px">(78)</span></label>
              <label class="filter-item"><input type="checkbox"> Home &amp; Living <span
                  style="margin-left:auto;color:var(--clr-light);font-size:12px">(33)</span></label>
              <label class="filter-item"><input type="checkbox"> Beauty <span
                  style="margin-left:auto;color:var(--clr-light);font-size:12px">(25)</span></label>
              <label class="filter-item"><input type="checkbox"> Books <span
                  style="margin-left:auto;color:var(--clr-light);font-size:12px">(61)</span></label>
              <label class="filter-item"><input type="checkbox"> Sports <span
                  style="margin-left:auto;color:var(--clr-light);font-size:12px">(19)</span></label>
            </div>
            <div class="filter-box">
              <h4>Price Range</h4>
              <div style="display:flex;justify-content:space-between;font-size:13px;margin-bottom:12px">
                <span>₹0</span><span class="range-val">₹5000</span></div>
              <input type="range" class="range-slider price-range" min="0" max="10000" value="5000">
            </div>
            <div class="filter-box">
              <h4>Rating</h4>
              <label class="filter-item"><input type="checkbox"> <span style="color:#f5a623">★★★★★</span></label>
              <label class="filter-item"><input type="checkbox"> <span style="color:#f5a623">★★★★</span>☆</label>
              <label class="filter-item"><input type="checkbox"> <span style="color:#f5a623">★★★</span>☆☆</label>
            </div>
            <div class="filter-box">
              <h4>Color</h4>
              <div style="display:flex;flex-wrap:wrap;gap:8px">
                <span class="color-swatch" style="background:#1a1612" title="Black"></span>
                <span class="color-swatch" style="background:#fff" title="White"></span>
                <span class="color-swatch" style="background:#c8502a" title="Red"></span>
                <span class="color-swatch" style="background:#3a7d5e" title="Green"></span>
                <span class="color-swatch" style="background:#3a5a8c" title="Blue"></span>
                <span class="color-swatch" style="background:#f5c842" title="Yellow"></span>
              </div>
            </div>
            <button class="btn btn-primary" style="width:100%">Apply Filters</button>
          </aside>

          <!-- Products Grid -->
          <div>
            <div class="shop-toolbar">
              <p class="results">Showing <strong>1–12</strong> of 258 products</p>
              <div class="sort-row">
                <select class="form-control" style="width:auto; padding:8px 36px 8px 12px; font-size:13px">
                  <option>Sort: Featured</option>
                  <option>Price: Low to High</option>
                  <option>Price: High to Low</option>
                  <option>Newest First</option>
                  <option>Best Rated</option>
                </select>
                <div class="view-toggle">
                  <button class="active" title="Grid">⊞</button>
                  <button title="List">☰</button>
                </div>
              </div>
            </div>
            <div class="grid-3">
              <!-- Product cards -->
              <div class="product-card">
                <div class="product-card__img">
                  <div
                    style="width:100%;height:100%;background:linear-gradient(135deg,#e8d8c8,#d0bfa8);display:flex;align-items:center;justify-content:center;font-size:3rem">
                    📱</div>
                  <div class="product-card__actions"><button class="product-card__btn btn-addcart">Add to
                      Cart</button><button class="product-card__wish">♡</button></div><span class="badge badge-accent"
                    style="position:absolute;top:12px;left:12px">-48%</span>
                </div>
                <div class="product-card__body">
                  <div class="product-card__cat">Electronics</div><a href="products-details.php"
                    class="product-card__name" style="display:block;color:inherit">Wireless Earbuds Pro</a>
                  <div class="stars">★★★★★</div>
                  <div class="product-card__price" style="margin-top:8px"><span class="price-current">₹1,299</span><span
                      class="price-old">₹2,499</span></div>
                </div>
              </div>

              <div class="product-card">
                <div class="product-card__img">
                  <div
                    style="width:100%;height:100%;background:linear-gradient(135deg,#d8e8d0,#b8d4b0);display:flex;align-items:center;justify-content:center;font-size:3rem">
                    🎒</div>
                  <div class="product-card__actions"><button class="product-card__btn btn-addcart">Add to
                      Cart</button><button class="product-card__wish">♡</button></div>
                </div>
                <div class="product-card__body">
                  <div class="product-card__cat">Fashion</div><a href="products-details.php" class="product-card__name"
                    style="display:block;color:inherit">Canvas Backpack</a>
                  <div class="stars">★★★★☆</div>
                  <div class="product-card__price" style="margin-top:8px"><span class="price-current">₹899</span><span
                      class="price-old">₹1,499</span></div>
                </div>
              </div>

              <div class="product-card">
                <div class="product-card__img">
                  <div
                    style="width:100%;height:100%;background:linear-gradient(135deg,#e8d8e8,#d0b0d8);display:flex;align-items:center;justify-content:center;font-size:3rem">
                    🕯️</div>
                  <div class="product-card__actions"><button class="product-card__btn btn-addcart">Add to
                      Cart</button><button class="product-card__wish">♡</button></div><span class="badge badge-success"
                    style="position:absolute;top:12px;left:12px">New</span>
                </div>
                <div class="product-card__body">
                  <div class="product-card__cat">Home &amp; Living</div><a href="products-details.php"
                    class="product-card__name" style="display:block;color:inherit">Aroma Candle Set</a>
                  <div class="stars">★★★★★</div>
                  <div class="product-card__price" style="margin-top:8px"><span class="price-current">₹549</span></div>
                </div>
              </div>

              <div class="product-card">
                <div class="product-card__img">
                  <div
                    style="width:100%;height:100%;background:linear-gradient(135deg,#e8e8c8,#d4d498);display:flex;align-items:center;justify-content:center;font-size:3rem">
                    🌿</div>
                  <div class="product-card__actions"><button class="product-card__btn btn-addcart">Add to
                      Cart</button><button class="product-card__wish">♡</button></div>
                </div>
                <div class="product-card__body">
                  <div class="product-card__cat">Beauty</div><a href="products-details.php" class="product-card__name"
                    style="display:block;color:inherit">Natural Skincare Kit</a>
                  <div class="stars">★★★★☆</div>
                  <div class="product-card__price" style="margin-top:8px"><span class="price-current">₹749</span><span
                      class="price-old">₹999</span></div>
                </div>
              </div>

              <div class="product-card">
                <div class="product-card__img">
                  <div
                    style="width:100%;height:100%;background:linear-gradient(135deg,#c8d8e8,#a0b8d0);display:flex;align-items:center;justify-content:center;font-size:3rem">
                    ⌚</div>
                  <div class="product-card__actions"><button class="product-card__btn btn-addcart">Add to
                      Cart</button><button class="product-card__wish">♡</button></div><span class="badge badge-accent"
                    style="position:absolute;top:12px;left:12px">Hot</span>
                </div>
                <div class="product-card__body">
                  <div class="product-card__cat">Electronics</div><a href="products-details.php"
                    class="product-card__name" style="display:block;color:inherit">Smart Watch Series X</a>
                  <div class="stars">★★★★★</div>
                  <div class="product-card__price" style="margin-top:8px"><span class="price-current">₹3,499</span><span
                      class="price-old">₹5,999</span></div>
                </div>
              </div>

              <div class="product-card">
                <div class="product-card__img">
                  <div
                    style="width:100%;height:100%;background:linear-gradient(135deg,#f0e0c8,#e0c8a0);display:flex;align-items:center;justify-content:center;font-size:3rem">
                    👟</div>
                  <div class="product-card__actions"><button class="product-card__btn btn-addcart">Add to
                      Cart</button><button class="product-card__wish">♡</button></div>
                </div>
                <div class="product-card__body">
                  <div class="product-card__cat">Fashion</div><a href="products-details.php" class="product-card__name"
                    style="display:block;color:inherit">Sport Runner Shoes</a>
                  <div class="stars">★★★★☆</div>
                  <div class="product-card__price" style="margin-top:8px"><span class="price-current">₹1,899</span><span
                      class="price-old">₹2,999</span></div>
                </div>
              </div>
            </div>
            <div class="pagination">
              <a href="#">‹</a>
              <span class="current">1</span>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#">›</a>
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