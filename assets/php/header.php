<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINDY - Kết nối dễ dàng</title>
    <link rel="icon" href="./img/findy-logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="./img/findy-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./base.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.3.0-web/css/all.min.css">
</head>

<body>
    <header class="header">
        <div class="top">

        </div>

        <div class="grid wide">

            <!-- Navbar -->
            <nav class="navbar">
                <div class="navbar__logo">
                    <a href="" class="navbar__logo-link">
                        <img src="./img/findy-logo-ngang.png" alt="Findy" class="navbar__logo-img">
                    </a>
                </div>
                <div class="navbar__heading">
                    <a href="./find-timtho.php" class="navbar__heading-link">Thuê Thợ</a>
                </div>
                <div class="navbar__heading">
                    <a href="" class="navbar__heading-link">Tìm việc</a>
                </div>
                <div class="navbar__heading">
                    <a href="./post-job.php" class="navbar__heading-link">Tạo hồ sơ</a>
                </div>
                <div class="navbar__heading">
                    <a href="#" onclick="showLoginForm()" class="navbar__heading-link">Blog</a>
                </div>
                <div class="navbar__heading">
                    <a href="#" onclick="showLoginForm()" class="navbar__heading-link">Đăng nhập</a>
                </div>

                <!-- Mobile menu icon -->
                <label for="mobile-bars-checkbox" class="navbar__mobile-bars">
                    <i class="navbar__heading-icon fa-solid fa-bars"></i>
                </label>
            </nav>

            <input type="checkbox" hidden id="mobile-bars-checkbox" class="navbar__bars-checkbox">
                    
            <!-- Mobile menu -->
            <div class="mobile__menu">
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-right-from-bracket"></i>
                    <a href="./order-management.html" class="mobile__heading-link">Đăng nhập</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-users-between-lines"></i>
                    <a href="./find-timtho.html" class="mobile__heading-link">Thuê Thợ</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-magnifying-glass"></i>
                    <a href="" class="mobile__heading-link">Tìm việc</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-pen"></i>
                    <a href="./post-job.html" class="mobile__heading-link">Tạo hồ sơ</a>
                </div>
                <div class="mobile__heading">
                    <i class="mobile__heading-icon fa-solid fa-file-pen"></i>
                    <a href="./post-management.html" class="mobile__heading-link">Blog</a>
                </div>
            </div>
        </div>
    </header>
</body>