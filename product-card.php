<?php require 'head.php' ?>

<?php
require 'breadcrumb.php';
breadcrumb([['url' => '/catalog.php', 'name' => 'Каталог']]);
?>


<section class="core-container product-card">
    <h1 class="product-card_header site-header">заголовок</h1>
    <div class="product-card_content">
        <div class="product-card_images-and-data">
            <div class="swiper-Thumbs-gallery-wrapper">
                <div class="swiper-gallery" data-swiper-gallery>
                    <div class="swiper-wrapper">
                        <?php foreach ([1,2,3,4,5,6,7,8] as $item) { ?>
                            <div class="swiper-slide">
                                <div class="swiper-gallery_item">
                                    <a data-fancybox="gallery" href="https://swiperjs.com/demos/images/nature-<?= $item ?>.jpg">
                                        <img src="https://swiperjs.com/demos/images/nature-<?= $item ?>.jpg" alt="image" />
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-gallery-button-next" data-swiper-gallery-button-next></div>
                    <div class="swiper-gallery-button-prev" data-swiper-gallery-button-prev></div>
                </div>
                <div class="swiper-Thumbs-gallery" data-swiper-Thumbs-gallery>
                    <div class="swiper-wrapper">
                        <?php foreach ([1,2,3,4,5,6,7,8] as $item) { ?>
                            <div class="swiper-slide">
                                <div class="swiper-Thumbs-gallery_item">
                                    <img src="https://swiperjs.com/demos/images/nature-<?= $item ?>.jpg" alt="image" />
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="product-card_data">
                <span class="product-card_data_title">Технические <br> характеристики:</span>
                <ul class="product-card_data_list">
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Гарантия</span>
                            <div class="clue-wrapper" data-clue-wrapper>
                                <button class="clue-icon clue-btn-open" data-clue-btn-open></button>
                                <div class="clue-content" data-clue-content>
                                    <button class="btn-close clue-btn-close" data-clue-btn-close></button>
                                    <div class="clue-text">
                                        <p>
                                            На все аккумуляторные батареи, реализуемые магазином, распространяется фирменная гарантия.  Срок гарантии исчисляется с момента продажи
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <span class="product-card_data_item_line"></span>
                            <span class="product-card_data_item_values">36 месяцев</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Бренд</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">ZEUS</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Ёмкость, Ач</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">50</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Напряжение, В</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">12</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Полярность</span>
                            <div class="clue-wrapper" data-clue-wrapper>
                                <button class="clue-icon clue-btn-open" data-clue-btn-open></button>
                                <div class="clue-content" data-clue-content>
                                    <button class="btn-close clue-btn-close" data-clue-btn-close></button>
                                    <div class="clue-text">
                                        <p>Прямая + - — плюс слева, минус справа. Обозначается как «п.п.» или «1»</p>
                                        <p>Обратная - + — минус слева, плюс справа. Обозначается как «о.п.» или «0».</p>
                                    </div>
                                </div>
                            </div>
                            <span class="product-card_data_item_line"></span>
                            <span class="product-card_data_item_values">Прямая</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Пусковой ток, А</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">480</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Тип клемм</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">Европейская</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Тип крепления</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">Нижний бурт</span>
                        </div>
                    </li>
                </ul>
                <a class="product-card_data_btn" href="" data-link-all-characteristic>Все характеристики</a>
                <div class="product-card_tags-wrapper" data-product-card-tags-wrapper>
                    <span class="product-card_tags_title">Подходит для:</span>
                    <div class="product-card_tags">
                        <span>Solaris</span>
                        <span>Vesta</span>
                        <span>Kia Rio</span>
                        <span>VW Polo</span>
                        <span>Nexia</span>
                        <span>Corolla 2017</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-card_shop">
            <form action="" class="product-card_shop_form">
                <div class="product-card_shop_prices-wrapper">
                    <div class="product-card_shop_prices">
                        <span class="product-card_shop_price">20 550 ₽/шт*</span>
                        <p class="product-card_shop_another-price"><span>3 550 ₽/шт</span>4 050 ₽/шт</p>
                    </div>
                    <div class="product-card_shop_label-wrapper">
                        <label class="product-card_shop_label"><input type="checkbox"> Сдать свой аккумулятор и получить скидку</label>
                        <label class="product-card_shop_label"><input type="checkbox"> Мне требуется установка</label>
                    </div>
                    <div class="product-card_shop_text">
                        <p>
                            *С учётом скидки, цена при сдаче вашего аккумулятора аналогичных размеров
                        </p>
                        <p>
                            Цены в розничных магазинах могут отличаться  от цен интернет-магазина
                        </p>
                    </div>
                </div>
                <div class="product-card_shop_in-stock">
                    В наличии в
                    <a href="">12 пунктах выдачи заказов</a>
                </div>
                <div class="product-card_shop_btn-wrapper">
                    <button class="product-card_shop_btn_add-basket btn-green">Добавить в корзину</button>
                    <button type="button" class="product-card_shop_btn_buy btn-invisible-with-border" data-order-popup="Buy-in-one-click">Купить в 1 клик</button>
                </div>
            </form>
            <div class="product-card_shop_delivery">
                <span class="product-card_shop_delivery_title">Доставка</span>
                <div class="product-card_shop_delivery_content">
                    <span>Самовывоз:</span>
                    <span>Сегодня из <a href="">3 пунктов выдачи</a></span>
                    <span>Доставка:</span>
                    <span>от 1 дня</span>
                </div>
            </div>
        </div>

        <div class="product-card_help">
            <span class="product-card_help_title">Подобрать АКБ <br> спецалистом</span>
            <div class="product-card_help_person-wrapper">
                <img src="/images/employee-image-3.png" alt="image">
                <p>Наш менеджер проконсультирует вас и ответит на все интересующие вопросы</p>
            </div>
            <button class="product-card_help_btn" data-order-popup="order-selection">заказать подбор</button>
        </div>

        <div class="product-card_description">
            <span class="product-card_description_title">Описание</span>
            <p>
                Мы рады приветствовать вас в интернет-магазине “ВольтВэл”
                У нас вы сможете купить авто аккумуляторы в Екатеринбурге на легковые и грузовые автомобили, а также на мотоциклы. В ассортименте «“ВольтВэл”» всегда в наличии более 18 самых популярных брендов автоаккумуляторов, среди которых Tab, Varta, Bosch, President, Inci Aku, Mutlu, YUASA и многие другие.
                “ВольтВэл” - это розничное направление деятельности одной из крупнейших в России оптовых компаний по продаже стартерных батарей — Аккумуляторной компании «Энергия». Благодаря налаженным контактам, автомобильные аккумуляторы поставляются в магазины напрямую от производителей.
                Опытные продавцы-консультанты помогут вам выбрать оптимальные автомобильные аккумуляторы.
            </p>
        </div>

        <div class="product-card_characteristic">
            <span class="product-card_characteristic_title">технические характеристики</span>
            <div class="product-card_characteristic_content" data-product-card-characteristic-content>
                <ul class="product-card_data_list">
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Гарантия</span>
                            <div class="clue-wrapper" data-clue-wrapper>
                                <button class="clue-icon clue-btn-open" data-clue-btn-open></button>
                                <div class="clue-content" data-clue-content>
                                     <button class="btn-close clue-btn-close" data-clue-btn-close></button>
                                    <div class="clue-text">
                                        <p>
                                            На все аккумуляторные батареи, реализуемые магазином, распространяется фирменная гарантия.  Срок гарантии исчисляется с момента продажи
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <span class="product-card_data_item_line"></span>
                            <span class="product-card_data_item_values">36 месяцев</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Бренд</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">ZEUS</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Ёмкость, Ач</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">50</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Напряжение, В</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">12</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties icon-exclamation-point">Полярность</span>
                            <div class="clue-wrapper" data-clue-wrapper>
                                <button class="clue-icon clue-btn-open" data-clue-btn-open></button>
                                <div class="clue-content" data-clue-content>
                                    <button class="btn-close clue-btn-close" data-clue-btn-close></button>
                                    <div class="clue-text">
                                        <p>Прямая + - — плюс слева, минус справа. Обозначается как «п.п.» или «1»</p>
                                        <p>Обратная - + — минус слева, плюс справа. Обозначается как «о.п.» или «0».</p>
                                    </div>
                                </div>
                            </div>
                            <span class="product-card_data_item_line"></span>
                            <span class="product-card_data_item_values">Прямая</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Пусковой ток, А</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">480</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Тип клемм</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">Европейская</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Тип крепления</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">Нижний бурт</span>
                        </div>
                    </li>
                </ul>
                <ul class="product-card_data_list">
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Гарантия</span>
                            <div class="clue-wrapper" data-clue-wrapper>
                                <button class="clue-icon clue-btn-open" data-clue-btn-open></button>
                                <div class="clue-content" data-clue-content>
                                    <button class="btn-close clue-btn-close" data-clue-btn-close></button>
                                    <div class="clue-text">
                                        <p>
                                            На все аккумуляторные батареи, реализуемые магазином, распространяется фирменная гарантия.  Срок гарантии исчисляется с момента продажи
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <span class="product-card_data_item_line"></span>
                            <span class="product-card_data_item_values">36 месяцев</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Бренд</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">ZEUS</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Ёмкость, Ач</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">50</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Напряжение, В</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">12</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Полярность</span>
                            <div class="clue-wrapper" data-clue-wrapper>
                                <button class="clue-icon clue-btn-open" data-clue-btn-open></button>
                                <div class="clue-content" data-clue-content>
                                    <button class="btn-close clue-btn-close" data-clue-btn-close></button>
                                    <div class="clue-text">
                                        <p>Прямая + - — плюс слева, минус справа. Обозначается как «п.п.» или «1»</p>
                                        <p>Обратная - + — минус слева, плюс справа. Обозначается как «о.п.» или «0».</p>
                                    </div>
                                </div>
                            </div>
                            <span class="product-card_data_item_line"></span>
                            <span class="product-card_data_item_values">Прямая</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Пусковой ток, А</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">480</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Тип клемм</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">Европейская</span>
                        </div>
                    </li>
                    <li>
                        <div class="product-card_data_item">
                            <span class="product-card_data_item_properties">Тип крепления</span><span class="product-card_data_item_line"></span><span class="product-card_data_item_values">Нижний бурт</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php
$response_data_reviews = [
    [
        'image' => '/images/review-image-1.png',
        'fullName' => 'Макс Ширков',
        'text' => 'Отличный магазин, в первую очень из-за персонала. К таким людям хочется возвращаться. Отдельная благодарность сотруднику Владимиру, профессионал своего дела. Во всех вопросах проконсультировал и проявил инициативу в установке!
Вернусь и не раз'
    ],
    [
        'image' => '/images/review-image-1.png',
        'fullName' => 'Макс Ширков',
        'text' => 'Отличный магазин, в первую очень из-за персонала. К таким людям хочется возвращаться. Отдельная благодарность сотруднику Владимиру, профессионал своего дела. Во всех вопросах проконсультировал и проявил инициативу в установке!
Вернусь и не раз. Владимиру, профессионал своего дела. Во всех вопросах проконсультировал и проявил инициативу в установке!
Вернусь и не раз'
    ],
    [
        'image' => '/images/review-image-1.png',
        'fullName' => 'Макс Ширков',
        'text' => 'Отличный магазин, в первую очень из-за персонала. К таким людям хочется возвращаться. Отдельная благодарность сотруднику Владимиру, профессионал своего дела. Во всех вопросах проконсультировал и проявил инициативу в установке!
Вернусь и не раз'
    ],
]
?>

<section class="core-container review-section">
    <h2 class="slider-review_header site-other-headers">Отзывы</h2>
    <div class="slider-review_btn-wrapper">
        <div class="review-slider-section_btn-prev" data-review-swiper-button-prev></div>
        <div class="review-slider-section_btn-next" data-review-swiper-button-next></div>
    </div>
    <div class="review-slider-section_swiper" data-review-swiper>
        <div class="swiper-wrapper">
            <?php foreach ($response_data_reviews as $item) { ?>
                <div class="swiper-slide">
                    <div class="review_item">
                        <div class="review_item_text-wrapper" data-review-item-text-wrapper>
                            <p class="review_item_text" data-review-item-text><?= $item['text'] ?></p>
                            <button class="review_item_btn-more" data-review-item-btn-more>Читать полностью</button>
                        </div>
                        <div class="review_item_persson-wrapper">
                            <img src="<?= $item['image'] ?>" alt="image">
                            <span><?= $item['fullName'] ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
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
                            <a class="popular-goods_item_core-link" href="product-card.php"></a>
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
                                    <button class="btn-green" data-order-popup="Buy-in-one-click">Купить в 1 клик</button>
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


<section class="core-container">
    <section class="consultation">
        <h2 class="consultation-header">Заявка <br> на&nbsp;консультацию</h2>
        <span class="consultation_subtitle">Оставьте заявку и получите <br> бесплатную консультацию</span>
        <div class="consultation_person-wrapper">
            <img src="/images/consultant-image-1.png" alt="image">
            <p class="consultation_person_data">
                <span>Владимир</span>
                Наш опытный специалист проконсультирует вас и ответит на все интересующие вопросы
            </p>
        </div>
        <form action="" class="consultation_form">
            <label class="consultation_form_label"><input type="text" placeholder="Введите ваше имя"></label>
            <label class="consultation_form_label"><input type="tel" placeholder="Введите ваш номер телефона"></label>
            <button class="consultation_form_btn-submit btn-green" type="submit">оставить заявку</button>
            <span class="consultation_agreements">Нажимая на кнопку, вы соглашаетесь <br>  с <a href="confidentiality.php">политикой конфиденциальности</a></span>
        </form>
    </section>
</section>


<?php require 'footer.php' ?>