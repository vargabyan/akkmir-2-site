<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel="stylesheet" href="fancybox.css">
    <title>Akkmir 2 site</title>
</head>
<body>


<header class="core-container header fixed" data-header>
    <div class="header_info">
        <div class="select-city-wrapper" data-btn-select-city-btn>
            <span class="select-city" data-btn-select-city-value>Екатеринбург</span>
        </div>
        <div class="header_info_data">
            <a class="header_info_tel" href="tel:+7 343 261-62-62">
                <p>
                    с 10:00 до 19:00
                    <span>+7 343 261-62-62</span>
                </p>
            </a>
            <ul class="header_info_appbar">
                <li><a class="btn-invisible-with-border" href="about.php">О компании</a></li>
                <li><a class="btn-invisible-with-border" href="payment-and-delivery.php">Оплата и доставка</a></li>
                <li><a class="btn-invisible-with-border" href="contacts.php">Контакты</a></li>
            </ul>
        </div>
    </div>
    <div class="header_panel">
        <a class="logo-wrapper" href="/">
            <p class="logo">Тор</p>
            <p class="logo_text">Интернет-магазин <br> аккумуляторов, <br> автомасел и автотоваров</p>
        </a>
        <div class="header_panel_btn-catalog-wrapper">
            <button class="header_panel_btn-catalog">Каталог</button>
            <div class="header_panel_btn-catalog_drop-down">
                <span class="header_panel_btn-catalog_drop-down_title">Каталог</span>
                <ul class="header_panel_btn-catalog_drop-down_links-wrapper">
                    <li><a href="">Масла</a></li>
                    <li><a href="">Спец. жидкости</a></li>
                    <li><a href="">Автоэлектроника и элементы питания</a></li>
                    <li><a href="">Аккумуляторы и клеммы</a></li>
                    <li><a href="">Инструменты</a></li>
                    <li><a href="">Автоаксессуары</a></li>
                    <li><a href="">Автокосметика и автохимия</a></li>
                    <li><a href="">ИБП, стабилизаторы, инверторы</a></li>
                </ul>
            </div>
        </div>
        <form class="header_panel_search-form" action="" data-header-panel-search-form>
            <label class="header_search_label" data-header-search-label>
                <input type="search" placeholder="Поиск">
            </label>
            <ul class="header_panel_search_items-wrapper" data-header-panel-search-items-wrapper>
                <li><a href="">Масло</a></li>
                <li><a href="">Масло</a></li>
                <li><a href="">Масло</a></li>
            </ul>
        </form>
        <div class="header_panel_btn-wrapper">
            <a class="header_panel_btn-basket btn-invisible-with-basket" href="basket.php"><span>Корзина</span></a>
            <button class="header_panel_btn-menu" data-btn-open-mobile-menu></button>
        </div>
    </div>
</header>


<section class="mobile-menu" data-mobile-menu>
    <button class="popup_btn-close" data-btn-close-mobile-menu></button>
    <span class="mobile-menu_title">Меню</span>
    <form class="header_panel_search-form" action="" data-header-panel-search-form>
        <label class="header_search_label" data-header-search-label>
            <input type="search" placeholder="Поиск">
        </label>
        <ul class="header_panel_search_items-wrapper" data-header-panel-search-items-wrapper>
            <li><a href="">Масло</a></li>
            <li><a href="">Масло</a></li>
            <li><a href="">Масло</a></li>
        </ul>
    </form>
    <ul class="mobile-menu_naw">
        <li class="mobile-menu_naw_submenu" data-mobile-menu-links-wrapper>
            <div class="mobile-menu_naw_core_link arrow open" data-mobile-menu-btn-open-submenu>
                <a href="catalog.php">Каталог</a>
            </div>
            <ul class="mobile-menu_naw_second_link-wrapper active" data-mobile-menu-submenu>
                <li class="mobile-menu_naw_second_link" data-mobile-menu-links-wrapper>
                    <div class="mobile-menu_naw_second_link arrow" data-mobile-menu-btn-open-submenu>
                        <a href="">Масла</a>
                    </div>
                    <ul class="mobile-menu_naw_thirds_link-wrapper" data-mobile-menu-submenu>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                    </ul>
                </li>
                <li class="mobile-menu_naw_second_link" data-mobile-menu-links-wrapper>
                    <div class="mobile-menu_naw_second_link arrow" data-mobile-menu-btn-open-submenu>
                        <a href="">Спец. жидкости</a>
                    </div>
                    <ul class="mobile-menu_naw_thirds_link-wrapper" data-mobile-menu-submenu>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                    </ul>
                </li>
                <li class="mobile-menu_naw_second_link" data-mobile-menu-links-wrapper>
                    <div class="mobile-menu_naw_second_link arrow" data-mobile-menu-btn-open-submenu>
                        <a href="">Автоэлектроника и элементы питания</a>
                    </div>
                    <ul class="mobile-menu_naw_thirds_link-wrapper" data-mobile-menu-submenu>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                    </ul>
                </li>
                <li class="mobile-menu_naw_second_link" data-mobile-menu-links-wrapper>
                    <div class="mobile-menu_naw_second_link arrow" data-mobile-menu-btn-open-submenu>
                        <a href="">Аккумуляторы и клеммы</a>
                    </div>
                    <ul class="mobile-menu_naw_thirds_link-wrapper" data-mobile-menu-submenu>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                    </ul>
                </li>
                <li class="mobile-menu_naw_second_link" data-mobile-menu-links-wrapper>
                    <div class="mobile-menu_naw_second_link arrow" data-mobile-menu-btn-open-submenu>
                        <a href="">Инструменты</a>
                    </div>
                    <ul class="mobile-menu_naw_thirds_link-wrapper" data-mobile-menu-submenu>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                    </ul>
                </li>
                <li class="mobile-menu_naw_second_link" data-mobile-menu-links-wrapper>
                    <div class="mobile-menu_naw_second_link arrow" data-mobile-menu-btn-open-submenu>
                        <a href="">Автоаксессуары</a>
                    </div>
                    <ul class="mobile-menu_naw_thirds_link-wrapper" data-mobile-menu-submenu>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                    </ul>
                </li>
                <li class="mobile-menu_naw_second_link" data-mobile-menu-links-wrapper>
                    <div class="mobile-menu_naw_second_link arrow" data-mobile-menu-btn-open-submenu>
                        <a href="">Автокосметика и автохимия</a>
                    </div>
                    <ul class="mobile-menu_naw_thirds_link-wrapper" data-mobile-menu-submenu>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                    </ul>
                </li>
                <li class="mobile-menu_naw_second_link" data-mobile-menu-links-wrapper>
                    <div class="mobile-menu_naw_second_link arrow" data-mobile-menu-btn-open-submenu>
                        <a href="">ИБП, стабилизаторы, инверторы</a>
                    </div>
                    <ul class="mobile-menu_naw_thirds_link-wrapper" data-mobile-menu-submenu>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                        <li class="mobile-menu_naw_thirds_link"><a href="">Спец. жидкости</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="mobile-menu_naw_core_link"><a href="about.php">О компании</a></li>
        <li class="mobile-menu_naw_core_link"><a href="payment-and-delivery.php">Оплата и доставка</a></li>
        <li class="mobile-menu_naw_core_link"><a href="contacts.php">контакты</a></li>
    </ul>
</section>