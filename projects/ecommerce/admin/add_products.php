<?php
ob_start();
require_once('include/config.php');
require_once('include/header.php');
require_once('include/sidebar.php');

if (isset($_POST['add_product'])) {
  $product_name = $_POST['product_name'];
  $category_id = $_POST['category'];
  $old_price = $_POST['old_price'];
  $new_price = $_POST['new_price'];
  $qty = $_POST['qty'];
  $desc = mysqli_escape_string($connection, $_POST['desc']);
  $tmp_name = $_FILES["photo"]["tmp_name"];
  $product_image = "uploads/" . $_FILES["photo"]["name"];
  move_uploaded_file($tmp_name, $product_image);
  $prod_function = add_product($category_id, $product_name, $old_price, $new_price, $qty, $desc, $product_image);

  if ($prod_function) {
    header('location: add_products.php');
  } else {
    echo "<script>alert('Something Went Wrong');</script>";
  }
}

// Delete Product

if (isset($_GET['delete'])) {
  $product_id = $_GET['delete'];
  $product_delete = delete_product($product_id);
  if ($product_delete) {
    header('location: add_products.php');
  }else {
    echo "<script>alert('Something Went Wrong'); window.location = 'add_products.php';</script>";
  }
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
                  <input type="text" name="product_name" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Category</label>
                  <select name="category" class="form-control">
                    <option>Select Category</option>
                    <?php

                    $category = show_category();

                    foreach ($category as $value) {
                    ?>
                      <option value="<?php echo $value['category_id']; ?>"><?php echo $value['category_name'] ?></option>
                    <?php
                    }

                    ?>
                  </select>
                </div>

                <div class="form-group">
                  <label class="form-label">Price</label>
                  <input type="text" name="old_price" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Sale Price</label>
                  <input type="text" name="new_price" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Quantity</label>
                  <input type="text" name="qty" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Product Description</label>
                  <input type="text" name="desc" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Product Image</label>
                  <input type="file" name="photo" class="form-control">
                </div>

              </div>

            </div>
          </div>

          <!-- RIGHT SIDE -->
          <div class="add-edit-sidebar">
            <div class="card">
              <div class="card-body">
                <button type="submit" name="add_product" class="btn btn-primary" style="width:100%">Save Product</button>
                <a href="manageproducts.php" class="btn btn-secondary mt-8" style="width:100%">Cancel</a>
              </div>
            </div>

          </div>

        </div>

        <div class="card mt-16">
          <div class="card-header">
            <div>
              <div class="card-title">Product List</div>
              <div class="card-subtitle">All added products</div>
            </div>
          </div>

          <div class="card-body">

            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Product Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Sale Price</th>
                  <th>Quantity</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <?php

                $products = show_products();

                foreach ($products as $value) {
                ?>
                  <tr>
                    <td><?php echo $value['product_id']; ?></td>
                    <td><?php echo $value['product_name']; ?></td>
                    <td><?php echo $value['category_name']; ?></td>
                    <td><?php echo number_format($value['old_price']); ?></td>
                    <td><?php echo number_format($value['new_price']); ?></td>
                    <td><?php echo $value['qty']; ?></td>
                    <td><?php echo $value['description']; ?></td>
                    <td><img class="prod_img" src="<?php echo $value['product_image']; ?>" alt=""></td>
                    <td>
                    <a href="edit_product.php?edit=<?php echo $value['product_id']; ?>" class="btn btn-sm btn-edit">Edit</a>
                    <a href="add_products.php?delete=<?php echo $value['product_id']; ?>" onclick="return confirm('Are you sure you want to delete your account? This cannot be undone.')" class="btn btn-sm btn-delete">Delete</a>
                  </td>
                  </tr>
                <?php
                }

                ?>

              </tbody>
            </table>

          </div>
        </div>
      </form>



    </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>'
  <script src="js/main.js"></script>
</body>
<?php 

ob_end_flush();

?>