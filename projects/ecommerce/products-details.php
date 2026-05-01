
<?php 
            
ob_start();

?>

<style>
  .form-group textarea {
    min-height: 150px;
  }
</style>

<?php

require_once 'admin/functions.php';
require_once('include/header.php');


if (isset($_GET['product_id'])) {
  $product_id = ($_GET['product_id']);
  $product_details = product_details($product_id);
  if (!$product_details) {
    echo "<h2 style='text-align:center;margin-top:50px;'>Product not found</h2>";
    exit;
  }
}

?>


<body>

  <main>
    <section class="section">
      <div class="container">
        <div class="breadcrumb"><a href="index.php">Home</a><span>›</span><a
            href="products.php">Products</a><span>›</span><span style="color:var(--clr-dark)"><?php echo $product_details[0]['product_name']; ?></span></div>
        <div class="product-detail">
          <!-- Gallery -->
          <div>
            <div class="gallery-main">
              <img class="main-product-img" src="admin/<?php echo $product_details[0]['product_image']; ?>" alt="" style="width:100%">
            </div>
          </div>
          <!-- Info -->
          <div class="product-info">
            <?php

            $qty = $product_details[0]['qty'];

            if ($qty > 0) {
            ?>
              <span class="badge badge-success" style="margin-bottom:12px">In Stock</span>
            <?php
            } else {
            ?>
              <span class="badge badge-danger" style="margin-bottom:12px">Out Of Stok</span>
            <?php
            }
            ?>
            <h1><?php echo $product_details[0]['product_name']; ?></h1>
            <div class="product-meta">
              <?php

              $product_id = $_GET['product_id'];
              $avg_count = review_average($product_id);
              $count_review = review_count($product_id);

              if ($count_review['total_count'] > 0) {
              ?>
                <div class="stars">
                  <?php
                  
                  $rating_avg = $avg_count['avg_ratings'];
                  for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $rating_avg) {
                      echo "★";
                    } else {
                      echo "☆";
                    }
                  }

                  ?>
                </div>

                <?php
                echo round($avg_count['avg_ratings']);
                ?>
                <a href="products-details.php?product_id=<?php echo $_GET['product_id']; ?>#review_section">(Total Reviews <?php echo $count_review['total_count']; ?>)</a>
              <?php
              } else {
                echo "No Reviews";
              }

              ?>
            </div>
            <p style="color:var(--clr-mid);line-height:1.8"><?php echo $product_details[0]['description']; ?></p>
            <div class="product-price">
              <span class="current">₹<?php echo number_format($product_details[0]['new_price']); ?></span>
              <span class="old">₹<?php echo number_format($product_details[0]['old_price']); ?></span>
              <span class="save-badge">
                <?php
                $old_price = $product_details[0]['old_price'];
                $new_price = $product_details[0]['new_price'];

                echo "Save " . round((($old_price - $new_price) / $old_price) * 100) . "%";
                ?></span>
            </div>
            <div style="margin-top:16px">
              <p
                style="font-size:13px;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:var(--clr-mid);margin-bottom:10px">
                Quantity</p>
              <div class="qty-control">
                <button class="qty-minus">−</button>
                <input type="number" value="1" min="1" max="5">
                <button class="qty-plus">+</button>
              </div>
            </div>

            <div class="add-actions">
              <?php

              $qty = $product_details[0]['qty'];

              if ($qty > 0) {
              ?>
                <button class="btn btn-primary" style="flex:1"
                  onclick="window.showToast && window.showToast('Added to cart!', 'success')">🛒 Add to Cart</button>
                <a href="checkout.php" class="btn btn-outline">Buy Now</a>
                <button class="icon-btn"
                  style="border:1.5px solid var(--clr-border);border-radius:var(--radius-sm);width:46px;height:46px"
                  title="Wishlist">♡</button>
              <?php
              } else {
              ?>
                <button class="btn btn-out-of-stock" style="flex:1; text-align: center;">🛒 Out Of Stock</button>
                <a href="#" onclick="alert('We Will send you email when its in stock'); window.location = 'products.php'" class="btn btn-outline">Notify Me</a>
                <button class="icon-btn"
                  style="border:1.5px solid var(--clr-border);border-radius:var(--radius-sm);width:46px;height:46px"
                  title="Wishlist">♡</button>
              <?php
              }
              ?>
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
            <button class="tab-btn" data-tab="tab-reviews">Reviews

              <?php

              $product_id = $_GET['product_id'];
              $count_review = review_count($product_id);
              echo "(" . $count_review['total_count'] . ")";

              ?>
            </button>
          </div>
          <div id="tab-desc" class="tab-pane active">
            <p style="color:var(--clr-mid);max-width:700px;line-height:1.8"><?php echo $product_details[0]['description']; ?></p>
          </div>
          <div id="tab-reviews" class="tab-pane">
            <h3 style="margin-bottom:32px">Please Write A Review</h3>
            <?php

            if (isset($_POST['add_review'])) {
              $user_name = $_POST['user_name'];
              $user_review = $_POST['user_review'];
              $ratings = $_POST['ratings'];
              $product_id = $_GET['product_id'];
              $review = add_review($user_name, $user_review, $ratings, $product_id);
              if ($review) {
                header('location: products-details.php?product_id=' . $product_id);
              } else {
                echo "<script>alert('Something Went Wrong'); window.location = 'products-details.php';</script>";
              }
            }



            ?>
            <form method="post">
              <div class="form-group">
                <label>Your Name</label>
                <input name="user_name" required type="text" class="form-control" placeholder="Please Enter Your Name" required>
              </div>

              <div class="form-group">
                <label>Review</label>
                <textarea name="user_review" required type="text" class="form-control" placeholder="Please Enter Your Review" required></textarea>
              </div>

              <div class="form-group">
                <label for="ratings">Ratings</label>
                <select class="form-control" name="ratings" style="width:auto; padding:8px 36px 8px 12px; font-size:13px">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

              <button class="view_product btn btn-primary" type="submit" name="add_review">Submit Review</button>
            </form>

            <div id="review_section">
              <?php
              $review_msg = false;
              if (isset($_GET['product_id'])) {
                $product_id = $_GET['product_id'];
                $diplay_review = show_reviews($product_id);
                if ($diplay_review) {
                  foreach ($diplay_review as $value) {
              ?>
                    <div class="review-item">
                      <div style="margin-bottom:8px"><strong><?php echo $value['user_name'] ?></strong>
                        <div class="stars">
                          <?php

                          $ratings_stars = $value['ratings'];

                          for ($i = 1; $i <= 5; $i++) {
                            if ($i > $ratings_stars) {
                              echo "☆";
                            } else {
                              echo "★";
                            }
                          }

                          ?>
                        </div>
                      </div>
                      <p style="font-size:14px;color:var(--clr-mid)"><?php echo $value['user_review'] ?></p>
                    </div>
                  <?php
                  }
                } else {
                  ?>
                  <div class="no_review" style="text-align: center; background: #fff; margin-top: 20px; padding: 10px; border-radius: 10px; border:1.5px solid var(--clr-border); ">
                    <p>Be the first one to review</p>
                  </div>
              <?php
                }
              }
              ?>
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
</body>


<?php

require_once('include/footer.php');

?>

</html>

<?php 
            
            ob_end_flush();

            ?>
