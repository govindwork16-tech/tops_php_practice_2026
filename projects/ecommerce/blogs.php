<?php

require_once 'admin/functions.php';
require_once('include/header.php');

?>

<body>
  <main>
    <div class="page-hero">
      <div class="container">
        <h1>ShopNova Blog</h1>
        <p>Tips, guides and shopping inspiration</p>
      </div>
    </div>
    <section class="section">
      <div class="container">
        <div style="display:flex;gap:12px;flex-wrap:wrap;margin-bottom:40px">
          <button class="btn btn-primary btn-sm">All</button>
          <button class="btn btn-outline btn-sm">Shopping Tips</button>
          <button class="btn btn-outline btn-sm">Tech</button>
          <button class="btn btn-outline btn-sm">Lifestyle</button>
          <button class="btn btn-outline btn-sm">Deals</button>
        </div>
        <a href="add_blog.php" class="btn btn-primary" style="padding:10px 18px;font-size:14px; margin-bottom: 20px;">
          ➕ Add Blog
        </a>
        <!-- Featured -->
        <div class="section-header">
          <div class="eyebrow">Featured</div>
          <h2>Latest Posts</h2>
        </div>
        <!-- All Posts -->
        <div class="grid-3">

          <?php

          $fetch_post_arr = display_post();

          foreach ($fetch_post_arr as $values) {
          ?>
            <div class="blog-card">
              <div class="blog-body">
                <div class="blog-meta"><?php echo $values['date_and_time'] ?></div>
                <div class="blog-meta"><?php echo $values['post_category'] ?></div>
                <h3><?php echo $values['title'] ?></h3>
                <p class="description"><?php echo $values['description'] ?></p>
                <a href="blog_content.php?post_id=<?php echo $values['post_id']; ?>"
                  class="btn btn-ghost" style="margin-top:12px;padding:0">Read More →</a>
              </div>
            </div>
          <?php
          }

          ?>


        </div>
        <div class="pagination" style="margin-top:48px"><a href="#">‹</a><span class="current">1</span><a
            href="#">2</a><a href="#">3</a><a href="#">›</a></div>
      </div>
    </section>
  </main>
</body>

<?php

require_once('include/footer.php');

?>

</html>