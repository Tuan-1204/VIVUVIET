<?php
if (!isset($activePage)) {
    $activePage = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ViVuViet<?= $activePage !== 'home' ? ' - ' . ucfirst($activePage) : '' ?></title>
    <link rel="stylesheet" type="text/css" href="styles/css/main_style.css">
    <link rel="stylesheet" type="text/css" href="styles/css/Animation.css">
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- additional per-page head elements -->
    <?php if (file_exists(__DIR__ . "/head_{$activePage}.php")) {
        include __DIR__ . "/head_{$activePage}.php";
    } ?>
</head>
<body>
<div id="wrapper">
    <header class="header">
        <div class="top_bar">
            <div class="bar__info">
                <div class="phone">+84 989 681 864</div>
                <div class="social">
                    <ul class="social_list">
                        <li class="social_list_item"><a href="https://www.facebook.com/tuannguyen12402"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social_list_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social_list_item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>

            </div>
            <div class="bar__user">
                <?php if (currentUser()): ?>
                    <div class="bar__user-login"><a href="index.php?page=logout">Logout</a></div>
                <?php else: ?>
                    <div class="bar__user-login"><a href="index.php?page=login">login</a></div>
                    <div class="bar__user-regis"><a href="index.php?page=register">register</a></div>
                <?php endif; ?>
            </div>
        </div>

        <div class="main_nav">
            <div class="main_nav__logo"><a href="<?= BASE_URL ?: 'index.php' ?>"><img src="styles/images/logo.png" alt="logo"> VIVUVIET</a></div>
            <div class="main_nav__menu">
                <ul class="main_nav__list">
                    <li class="main_nav__item <?= $activePage === 'home' ? 'active' : '' ?>"><a href="index.php">TRANG CHỦ</a></li>
                    <li class="main_nav__item <?= $activePage === 'about' ? 'active' : '' ?>"><a href="index.php?page=about">GIỚI THIỆU</a></li>
                    <li class="main_nav__item <?= $activePage === 'offers' ? 'active' : '' ?>"><a href="index.php?page=offers">ƯU ĐÃI</a></li>
                    <li class="main_nav__item <?= $activePage === 'blog' ? 'active' : '' ?>"><a href="index.php?page=blog">TIN TỨC</a></li>
                    <li class="main_nav__item <?= $activePage === 'contact' ? 'active' : '' ?>"><a href="index.php?page=contact">LIÊN HỆ</a></li>
                </ul>
            </div>
            <div class="main_nav__search">
                <form action="index.php" method="get"><input class="input_search" type="text" name="q" placeholder="Tìm kiếm"></form>
                <div class="search__item"><i class="fas fa-search"></i></div>
            </div>
        </div>
    </header>
    <div class="main">
