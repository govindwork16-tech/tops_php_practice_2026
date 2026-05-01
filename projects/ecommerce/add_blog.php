<?php

require_once 'admin/functions.php';
require_once 'include/header.php';

if (isset($_POST['add_post'])) {
  $title = mysqli_escape_string($connection, $_POST["post_title"]);
  $description = mysqli_escape_string($connection, $_POST["description"]);;
  $date_and_time = date('D d/m/y');
  $post_category = mysqli_escape_string($connection, $_POST['category']);
  $add_post = add_posts($title, $description, $date_and_time, $post_category);
  if ($add_post) {
    echo "<script>alert('Post Added Successfully'); window.location = 'blogs.php';</script>";
  } else {
    echo "<script>alert('Something Went Wrong'); window.location = 'blogs.php';</script>";
  }
}

?>

<div class="section">
  <div class="container">

    <div class="card" style="max-width:700px;margin:auto;padding:36px;">

      <!-- Heading -->
      <div style="margin-bottom:28px;">
        <h2 style="margin-bottom:6px;">Create New Post</h2>
        <p style="color:var(--clr-mid);font-size:14px;">Share your thoughts with your audience</p>
      </div>

      <!-- FORM -->
      <form method="post">

        <!-- Title -->
        <div class="form-group">
          <label>Post Title</label>
          <input type="text" name="post_title" class="form-control" placeholder="Enter post title">
        </div>

        <!-- Category -->
        <div class="form-group">
          <label>Category</label>
          <select name="category" class="form-control">
            <option value="">Select Category</option>
            <option value="Shopping Tips">Shopping Tips</option>
            <option value="Tech">Tech</option>
            <option value="Lifestyle">Lifestyle</option>
            <option value="Deals">Deals</option>
          </select>
        </div>

        <!-- Description -->
        <div class="form-group">
          <label>Description</label>
          <textarea name="description" class="form-control" rows="5" placeholder="Write your post here..."></textarea>
        </div>

        <!-- Buttons -->
        <div style="display:flex;gap:12px;margin-top:24px;">

          <button type="submit" name="add_post" class="btn btn-primary" style="flex:1;justify-content:center;">
            Publish Post
          </button>

          <a href="blogs.php" class="btn btn-outline" style="flex:1;justify-content:center;text-align:center;">
            Cancel
          </a>

        </div>

      </form>

    </div>

  </div>
</div>