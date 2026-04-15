<?php

require_once('include/config.php');
require_once('include/header.php');
require_once('include/sidebar.php');

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
                  <input type="text" name="category_name" class="form-control" placeholder="Enter category name" required>
                </div>

                <div class="form-group">
                  <label class="form-label">Slug</label>
                  <input type="text" name="slug" class="form-control" placeholder="category-slug">
                  <div class="form-hint">URL friendly name (optional)</div>
                </div>

                <div class="form-group">
                  <label class="form-label">Description</label>
                  <textarea name="description" class="form-control" placeholder="Write description..."></textarea>
                </div>

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

            <!-- RIGHT SIDE -->
            <div class="add-edit-sidebar">

              <!-- Image Upload -->
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Category Image</div>
                </div>
                <div class="card-body">

                  <div class="upload-zone">
                    <input type="file" name="category_image" class="file-input" hidden>
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

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>