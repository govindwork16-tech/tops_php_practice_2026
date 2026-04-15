<?php

require_once('include/config.php');
require_once('include/header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShopNova – About Us</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=DM+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <main>
    <div class="page-hero">
      <div class="container">
        <h1>About ShopNova</h1>
        <p>Our story, mission and the team behind it</p>
      </div>
    </div>
    <section class="section">
      <div class="container">
        <div class="about-hero">
          <div>
            <div class="eyebrow">Our Story</div>
            <h2>Born in Rajkot, Built for India</h2>
            <p style="color:var(--clr-mid);margin:16px 0;line-height:1.85">Founded in 2020, ShopNova started with a
              simple mission: make premium shopping accessible to every Indian household. From a small team of 5 in
              Rajkot, we've grown to serve over 500,000 customers across India.</p>
            <p style="color:var(--clr-mid);margin-bottom:28px;line-height:1.85">We believe great products shouldn't
              break the bank. Every item on our platform is carefully vetted for quality, authenticity, and value — so
              you shop with confidence.</p>
            <div style="display:flex;gap:40px">
              <div>
                <div style="font-family:var(--font-head);font-size:2rem;font-weight:700">500K+</div>
                <div style="font-size:13px;color:var(--clr-mid)">Happy Customers</div>
              </div>
              <div>
                <div style="font-family:var(--font-head);font-size:2rem;font-weight:700">12K+</div>
                <div style="font-size:13px;color:var(--clr-mid)">Products</div>
              </div>
              <div>
                <div style="font-family:var(--font-head);font-size:2rem;font-weight:700">50+</div>
                <div style="font-size:13px;color:var(--clr-mid)">Partner Brands</div>
              </div>
            </div>
          </div>
          <div class="about-visual">🏢</div>
        </div>
      </div>
    </section>
    <section class="section" style="background:#fff">
      <div class="container">
        <div class="section-header" style="text-align:center">
          <div class="eyebrow">What Drives Us</div>
          <h2>Our Values</h2>
        </div>
        <div class="values-grid">
          <div class="value-box">
            <div class="icon">🎯</div>
            <h4>Quality First</h4>
            <p>Every product is vetted before listing. We only sell what we'd buy ourselves.</p>
          </div>
          <div class="value-box">
            <div class="icon">🤝</div>
            <h4>Customer Trust</h4>
            <p>Transparent pricing, genuine reviews, and a support team that actually helps.</p>
          </div>
          <div class="value-box">
            <div class="icon">🌱</div>
            <h4>Sustainability</h4>
            <p>Eco-friendly packaging and a growing range of sustainable products.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="section-header" style="text-align:center">
          <div class="eyebrow">The People</div>
          <h2>Meet Our Team</h2>
        </div>
        <div class="grid-4">
          <div class="team-card">
            <div class="team-avatar">👨‍💼</div>
            <h4>Arjun Shah</h4><span>Founder & CEO</span>
          </div>
          <div class="team-card">
            <div class="team-avatar">👩‍💻</div>
            <h4>Priya Desai</h4><span>CTO</span>
          </div>
          <div class="team-card">
            <div class="team-avatar">👨‍🎨</div>
            <h4>Karan Mehta</h4><span>Head of Design</span>
          </div>
          <div class="team-card">
            <div class="team-avatar">👩‍📊</div>
            <h4>Anita Patel</h4><span>Head of Marketing</span>
          </div>
        </div>
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