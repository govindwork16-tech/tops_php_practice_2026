<?php

require_once('include/config.php');
require_once('include/header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShopNova – FAQ</title>
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
        <h1>Frequently Asked Questions</h1>
        <p>Find answers to the most common questions</p>
      </div>
    </div>
    <section class="section">
      <div class="container" style="max-width:800px">
        <div class="faq-cats">
          <button class="faq-cat-btn active">All</button>
          <button class="faq-cat-btn">Orders</button>
          <button class="faq-cat-btn">Shipping</button>
          <button class="faq-cat-btn">Returns</button>
          <button class="faq-cat-btn">Payments</button>
          <button class="faq-cat-btn">Account</button>
        </div>
        <div class="accordion-item">
          <div class="accordion-head">How do I track my order? <span class="accordion-icon">+</span></div>
          <div class="accordion-body">Once your order is dispatched, you'll receive an SMS and email with a tracking
            link. You can also visit <a href="orders.php" style="color:var(--clr-accent)">My Orders</a> in your account
            to track in real-time.</div>
        </div>
        <div class="accordion-item">
          <div class="accordion-head">What is the return policy? <span class="accordion-icon">+</span></div>
          <div class="accordion-body">We offer a 7-day hassle-free return policy on most products. Items must be unused,
            in original packaging. Initiate returns from your account dashboard and we'll arrange a pickup.</div>
        </div>
        <div class="accordion-item">
          <div class="accordion-head">When will I receive my refund? <span class="accordion-icon">+</span></div>
          <div class="accordion-body">Refunds are processed within 5–7 business days after we receive the returned item.
            The amount will be credited to your original payment method.</div>
        </div>
        <div class="accordion-item">
          <div class="accordion-head">Do you offer Cash on Delivery? <span class="accordion-icon">+</span></div>
          <div class="accordion-body">Yes! COD is available on orders up to ₹10,000. A nominal COD fee of ₹50 is
            charged. COD is available across 20,000+ pin codes in India.</div>
        </div>
        <div class="accordion-item">
          <div class="accordion-head">How long does delivery take? <span class="accordion-icon">+</span></div>
          <div class="accordion-body">Standard delivery takes 3–7 business days. Express delivery (1–2 days) is
            available in metro cities. You can choose your preferred delivery option at checkout.</div>
        </div>
        <div class="accordion-item">
          <div class="accordion-head">Are the products genuine? <span class="accordion-icon">+</span></div>
          <div class="accordion-body">Absolutely. We source directly from authorized distributors and brand partners.
            Every product comes with a manufacturer warranty where applicable.</div>
        </div>
        <div class="accordion-item">
          <div class="accordion-head">Can I change or cancel my order? <span class="accordion-icon">+</span></div>
          <div class="accordion-body">Orders can be cancelled or modified within 2 hours of placement. After dispatch,
            cancellation is not possible — you can initiate a return after delivery.</div>
        </div>
        <div class="accordion-item">
          <div class="accordion-head">How do I contact customer support? <span class="accordion-icon">+</span></div>
          <div class="accordion-body">Our support team is available Mon–Sat, 9am–7pm. Reach us via <a
              href="contact.php" style="color:var(--clr-accent)">Contact form</a>, email at hello@shopnova.in, or call
            +91 98765 43210.</div>
        </div>
        <div
          style="background:var(--clr-accent-light);border-radius:var(--radius-md);padding:32px;text-align:center;margin-top:48px">
          <h3 style="margin-bottom:8px">Still have questions?</h3>
          <p style="color:var(--clr-mid);margin-bottom:20px">Our team is ready to help you out</p>
          <a href="contact.php" class="btn btn-primary">Contact Support</a>
        </div>
      </div>
    </section>
  </main>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/main.js"></script>

  <script>
    $('.faq-cat-btn').on('click', function () { $('.faq-cat-btn').removeClass('active'); $(this).addClass('active'); });
  </script>
</body>

<?php

require_once('include/footer.php');

?>

</html>