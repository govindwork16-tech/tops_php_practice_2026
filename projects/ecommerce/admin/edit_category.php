<?php


require_once('functions.php');
if (isset($_POST['update_category'])) {
  $category_id = $_GET['edit'];
  $category_name = $_POST['category_name'];
  $update_category = update_category($category_id, $category_name);
  if ($update_category) {
    header('location: add_category.php');
  }else {
    echo "<script>alert('Something Went wrong');</script>";
  }
}
require_once('include/header.php');
require_once('include/sidebar.php');

if (isset($_GET['edit'])) {
  $category_id = $_GET['edit'];
  $category = edit_view($category_id);
}


?>



<body>
  <div class="admin-shell">
    <!-- MAIN -->
    <div class="admin-main">

      <!-- HEADER -->

      <!-- PAGE CONTENT -->
      <div class="page-content">

        <!-- Page Title -->
        <div class="page-header">
          <div class="page-header-left">
            <h1>Add Category</h1>
            <p>Create a new category for products.</p>
          </div>
        </div>

        <!-- FORM -->
        <form method="post" enctype="multipart/form-data">
          <div class="add-edit-layout">

            <!-- LEFT SIDE -->
            <div class="card">
              <div class="card-header">
                <div>
                  <div class="card-title">Category Information</div>
                  <div class="card-subtitle">Fill the details below</div>
                </div>
              </div>

              <div class="card-body">

                <div class="form-group">
                  <label class="form-label">Category Name <span class="req">*</span></label>
                  <input type="text" value="<?php echo $category['category_name'] ?>" name="category_name" class="form-control" placeholder="Enter category name" required>
                </div>

              </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="add-edit-sidebar">

              <!-- Image Upload -->

              <!-- Save Buttons -->
              <div class="card">
                <div class="card-body">
                  <button type="submit" name="update_category" class="btn btn-primary" style="width:100%">Save Category</button>
                  <a href="managecategory.php" class="btn btn-secondary mt-8" style="width:100%">Cancel</a>
                </div>
              </div>

            </div>

          </div>
        </form>

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>