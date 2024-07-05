<?php require 'head.php' ?>

<?php
require 'breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'Каталог']]);
?>


<section class="catalog-wrapper" data-page-type="catalog">
    <div class="core-container catalog">
        <h2 class="catalog_header site-other-headers">Каталог</h2>
        <div class="catalog_item catalog_special-position">
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


<section class="core-container slider-section">
    <div class="slider-section_head-wrapper">
        <h2 class="slider-section_header site-other-headers">Популярные товары</h2>
        <div class="slider-section_tags-wrapper">
            <span>Выберите категорию:</span>
            <div class="slider-section_tags">
                <a href="">Все товары</a>
                <a href="">Аккумуляторы и клеммы</a>
                <a href="">Масла</a>
                <a href="">Спец. жидкости</a>
                <a href="">Автоэлектроника и элементы питания</a>
                <a href="">Инструменты</a>
                <a href="">Автокосметика и автохимия</a>
            </div>
        </div>
    </div>
    <div class="slider-section_swiper-wrapper">
        <div class="slider-section_swiper" data-popular-goods-swiper>
            <div class="swiper-wrapper">
                <?php foreach ([1,2,3,4,5] as $item) { ?>
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
        <div class="slider-section_btn-prev" data-popular-goods-swiper-button-prev></div>
        <div class="slider-section_btn-next" data-popular-goods-swiper-button-next></div>
    </div>
</section>


<?php require 'footer.php' ?>