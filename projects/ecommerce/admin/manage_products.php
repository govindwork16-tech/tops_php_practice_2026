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
                <h1>Manage Products</h1>
                <p>View and manage store products.</p>
            </div>

            <div class="page-header-actions">
                <a href="addproducts.php" class="btn btn-primary">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                    Add Product
                </a>
            </div>
        </div>

        <!-- Toolbar -->
        <div class="card mb-20">
            <div class="toolbar">
                <div class="toolbar-search">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.35-4.35" />
                    </svg>
                    <input type="text" placeholder="Search product...">
                </div>

                <div class="toolbar-filter">
                    <select>
                        <option>All Categories</option>
                        <option>Electronics</option>
                        <option>Clothing</option>
                    </select>

                    <select>
                        <option>Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

                <div class="toolbar-spacer"></div>

                <div class="toolbar-right">
                    <button class="btn btn-danger btn-sm">Delete Selected</button>
                </div>
            </div>

            <!-- TABLE -->
            <div class="table-wrapper">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Status</th>
                            <th>Featured</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td><input type="checkbox" class="row-check"></td>

                            <td>
                                <div class="tbl-thumb">📱</div>
                            </td>

                            <td>
                                <div class="tbl-product">
                                    <div>
                                        <div class="tbl-product-name">iPhone 14</div>
                                        <div class="tbl-product-sku">SKU: IP14</div>
                                    </div>
                                </div>
                            </td>

                            <td>Electronics</td>
                            <td>₹80,000</td>
                            <td>25</td>

                            <td>
                                <label class="toggle">
                                    <input type="checkbox" class="toggle-input" checked>
                                    <div class="toggle-track">
                                        <div class="toggle-thumb"></div>
                                    </div>
                                    <span class="toggle-label">Active</span>
                                </label>
                            </td>

                            <td>
                                <label class="toggle">
                                    <input type="checkbox" class="toggle-input">
                                    <div class="toggle-track">
                                        <div class="toggle-thumb"></div>
                                    </div>
                                    <span class="toggle-label">No</span>
                                </label>
                            </td>

                            <td class="text-right">
                                <div class="tbl-actions">
                                    <a href="editproduct.php" class="btn-icon">✏️</a>
                                    <a href="#" class="btn-icon danger btn-delete-confirm">🗑</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" class="row-check"></td>
                            <td>
                                <div class="tbl-thumb">👕</div>
                            </td>
                            <td>
                                <div class="tbl-product">
                                    <div>
                                        <div class="tbl-product-name">Men T-Shirt</div>
                                        <div class="tbl-product-sku">SKU: TS01</div>
                                    </div>
                                </div>
                            </td>
                            <td>Clothing</td>
                            <td>₹999</td>
                            <td>100</td>

                            <td>
                                <label class="toggle">
                                    <input type="checkbox" class="toggle-input">
                                    <div class="toggle-track">
                                        <div class="toggle-thumb"></div>
                                    </div>
                                    <span class="toggle-label">Inactive</span>
                                </label>
                            </td>

                            <td>
                                <label class="toggle">
                                    <input type="checkbox" class="toggle-input" checked>
                                    <div class="toggle-track">
                                        <div class="toggle-thumb"></div>
                                    </div>
                                    <span class="toggle-label">Yes</span>
                                </label>
                            </td>

                            <td class="text-right">
                                <div class="tbl-actions">
                                    <a href="editproduct.php" class="btn-icon">✏️</a>
                                    <a href="#" class="btn-icon danger btn-delete-confirm">🗑</a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="card-footer">
                <div class="pagination-info">
                    Showing 1 to 10 of 50 entries
                </div>

                <div class="pagination">
                    <button class="page-btn">‹</button>
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn">›</button>
                </div>
            </div>

        </div>

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>'
<script src="js/main.js"></script>
</body>