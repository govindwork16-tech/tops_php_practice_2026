<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

    <header class="topbar">
        <button class="topbar-toggle" id="sidebarToggle">
            <i class="fa-solid fa-bars"></i>
        </button>

        <div class="topbar-search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search…">
        </div>

        <div class="topbar-right">
            <button class="tb-icon-btn" onclick="showToast('No new notifications', 'info')">
                <i class="fa-solid fa-bell"></i>
                <span class="tb-dot"></span>
            </button>
            <button class="tb-icon-btn" onclick="showToast('3 unread messages', 'info')">
                <i class="fa-solid fa-envelope"></i>
            </button>

            <!-- Topbar user dropdown -->
            <div class="tb-user" id="tbUser">
                <div class="tb-avatar">JC</div>
                <div class="tb-user-text">
                    <span class="tb-name">John Carter</span>
                    <span class="tb-role">Administrator</span>
                </div>
                <i class="fa-solid fa-chevron-down tb-caret"></i>

                <div class="tb-dropdown" id="tbDropdown">
                    <div class="tb-dd-head">
                        <div class="tb-dd-name">John Carter</div>
                        <div class="tb-dd-email">john@admin.com</div>
                    </div>
                    <a href="profile.html" class="tb-dd-link"><i class="fa-solid fa-circle-user"></i> My
                        Profile</a>
                    <a href="settings.html" class="tb-dd-link"><i class="fa-solid fa-gear"></i> Settings</a>
                    <a href="#" class="tb-dd-link"><i class="fa-solid fa-bell"></i> Notifications</a>
                    <a href="#" class="tb-dd-link"><i class="fa-solid fa-shield-halved"></i> Security</a>
                    <a href="#" class="tb-dd-link"><i class="fa-solid fa-palette"></i> Appearance</a>
                    <div class="tb-dd-sep"></div>
                    <a href="#" class="tb-dd-link"><i class="fa-solid fa-headset"></i> Support</a>
                    <a href="#" class="tb-dd-link danger"><i class="fa-solid fa-right-from-bracket"></i> Log
                        Out</a>
                </div>
            </div>
        </div>
    </header>

    <script src="js/main.js"></script>
</body>

</html>>
