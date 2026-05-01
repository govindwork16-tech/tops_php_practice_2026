<?php


require_once('functions.php');
if (isset($_POST['save_category'])) {
  $category_name = $_POST['category_name'];
  $add_category = add_category($category_name);
  
  if ($add_category) {
    header('location: add_category.php');
  }else {
    echo "<script>alert('Something Went Wrong'); window.location = 'add_category.php';</script>";
  }
}

if (isset($_GET['delete'])) {
  $delete = $_GET['delete'];
  $delete_category = del_cat($delete);
}
require_once('include/header.php');
require_once('include/sidebar.php');


?>

<style>
  .table {
  width: 100%;
  border-collapse: collapse;
}

.table th,
.table td {
  padding: 12px;
  border-bottom: 1px solid #eee;
  text-align: left;
}

.table th {
  background: #f8f9fa;
  font-weight: 600;
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
                  <input type="text" name="category_name" class="form-control" placeholder="Enter category name" required>
                </div>

              </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="add-edit-sidebar">

              <!-- Image Upload -->

              <!-- Save Buttons -->
              <div class="card">
                <div class="card-body">
                  <button type="submit" name="save_category" class="btn btn-primary" style="width:100%">Save Category</button>
                  <a href="managecategory.php" class="btn btn-secondary mt-8" style="width:100%">Cancel</a>
                </div>
              </div>

            </div>

          </div>
        </form>

        <!-- CATEGORY TABLE -->
        <div class="card mt-16">
          <div class="card-header">
            <div>
              <div class="card-title">Category List</div>
              <div class="card-subtitle">All added categories will appear here</div>
            </div>
          </div>

          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Category Name</th>
                  <th style="text-align:right;">Action</th>
                </tr>
              </thead>

              <tbody>
                <!-- Sample Row -->
                <?php
                $category = show_category();
                foreach ($category as $value) {
                ?>
                  <tr>
                    <td><?php echo $value['category_id']; ?></td>
                    <td><?php echo $value['category_name']; ?></td>
                    <td style="text-align:right;">
                    <a href="edit_category.php?edit=<?php echo $value['category_id']; ?>" class="btn btn-sm btn-edit">Edit</a>
                    <a href="add_category.php?delete=<?php echo $value['category_id']; ?>" onclick="return confirm('Are you sure you want to delete your account? This cannot be undone.')" class="btn btn-sm btn-delete">Delete</a>
                  </td>
                  </tr>
                <?php
                }
                ?>

              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>