<?php

require_once 'admin/functions.php';
require_once('include/header.php');


?>

<style>
  .view_product {
    display: block;
    width: 100%;
    text-align: center;
    background-color: #c8502a;
    color: #fff;
    margin-top: 20px;
  }

  .category_list {
    display: block;
    width: 100%;
    margin-bottom: 10px;
  }

  .category_list:last-child {
    margin-bottom: 0px;
  }

  .cat_message {
    text-align: center;
    width: 100%;
  }
</style>

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
          <form action="get">
            <aside class="sidebar">
              <div class="filter-box">
                <h4>Categories</h4>
                <a href="products.php" class="category_list">All Products</a>
                <?php
                $category = show_category();

                foreach ($category as $value) {
                ?>
                  <a href="products.php?category_id=<?php echo $value['category_id']; ?>" class="category_list"><?php echo $value['category_name']; ?></a>
                <?php
                }
                ?>
              </div>
              <div class="filter-box">
                <h4>Price Range</h4>
                <div style="display:flex;justify-content:space-between;font-size:13px;margin-bottom:12px">
                  <span>₹0</span><span class="range-val">₹5000</span>
                </div>
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
          </form>

          <!-- Products Grid -->
          <div>
            <div class="shop-toolbar">
              <?php
              if (isset($_GET['category_id'])) {
                $category_id = $_GET['category_id'];
                $sum = count_product($category_id);
                if ($sum['total_products'] > 1) {
                ?>
                <p class="results">Total <strong><?php echo $sum['total_products']; ?></strong> Products </p>
              <?php 
                }else {
                  ?>
                  <p class="results">Only <strong><?php echo $sum['total_products']; ?></strong> Product Available </p>
                  <?php
                }
              }else {
                $sum_count = count_all_product();
                if ($sum_count['total_products'] > 1) {
                  ?>
                  <p class="results">Total <strong><?php echo $sum_count['total_products']; ?></strong> Products </p>  
                  <?php
                }else {
                  ?>
                  <p class="results">Only <strong><?php echo $sum_count['total_products']; ?></strong> Product Available </p>
                  <?php
                }
                ?>
                
                <?php
              }

              ?>
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
              <?php
              $empty_msg = false;
              if (!isset($_GET['category_id'])) {
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
                      <a class="view_product btn btn-primary" href="products-details.php?product_id=<?php echo $value['product_id']; ?>">View Product</a>
                    </div>
                  </div>
                  <?php
                }
              } elseif (isset($_GET['category_id'])) {
                $category_id = $_GET['category_id'];
                $cat_product = show_category_products($category_id);
                if ($cat_product) {
                  foreach ($cat_product as $value) {
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
                        <a class="view_product btn btn-primary" href="products-details.php?product_id=<?php echo $value['product_id']; ?>">View Product</a>
                      </div>
                    </div>
              <?php
                  }
                } else {
                  $empty_msg = true;
                }
              }
              ?>
            </div>
            <?php


            if ($empty_msg) {
            ?>
              <div class="cat_message">
                <p>Sorry, There are no products with this category</p>
              </div>
            <?php
            }
            ?>
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
</body>

<?php

require_once('include/footer.php');

?>

</html>