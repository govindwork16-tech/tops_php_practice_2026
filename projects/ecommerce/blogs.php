<?php

require_once('include/config.php');
require_once('include/header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShopNova – Blog</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=DM+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .blog-card {
      border-radius: var(--radius-md);
      overflow: hidden;
      background: #fff;
      border: 1px solid var(--clr-border);
      transition: var(--transition);
    }

    .blog-card:hover {
      box-shadow: var(--shadow-md);
      transform: translateY(-3px);
    }

    .blog-img {
      aspect-ratio: 16/9;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 4rem;
    }

    .blog-body {
      padding: 24px;
    }

    .blog-meta {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 12px;
      color: var(--clr-light);
      margin-bottom: 10px;
    }

    .blog-body h3 {
      font-size: 1.1rem;
      margin-bottom: 8px;
      transition: var(--transition);
    }

    .blog-card:hover h3 {
      color: var(--clr-accent);
    }

    .blog-body p {
      font-size: 14px;
      color: var(--clr-mid);
    }

    .blog-featured {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 32px;
      margin-bottom: 48px;
    }

    .blog-featured .blog-img {
      aspect-ratio: 3/2;
    }
  </style>
</head>

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
        <!-- Featured -->
        <div class="section-header">
          <div class="eyebrow">Featured</div>
          <h2>Latest Posts</h2>
        </div>
        <div class="blog-featured">
          <div class="blog-card">
            <div class="blog-img" style="background:linear-gradient(135deg,#e8d8c8,#c8a888)">🛍️</div>
            <div class="blog-body">
              <div class="blog-meta"><span class="badge badge-accent">Featured</span><span>Dec 15, 2025</span><span>5
                  min read</span></div>
              <h3>Top 10 Shopping Tips to Save Money in 2025</h3>
              <p>Discover smart strategies to get the best deals and maximize your savings on every purchase.</p><a
                href="content.php" class="btn btn-ghost" style="margin-top:12px;padding:0">Read More →</a>
            </div>
          </div>
          <div class="blog-card">
            <div class="blog-img" style="background:linear-gradient(135deg,#d8e8d0,#a8c8a0)">📱</div>
            <div class="blog-body">
              <div class="blog-meta"><span class="badge badge-neutral">Tech</span><span>Dec 10, 2025</span><span>4 min
                  read</span></div>
              <h3>Best Gadgets Under ₹2000 This Year</h3>
              <p>From earbuds to smartwatches — the best budget tech picks of the year, tested and reviewed.</p><a
                href="content.php" class="btn btn-ghost" style="margin-top:12px;padding:0">Read More →</a>
            </div>
          </div>
        </div>
        <!-- All Posts -->
        <div class="grid-3">
          <div class="blog-card">
            <div class="blog-img" style="background:linear-gradient(135deg,#e8d8e8,#c8a8c8)">🌿</div>
            <div class="blog-body">
              <div class="blog-meta"><span>Dec 8, 2025</span><span>3 min</span></div>
              <h3>Best Natural Skincare Products for Indian Skin</h3>
              <p>Our experts pick the top clean beauty products available in India.</p><a href="content.php"
                class="btn btn-ghost" style="margin-top:12px;padding:0">Read More →</a>
            </div>
          </div>
          <div class="blog-card">
            <div class="blog-img" style="background:linear-gradient(135deg,#e8e8d0,#c8c8a8)">🏠</div>
            <div class="blog-body">
              <div class="blog-meta"><span>Dec 5, 2025</span><span>6 min</span></div>
              <h3>How to Decorate Your Home on a Budget</h3>
              <p>Transform your space without spending a fortune with these creative ideas.</p><a href="content.php"
                class="btn btn-ghost" style="margin-top:12px;padding:0">Read More →</a>
            </div>
          </div>
          <div class="blog-card">
            <div class="blog-img" style="background:linear-gradient(135deg,#d8d8e8,#b8b8c8)">💪</div>
            <div class="blog-body">
              <div class="blog-meta"><span>Dec 1, 2025</span><span>4 min</span></div>
              <h3>Best Sports Gear for Home Workouts</h3>
              <p>Stay fit at home with these must-have fitness products under ₹3000.</p><a href="content.php"
                class="btn btn-ghost" style="margin-top:12px;padding:0">Read More →</a>
            </div>
          </div>
        </div>
        <div class="pagination" style="margin-top:48px"><a href="#">‹</a><span class="current">1</span><a
            href="#">2</a><a href="#">3</a><a href="#">›</a></div>
      </div>
    </section>
  </main>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/main.js"></script>
</body>

<?php

require_once('include/footer.php');

?>

</html>
