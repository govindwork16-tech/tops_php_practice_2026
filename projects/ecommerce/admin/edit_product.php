<?php
require_once('include/config.php');
require_once('include/header.php');

if (isset($_POST['update_product'])) {
  $product_id = $_GET['edit'];
  $product_name = $_POST['product_name'];
  $category_id = $_POST['category'];
  $old_price = $_POST['old_price'];
  $new_price = $_POST['new_price'];
  $qty = $_POST['qty'];
  $desc = $_POST['desc'];

  // ✅ KEEP OLD IMAGE FIRST
  $product_view = edit_product($product_id);
  $product_image = $product_view[0]['product_image'];

  // ✅ ONLY UPDATE IF NEW IMAGE UPLOADED
  if (!empty($_FILES["photo"]["name"])) {
    $tmp_name = $_FILES["photo"]["tmp_name"];
    $product_image = "uploads/" . $_FILES["photo"]["name"];
    move_uploaded_file($tmp_name, $product_image);
  }

  $updated_product = update_product($product_id, $product_name, $category_id, $old_price, $new_price, $qty, $desc, $product_image);

  if ($updated_product) {
    header('location: add_products.php');
  } else {
    echo "<script>alert('Something went wrong'); window.location = 'add_products.php';</script>";
  }
}

require_once('include/sidebar.php');

if (isset($_GET['edit'])) {
  $product_id = $_GET['edit'];
  $product_view = edit_product($product_id);
}
?>

<style>
  .table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
  }

  .table thead {
    background: #f8fafc;
  }

  .table th {
    text-align: left;
    padding: 14px;
    font-weight: 600;
    color: #374151;
    border-bottom: 1px solid #e5e7eb;
  }

  .table td {
    padding: 14px;
    border-bottom: 1px solid #f1f5f9;
    color: #4b5563;
  }

  .table tbody tr:hover {
    background: #f9fafb;
  }

  .table img {
    border-radius: 6px;
  }

  .prod_img {
    max-width: 100px;
    min-height: 100px;
    object-fit: cover;
  }

  .btn-sm {
    padding: 6px 10px;
    font-size: 12px;
    border-radius: 4px;
    text-decoration: none;
  }

  .btn-edit {
    background: #ffc107;
    color: #000;
    margin-right: 5px;
  }

  .btn-delete {
    background: #dc3545;
    color: #fff;
  }
</style>

<body>

  <div class="admin-main">

    <div class="page-content">

      <div class="page-header">
        <div class="page-header-left">
          <h1>Add Product</h1>
          <p>Add new product to your store.</p>
        </div>
      </div>

      <form method="post" enctype="multipart/form-data">
        <div class="add-edit-layout">

          <!-- LEFT SIDE -->
          <div class="card">
            <div class="card-header">
              <div>
                <div class="card-title">Product Information</div>
                <div class="card-subtitle">Fill product details</div>
              </div>
            </div>

            <div class="card-body">

              <div class="form-grid-2">

                <div class="form-group">
                  <label class="form-label">Product Name</label>
                  <input type="text" value="<?php echo $product_view[0]['product_name']; ?>" name="product_name" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Category</label>
                  <select name="category" class="form-control">
                    <?php
                    $category = show_category();
                    foreach ($category as $value) {
                      if ($value['category_id'] == $product_view[0]['category_id']) {
                    ?>
                        <option value="<?php echo $value['category_id']; ?>" selected><?php echo $value['category_name'] ?></option>
                      <?php
                      } else {
                      ?>
                        <option value="<?php echo $value['category_id']; ?>"><?php echo $value['category_name'] ?></option>
                    <?php
                      }
                    }
                    ?>
                  </select>
                </div>

                <div class="form-group">
                  <label class="form-label">Price</label>
                  <input type="text" value="<?php echo $product_view[0]['old_price']; ?>" name="old_price" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Sale Price</label>
                  <input type="text" value="<?php echo $product_view[0]['new_price']; ?>" name="new_price" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Quantity</label>
                  <input type="text" value="<?php echo $product_view[0]['qty']; ?>" name="qty" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Product Description</label>
                  <input type="text" value="<?php echo $product_view[0]['description']; ?>" name="desc" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Product Image</label>

                  <!-- ✅ SHOW CURRENT IMAGE -->
                  <img src="<?php echo $product_view[0]['product_image']; ?>" class="prod_img">

                  <!-- ✅ FILE INPUT -->
                  <input type="file" name="photo" class="form-control">
                </div>

              </div>

            </div>
          </div>

          <!-- RIGHT SIDE -->
          <div class="add-edit-sidebar">
            <div class="card">
              <div class="card-body">
                <button type="submit" name="update_product" class="btn btn-primary" style="width:100%">Save Product</button>
                <a href="manageproducts.php" class="btn btn-secondary mt-8" style="width:100%">Cancel</a>
              </div>
            </div>
          </div>

        </div>
      </form>

    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>'
  <script src="js/main.js"></script>
</body>