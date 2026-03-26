/* ==============================================
   ADMIN PANEL — main.js
   Minimal jQuery. No heavy plugins.
============================================== */

$(function () {

    /* ------ Sidebar toggle (hamburger) ------ */
    $('#sidebarToggle').on('click', function () {
        $('#sidebar').toggleClass('open');
        $('#overlay').toggleClass('show');
    });

    $('#overlay').on('click', function () {
        $('#sidebar').removeClass('open');
        $('#overlay').removeClass('show');
    });

    /* ------ Sidebar user dropdown ------ */
    $('#userToggle').on('click', function (e) {
        e.stopPropagation();
        $(this).toggleClass('open');
        $('#userDropdown').toggleClass('open');
        // close topbar dropdown
        $('#tbUser').removeClass('open');
        $('#tbDropdown').removeClass('open');
    });

    /* ------ Topbar user dropdown ------ */
    $('#tbUser').on('click', function (e) {
        e.stopPropagation();
        $(this).toggleClass('open');
        $('#tbDropdown').toggleClass('open');
        // close sidebar dropdown
        $('#userToggle').removeClass('open');
        $('#userDropdown').removeClass('open');
    });

    /* ------ Close on outside click ------ */
    $(document).on('click', function () {
        $('#userToggle').removeClass('open');
        $('#userDropdown').removeClass('open');
        $('#tbUser').removeClass('open');
        $('#tbDropdown').removeClass('open');
    });

    // Prevent dropdown from closing when clicking inside
    $('#userDropdown, #tbDropdown').on('click', function (e) {
        e.stopPropagation();
    });

    /* ------ Active nav from URL ------ */
    var current = window.location.pathname.split('/').pop();
    $('.nav-item').each(function () {
        var href = $(this).attr('href') || $(this).data('href') || '';
        if (href && href === current) {
            $(this).addClass('active');
        }
    });

    /* ------ Toggle switches (HTML checkbox version, no JS needed for state) ------ */
    // Nothing needed — pure CSS checkboxes handle state

    /* ------ Progress bars animate on load ------ */
    setTimeout(function () {
        $('.progress-fill[data-width]').each(function () {
            $(this).css('width', $(this).data('width'));
        });
    }, 200);

    /* ------ Toast ------ */
    window.showToast = function (msg, type) {
        var icons = {
            success: 'fa-circle-check',
            error:   'fa-circle-xmark',
            warning: 'fa-triangle-exclamation',
            info:    'fa-circle-info'
        };
        type = type || 'info';
        var $t = $(
            '<div class="toast t-' + type + '">' +
            '<i class="fa-solid ' + (icons[type] || icons.info) + '"></i>' +
            '<span>' + msg + '</span>' +
            '</div>'
        );
        $('#toastWrap').append($t);
        setTimeout(function () {
            $t.addClass('hiding');
            setTimeout(function () { $t.remove(); }, 260);
        }, 3000);
    };

    /* ------ Simple table row click example ------ */
    $(document).on('click', '.tr-clickable', function () {
        // in a real PHP app, redirect to detail page
        var id = $(this).data('id');
        if (id) showToast('Viewing record #' + id, 'info');
    });

});
