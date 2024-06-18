<?php require 'head.php' ?>


<section class="core-container banner">
    <div class="banner-swiper-wrapper">
        <div class="banner-swiper" data-banner-swiper>
            <div class="swiper-wrapper">
                <?php foreach ([1,2,3] as $item) { ?>
                    <div class="swiper-slide">
                        <div class="banner_item">
                            <h1 class="banner_header">
                                Интернет-магазин аккумуляторов, автомасел и автотоваров
                            </h1>
                            <img class="banner_item_img" src="/images/banner-item-image-1.png" alt="image">
                            <button class="banner_offer_btn-catalog btn-green">перейти в каталог</button>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="banner_offer">
        <span class="banner_offer_title">
            Скидки до 30%  на весь раздел автомасел
        </span>
        <div class="banner_offer_img-wrapper">
            <img src="/images/banner-offer-image-1.png" alt="image">
            <img src="/images/banner-offer-image-2.png" alt="image">
        </div>
        <button class="banner_offer_btn-want-to-see btn-invisible">хочу посмотреть</button>
    </div>
</section>


<section class="catalog-wrapper" data-page-type="home">
    <div class="core-container catalog">
        <h2 class="catalog_header site-header">Каталог</h2>
        <div class="catalog_go-to-catalog">
             <span class="catalog_go-to-catalog_title">Перейти в каталог</span>
            <div class="catalog_go-to-catalog_tags-wrapper">
                <span>Смотреть все категории</span>
                <a class="catalog_go-to-catalog_more-tags" href="catalog.php">Еще +1</a>
            </div>
        </div>
        <div class="catalog_need-help">
            <span class="catalog_need-help_title">Нужна помощь в&nbsp;выборе?</span>
            <div class="catalog_need-help_footer">
                <div class="catalog_need-help_employee-wrapper">
                    <img class="catalog_need-help_employee-img" src="/images/employee-image-1.png" alt="image">
                    <p class="catalog_need-help_description">Нам опытный специалист проконсультирует вас и ответит на все интересующие вопросы</p>
                </div>
                <a class="catalog_need-help_btn-get-consultation" href="catalog.php">Получить консультацию</a>
            </div>
        </div>
        <div class="catalog_items-wrapper">
            <div class="catalog_item">
                <span class="catalog_item_title">Аккумуляторы и клеммы</span>
                <img class="catalog_item_img" src="/images/catalog-image-2.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <span>Автомобильные</span>
                    <span>Мотоциклетные</span>
                    <span>Тяговые</span>
                    <a class="catalog_item_more-tags" href="catalog.php">Еще +4</a>
                </div>
            </div>
            <div class="catalog_item">
                <span class="catalog_item_title">Масла</span>
                <img class="catalog_item_img" src="/images/catalog-image-8.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <span>Моторные</span>
                    <span>АКПП / ГУР</span>
                    <span>Трансмиссионные</span>
                    <span>Гидравлические</span>
                    <span>Промывочные</span>
                    <a class="catalog_item_more-tags" href="catalog.php">Еще +4</a>
                </div>
            </div>
            <div class="catalog_item">
                <span class="catalog_item_title">Спец. жидкости</span>
                <img class="catalog_item_img" src="/images/catalog-image-1.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <span>Автомобильные</span>
                    <span>Мотоциклетные</span>
                    <span>Тяговые</span>
                    <span>Клеммы и провода</span>
                </div>
            </div>
            <div class="catalog_item">
                <span class="catalog_item_title">Автоэлектроника и элементы питания</span>
                <img class="catalog_item_img" src="/images/catalog-image-3.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <span>Антифризы</span>
                    <span>Стеклоомывающие жидкости</span>
                    <span>Мочевина</span>
                    <a class="catalog_item_more-tags" href="catalog.php">Еще +4</a>
                </div>
            </div>
            <div class="catalog_item">
                <span class="catalog_item_title">ИБП, стабилизаторы, инверторы</span>
                <img class="catalog_item_img" src="/images/catalog-image-7.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <span>ИПБ</span>
                    <span>Стабилизаторы</span>
                    <span>Инверторы</span>
                </div>
            </div>
            <div class="catalog_item">
                <span class="catalog_item_title">Автокосметика и автохимия</span>
                <img class="catalog_item_img" src="/images/catalog-image-4.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <span>Присадки</span>
                    <span>Очистители</span>
                    <span>Герметики</span>
                    <a class="catalog_item_more-tags" href="catalog.php">Еще +7</a>
                </div>
            </div>
            <div class="catalog_item">
                <span class="catalog_item_title">Инструменты</span>
                <img class="catalog_item_img" src="/images/catalog-image-6.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <span>Ключи</span>
                    <span>Удлиннители, воротки, головки</span>
                    <span>Отвёртки</span>
                    <span>Ручной инструмент</span>
                    <a class="catalog_item_more-tags" href="catalog.php">Еще +12</a>
                </div>
            </div>
            <div class="catalog_item">
                <span class="catalog_item_title">Автоаксессуары</span>
                <img class="catalog_item_img" src="/images/catalog-image-5.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <span>Фонари</span>
                    <span>Автоаксессуары в багажник</span>
                    <span>Термочехлы</span>
                    <span>Ароматизаторы воздуха</span>
                    <span>Перчатки</span>
                    <span>Автоаксессуары в салон</span>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
$response_data_often_ordering_in_bulk = [
    [
        'image' => './images/often-ordering-in-bulk-product-1.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/catalog.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-2.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/catalog.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-3.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/catalog.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-3.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/catalog.php',
    ],
    [
        'image' => './images/often-ordering-in-bulk-product-3.png',
        'title' => 'Песок крупнозернистый 3–5 мм',
        'url' => '/catalog.php',
    ],
]
?>


<section class="core-container slider-section">
    <div class="slider-section_head-wrapper">
        <h2 class="slider-section_header site-header">Популярные товары</h2>
        <div class="slider-section_tags-wrapper">
            <span>Выберите категорию:</span>
            <div class="slider-section_tags">
                <a href="">Все товары</a>
            </div>
        </div>
    </div>
    <div class="slider-section_swiper-wrapper">
        <div class="slider-section_swiper" data-often-ordering-in-bulk-swiper>
            <div class="swiper-wrapper">
                <?php foreach ($response_data_often_ordering_in_bulk as $item) { ?>
                    <div class="swiper-slide">
                        <div class="popular-goods_item">
                            <div class="popular-goods_item_img-wrapper">
                                <span>Товар недели</span>
                                <img src="/images/popular-goods-img-1.png" alt="image">
                            </div>
                            <div class="popular-goods_item_content-wrapper" data-popular-goods-transfer-parent>
                                <span class="popular-goods_item_title" data-popular-goods-transfer-place-one>
                                    Аккумулятор 6МТС Tyumen Battery Мото «Лидер» 9 Ач о.п…
                                </span>
                                <div class="popular-goods_item_characteristic-wrapper">
                                    <div class="popular-goods_item_characteristic" data-popular-goods-transfer-place-two>
                                        <span>Пусковой ток (А): 45</span>
                                        <span>Ёмкость Ач: 9</span>
                                    </div>
                                    <div class="popular-goods_item_guarantee" data-popular-goods-transfer-el>
                                        Гарантия
                                        <span>12 месяцев</span>
                                        <img src="/images/popular-goods--guarantee-image.png" alt="image">
                                    </div>
                                </div>
                                <div class="popular-goods_item_prices">
                                   1 200 ₽
                                   <span>2 300 ₽</span>
                                </div>
                                <div class="popular-goods_item_in-stock">
                                    В наличии в
                                    <a href=""> 12 пунктах выдачи заказов</a>
                                </div>
                                <div class="popular-goods_item_btn-wrapper">
                                    <button class="btn-green">Купить в 1 клик</button>
                                    <button class="btn-invisible-with-basket btn-invisible-with-border"><span>В корзину</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="slider-section_btn-prev" data-often-ordering-in-bulk-swiper-button-prev></div>
        <div class="slider-section_btn-next" data-often-ordering-in-bulk-swiper-button-next></div>
    </div>
</section>





<?php require 'footer.php' ?>