<?php

require_once('include/config.php');
require_once('include/header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShopNova – Contact</title>
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
        <h1>Get In Touch</h1>
        <p>We'd love to hear from you</p>
      </div>
    </div>
    <section class="section">
      <div class="container">
        <div class="contact-layout">
          <div>
            <div class="section-header">
              <div class="eyebrow">Contact</div>
              <h2>We're Here to Help</h2>
              <p>Have a question or feedback? Reach out and our team will respond within 24 hours.</p>
            </div>
            <div class="contact-info-item">
              <div class="contact-icon">📍</div>
              <div class="contact-icon-info">
                <h4>Our Office</h4>
                <p>123, Rajkot Industrial Area<br>Rajkot, Gujarat – 360001</p>
              </div>
            </div>
            <div class="contact-info-item">
              <div class="contact-icon">📞</div>
              <div class="contact-icon-info">
                <h4>Phone</h4>
                <p>+91 98765 43210<br>Mon–Sat, 9am–7pm</p>
              </div>
            </div>
            <div class="contact-info-item">
              <div class="contact-icon">✉️</div>
              <div class="contact-icon-info">
                <h4>Email</h4>
                <p>hello@shopnova.in<br>support@shopnova.in</p>
              </div>
            </div>
            <div
              style="margin-top:40px;background:var(--clr-bg);border-radius:var(--radius-md);height:220px;display:flex;align-items:center;justify-content:center;border:1px solid var(--clr-border);font-size:2rem">
              🗺️ Map Placeholder</div>
          </div>
          <div class="card" style="padding:40px">
            <h3 style="margin-bottom:28px">Send a Message</h3>
            <div class="grid-2" style="gap:16px">
              <div class="form-group" style="margin:0"><label>First Name</label><input type="text" class="form-control"
                  placeholder="Rohan"></div>
              <div class="form-group" style="margin:0"><label>Last Name</label><input type="text" class="form-control"
                  placeholder="Patel"></div>
            </div>
            <div style="height:20px"></div>
            <div class="form-group"><label>Email</label><input type="email" class="form-control"
                placeholder="you@email.com"></div>
            <div class="form-group"><label>Phone (Optional)</label><input type="tel" class="form-control"
                placeholder="+91 98765 43210"></div>
            <div class="form-group"><label>Subject</label><select class="form-control">
                <option>Order Issue</option>
                <option>Return / Refund</option>
                <option>Product Query</option>
                <option>Partnership</option>
                <option>Other</option>
              </select></div>
            <div class="form-group"><label>Message</label><textarea class="form-control" rows="5"
                placeholder="Tell us how we can help..."></textarea></div>
            <button class="btn btn-primary" style="width:100%;justify-content:center">Send Message 📤</button>
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