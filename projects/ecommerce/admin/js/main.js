/* =============================================================
   SHOPNOVA ADMIN — MAIN JS (minimal jQuery)
   ============================================================= */

$(function () {

  /* ---- Sidebar toggle (mobile) ---- */
  $(document).on('click', '.header-toggle', function () {
    $('.sidebar').toggleClass('open');
  });

  /* ---- Active nav item ---- */
  var path = window.location.pathname.split('/').pop();
  $('.nav-item').each(function () {
    var href = $(this).attr('href');
    if (href && href === path) {
      $(this).addClass('active');
    }
  });

  /* ---- Select all checkbox ---- */
  $(document).on('change', '#select-all', function () {
    $('.row-check').prop('checked', this.checked);
  });
  $(document).on('change', '.row-check', function () {
    var all = $('.row-check').length;
    var chkd = $('.row-check:checked').length;
    $('#select-all').prop('indeterminate', chkd > 0 && chkd < all);
    $('#select-all').prop('checked', chkd === all);
  });

  /* ---- Toggle switch label ---- */
  $(document).on('change', '.toggle-input', function () {
    var $lbl = $(this).closest('.toggle').find('.toggle-label');
    $lbl.text(this.checked ? 'Active' : 'Inactive');
  });

  /* ---- Confirm delete ---- */
  $(document).on('click', '.btn-delete-confirm', function (e) {
    if (!confirm('Are you sure you want to delete this item?')) {
      e.preventDefault();
    }
  });

  /* ---- Image preview upload ---- */
  $(document).on('change', '.file-input', function () {
    var $grid = $(this).siblings('.img-preview-grid');
    if ($grid.length === 0) $grid = $(this).closest('.upload-zone').siblings('.img-preview-grid');
    var files = this.files;
    $grid.empty();
    for (var i = 0; i < Math.min(files.length, 6); i++) {
      var url = URL.createObjectURL(files[i]);
      $grid.append(
        '<div class="img-preview-item">' +
        '<img src="' + url + '" style="width:100%;height:100%;object-fit:cover;border-radius:6px">' +
        '<span class="img-preview-remove">×</span>' +
        '</div>'
      );
    }
  });
  $(document).on('click', '.img-preview-remove', function () {
    $(this).closest('.img-preview-item').remove();
  });

  /* ---- Click upload zone opens file input ---- */
  $(document).on('click', '.upload-zone', function () {
    $(this).find('input[type=file]').trigger('click');
  });

  /* ---- Simple toast ---- */
  window.showToast = function (msg, type) {
    type = type || 'success';
    var $t = $('<div class="toast toast-' + type + '">' + msg + '</div>');
    $('body').append($t);
    setTimeout(function () { $t.addClass('show'); }, 10);
    setTimeout(function () { $t.removeClass('show'); setTimeout(function () { $t.remove(); }, 300); }, 3000);
  };

  /* ---- Tabs ---- */
  $(document).on('click', '.tab-btn', function () {
    var target = $(this).data('tab');
    $(this).closest('.tabs-wrapper').find('.tab-btn').removeClass('active');
    $(this).addClass('active');
    $(this).closest('.tabs-wrapper').find('.tab-pane').removeClass('active');
    $('#' + target).addClass('active');
  });

  /* ---- Sidebar sub-menu ---- */
  $(document).on('click', '.nav-item[data-toggle]', function () {
    var $sub = $($(this).data('toggle'));
    $sub.slideToggle(180);
    $(this).toggleClass('expanded');
  });

  /* ---- Admin Dropdown ----*/

  /* ---- Header user dropdown ---- */
  $(document).on('click', '.hdr-user', function (e) {
    e.stopPropagation();
    $('.hdr-dropdown').toggle();
  });

  $(document).on('click', function () {
    $('.hdr-dropdown').hide();
  });

  /* ---- Sidebar user dropdown ---- */
  $(document).on('click', '.sidebar-user', function (e) {
    e.stopPropagation();
    $(this).toggleClass('open');
    $(this).find('.sidebar-dropdown').slideToggle(150);
  });

  $(document).on('click', function () {
    $('.sidebar-user').removeClass('open');
    $('.sidebar-dropdown').slideUp(150);
  });

});
