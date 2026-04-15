<?php
require_once('include/config.php');
require_once('include/header.php');
require_once('include/sidebar.php');
?>

<body>
<div class="admin-main">

  <!-- HEADER -->


  <!-- PAGE CONTENT -->

  <div class="page-content">

    <div class="page-header">
      <div class="page-header-left">
        <h1>Add Sub Category</h1>
        <p>Create sub category under a category.</p>
      </div>
    </div>

    <form method="post" enctype="multipart/form-data">
      <div class="add-edit-layout">

        <!-- LEFT -->
        <div class="card">
          <div class="card-header">
            <div>
              <div class="card-title">Sub Category Information</div>
              <div class="card-subtitle">Fill the details below</div>
            </div>
          </div>

          <div class="card-body">

            <!-- Parent Category -->
            <div class="form-group">
              <label class="form-label">Parent Category <span class="req">*</span></label>
              <select name="category_id" class="form-control" required>
                <option value="">Select Category</option>
                <option value="1">Electronics</option>
                <option value="2">Clothing</option>
                <option value="3">Shoes</option>
              </select>
            </div>

            <!-- Sub Category Name -->
            <div class="form-group">
              <label class="form-label">Sub Category Name <span class="req">*</span></label>
              <input type="text" name="subcategory_name" class="form-control" placeholder="Enter sub category name" required>
            </div>

            <!-- Slug -->
            <div class="form-group">
              <label class="form-label">Slug</label>
              <input type="text" name="slug" class="form-control" placeholder="subcategory-slug">
            </div>

            <!-- Description -->
            <div class="form-group">
              <label class="form-label">Description</label>
              <textarea name="description" class="form-control" placeholder="Write description..."></textarea>
            </div>

            <!-- Status -->
            <div class="form-group">
              <label class="form-label">Status</label>
              <label class="toggle">
                <input type="checkbox" name="status" class="toggle-input" checked>
                <div class="toggle-track">
                  <div class="toggle-thumb"></div>
                </div>
                <span class="toggle-label">Active</span>
              </label>
            </div>

          </div>
        </div>

        <!-- RIGHT -->
        <div class="add-edit-sidebar">

          <!-- Image Upload -->
          <div class="card">
            <div class="card-header">
              <div class="card-title">Sub Category Image</div>
            </div>
            <div class="card-body">

              <div class="upload-zone">
                <input type="file" name="subcategory_image" class="file-input" hidden>
                <div class="upload-zone-icon">
                  <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                    <polyline points="17 8 12 3 7 8" />
                    <line x1="12" y1="3" x2="12" y2="15" />
                  </svg>
                </div>
                <div class="upload-zone-title">Click to upload</div>
                <div class="upload-zone-hint">PNG, JPG up to 2MB</div>
              </div>

              <div class="img-preview-grid"></div>

            </div>
          </div>

          <!-- Save -->
          <div class="card">
            <div class="card-body">
              <button type="submit" name="save_subcategory" class="btn btn-primary" style="width:100%">Save Sub Category</button>
              <a href="managesubcategory.php" class="btn btn-secondary mt-8" style="width:100%">Cancel</a>
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