/* =========================================
   ECOMMERCE TEMPLATE - MAIN JS (minimal)
   ========================================= */

$(function () {

  /* ---- Mobile Menu ---- */
  $(document).on('click', '.hamburger', function () {
    $('.mobile-nav').toggleClass('open');
    $(this).toggleClass('active');
  });
  $(document).on('click', '.mobile-nav__overlay', function () {
    $('.mobile-nav').removeClass('open');
    $('.hamburger').removeClass('active');
  });

  /* ---- Sticky Header shadow ---- */
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 10) {
      $('.site-header').addClass('scrolled');
    } else {
      $('.site-header').removeClass('scrolled');
    }
  });

  /* ---- Qty control ---- */
  $(document).on('click', '.qty-control .qty-minus', function () {
    var $inp = $(this).siblings('input');
    var val = parseInt($inp.val()) || 1;
    if (val > 1) $inp.val(val - 1);
  });
  $(document).on('click', '.qty-control .qty-plus', function () {
    var $inp = $(this).siblings('input');
    var val = parseInt($inp.val()) || 1;
    $inp.val(val + 1);
  });

  /* ---- Add to Cart (demo) ---- */
  $(document).on('click', '.btn-addcart', function () {
    var $btn = $(this);
    $btn.text('Added!').addClass('added');
    var count = parseInt($('.cart-count').text() || 0) + 1;
    $('.cart-count').text(count);
    setTimeout(function () { $btn.text('Add to Cart').removeClass('added'); }, 1500);
  });

  /* ---- Tabs ---- */
  $(document).on('click', '.tab-btn', function () {
    var target = $(this).data('tab');
    $('.tab-btn').removeClass('active');
    $(this).addClass('active');
    $('.tab-pane').removeClass('active');
    $('#' + target).addClass('active');
  });

  /* ---- Accordion / FAQ ---- */
  $(document).on('click', '.accordion-head', function () {
    var $item = $(this).closest('.accordion-item');
    var $body = $item.find('.accordion-body');

    if ($item.hasClass('open')) {
      $item.removeClass('open');
      $body.slideUp();
    } else {
      $('.accordion-item').removeClass('open');
      $('.accordion-body').slideUp();

      $item.addClass('open');
      $body.slideDown();
    }
  });

  /* ---- Image Gallery (product detail) ---- */
  $(document).on('click', '.thumb-img', function () {
    var src = $(this).data('src');
    $('.main-product-img').attr('src', src);
    $('.thumb-img').removeClass('active');
    $(this).addClass('active');
  });

  /* ---- Simple Toast ---- */
  window.showToast = function (msg, type) {
    type = type || 'success';
    var $t = $('<div class="toast toast-' + type + '">' + msg + '</div>');
    $('body').append($t);
    setTimeout(function () { $t.addClass('show'); }, 10);
    setTimeout(function () { $t.removeClass('show'); setTimeout(function () { $t.remove(); }, 300); }, 3000);
  };

  /* ---- Range slider label ---- */
  $(document).on('input', '.price-range', function () {
    $(this).siblings('.range-val').text('₹' + $(this).val());
  });

  /* ---- Checkout JS ---- */

  $('.payment-option').on('click', function () {
    $('.payment-option').removeClass('selected');
    $(this).addClass('selected');
  });

  /* ---- FAQ JS ---- */



});

/* ---- Login JS ---- */

function switchTab(tab, el) {
  document.querySelectorAll('.auth-tab').forEach(t => t.classList.remove('active'));
  el.classList.add('active');
  document.getElementById('form-login').style.display = tab === 'login' ? '' : 'none';
  document.getElementById('form-register').style.display = tab === 'register' ? '' : 'none';
}
