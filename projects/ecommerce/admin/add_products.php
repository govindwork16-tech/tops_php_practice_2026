<?php
require_once('include/config.php');
require_once('include/header.php');
require_once('include/sidebar.php');
?>

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
                                <label class="form-label">SKU</label>
                                <input type="text" name="sku" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Category</label>
                                <select name="category" class="form-control">
                                    <option>Select Category</option>
                                    <option>Electronics</option>
                                    <option>Clothing</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Sub Category</label>
                                <select name="subcategory" class="form-control">
                                    <option>Select Sub Category</option>
                                    <option>Mobiles</option>
                                    <option>T-Shirts</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Sale Price</label>
                                <input type="text" name="sale_price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Quantity</label>
                                <input type="text" name="qty" class="form-control">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <label class="toggle">
                                <input type="checkbox" class="toggle-input" checked>
                                <div class="toggle-track">
                                    <div class="toggle-thumb"></div>
                                </div>
                                <span class="toggle-label">Active</span>
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Featured Product</label>
                            <label class="toggle">
                                <input type="checkbox" class="toggle-input">
                                <div class="toggle-track">
                                    <div class="toggle-thumb"></div>
                                </div>
                                <span class="toggle-label">No</span>
                            </label>
                        </div>

                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="add-edit-sidebar">

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Product Images</div>
                        </div>
                        <div class="card-body">

                            <div class="upload-zone">
                                <input type="file" name="product_images[]" class="file-input" multiple hidden>
                                <div class="upload-zone-icon">
                                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                        <polyline points="17 8 12 3 7 8" />
                                        <line x1="12" y1="3" x2="12" y2="15" />
                                    </svg>
                                </div>
                                <div class="upload-zone-title">Click to upload images</div>
                                <div class="upload-zone-hint">PNG, JPG up to 2MB</div>
                            </div>

                            <div class="img-preview-grid"></div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <button type="submit" name="save_product" class="btn btn-primary" style="width:100%">Save Product</button>
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