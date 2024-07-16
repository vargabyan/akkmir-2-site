<?php require 'head.php' ?>


<section class="banner">
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
                            <a class="banner_offer_btn-catalog btn-green" href="catalog.php">перейти в каталог</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="banner_offer">
        <span class="banner_offer_title">
            Скидки до 30% на весь раздел автомасел
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
        <h2 class="catalog_header site-other-headers">Каталог</h2>
        <div class="catalog_go-to-catalog">
            <a class="catalog_go-to-catalog_core-link" href="catalog.php"></a>
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
                <button class="catalog_need-help_btn-get-consultation" data-order-popup="get-a-consultation">Получить консультацию</button>
            </div>
        </div>
        <div class="catalog_items-wrapper">
            <div class="catalog_item">
                <span class="catalog_item_title">Аккумуляторы и клеммы</span>
                <img class="catalog_item_img" src="/images/catalog-image-2.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <a href="product-showcase.php">Автомобильные</a>
                    <a href="product-showcase.php">Мотоциклетные</a>
                    <a href="product-showcase.php">Тяговые</a>
                    <a class="catalog_item_more-tags" href="catalog.php">Еще +4</a>
                </div>
            </div>
            <div class="catalog_item">
                <span class="catalog_item_title">Масла</span>
                <img class="catalog_item_img" src="/images/catalog-image-8.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <a href="product-showcase.php">Моторные</a>
                    <a href="product-showcase.php">АКПП / ГУР</a>
                    <a href="product-showcase.php">Трансмиссионные</a>
                    <a href="product-showcase.php">Гидравлические</a>
                    <a href="product-showcase.php">Промывочные</a>
                    <a class="catalog_item_more-tags" href="catalog.php">Еще +4</a>
                </div>
            </div>
            <div class="catalog_item">
                <span class="catalog_item_title">Спец. жидкости</span>
                <img class="catalog_item_img" src="/images/catalog-image-1.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <a href="product-showcase.php">Автомобильные</a>
                    <a href="product-showcase.php">Мотоциклетные</a>
                    <a href="product-showcase.php">Тяговые</a>
                    <a href="product-showcase.php">Клеммы и провода</a>
                </div>
            </div>
            <div class="catalog_item">
                <span class="catalog_item_title">Автоэлектроника и элементы питания</span>
                <img class="catalog_item_img" src="/images/catalog-image-3.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <a href="product-showcase.php">Антифризы</a>
                    <a href="product-showcase.php">Стеклоомывающие жидкости</a>
                    <a href="product-showcase.php">Мочевина</a>
                    <a class="catalog_item_more-tags" href="catalog.php">Еще +4</a>
                </div>
            </div>
            <div class="catalog_item">
                <span class="catalog_item_title">ИБП, стабилизаторы, инверторы</span>
                <img class="catalog_item_img" src="/images/catalog-image-7.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <a href="product-showcase.php">ИПБ</a>
                    <a href="product-showcase.php">Стабилизаторы</a>
                    <a href="product-showcase.php">Инверторы</a>
                </div>
            </div>
            <div class="catalog_item">
                <span class="catalog_item_title">Автокосметика и автохимия</span>
                <img class="catalog_item_img" src="/images/catalog-image-4.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <a href="product-showcase.php">Присадки</a>
                    <a href="product-showcase.php">Очистители</a>
                    <a href="product-showcase.php">Герметики</a>
                    <a class="catalog_item_more-tags" href="catalog.php">Еще +7</a>
                </div>
            </div>
            <div class="catalog_item">
                <span class="catalog_item_title">Инструменты</span>
                <img class="catalog_item_img" src="/images/catalog-image-6.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <a href="product-showcase.php">Ключи</a>
                    <a href="product-showcase.php">Удлиннители, воротки, головки</a>
                    <a href="product-showcase.php">Отвёртки</a>
                    <a href="product-showcase.php">Ручной инструмент</a>
                    <a class="catalog_item_more-tags" href="catalog.php">Еще +12</a>
                </div>
            </div>
            <div class="catalog_item">
                <span class="catalog_item_title">Автоаксессуары</span>
                <img class="catalog_item_img" src="/images/catalog-image-5.png" alt="image">
                <div class="catalog_item_tags-wrapper">
                    <a href="product-showcase.php">Фонари</a>
                    <a href="product-showcase.php">Автоаксессуары в багажник</a>
                    <a href="product-showcase.php">Термочехлы</a>
                    <a href="product-showcase.php">Ароматизаторы воздуха</a>
                    <a href="product-showcase.php">Перчатки</a>
                    <a href="product-showcase.php">Автоаксессуары в салон</a>
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


<section class="core-container slider-team">
    <h2 class="slider-team_header site-other-headers">Наша команда</h2>
    <div class="slider-team_swiper" data-team-swiper>
        <div class="swiper-wrapper">
            <?php foreach ([1,2,3,4] as $item) { ?>
                <div class="swiper-slide">
                    <div class="team_item">
                        <img class="team_item-person_img" src="/images/team-image-1.png" alt="image">
                        <div class="team_item_person-data">
                            <span>Иван Иванов</span>
                            <p class="team_item_person_job-title">Менеджер по продажам</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<section class="core-container questions">
    <h2 class="questions_header site-other-headers">Аккумуляторы <br> в Екатеринбурге</h2>
    <div class="questions_content">
        <div class="questions_description" data-questions-description>
            <p>
                Мы рады приветствовать вас в интернет-магазине “ВольтВэл”
                У нас вы сможете купить авто аккумуляторы в Екатеринбурге на легковые и грузовые автомобили, а также на мотоциклы. В ассортименте «“ВольтВэл”» всегда в наличии более 18 самых популярных брендов автоаккумуляторов, среди которых Tab, Varta, Bosch, President, Inci Aku, Mutlu, YUASA и многие другие.
            </p>
            <p>
                “ВольтВэл” - это розничное направление деятельности одной из крупнейших в России оптовых компаний по продаже стартерных батарей — Аккумуляторной компании «Энергия». Благодаря налаженным контактам, автомобильные аккумуляторы поставляются в магазины напрямую от производителей.
                Опытные продавцы-консультанты помогут вам выбрать оптимальные автомобильные аккумуляторы.
            </p>
            <p>
                “ВольтВэл” - это розничное направление деятельности одной из крупнейших в России оптовых компаний по продаже стартерных батарей — Аккумуляторной компании «Энергия». Благодаря налаженным контактам, автомобильные аккумуляторы поставляются в магазины напрямую от производителей.
                Опытные продавцы-консультанты помогут вам выбрать оптимальные автомобильные аккумуляторы.
            </p>
            <button class="questions_btn-more" data-questions-btn-more>Читать полностью</button>
        </div>
         <div class="questions_items-wrapper" data-questions-items-wrapper>
             <?php foreach ([1,2,3,4,5] as $item) { ?>
                <div class="questions_item" data-questions-item>
                    <div class="questions_item_question" data-questions-item-question>
                        Вопрос клиента, вопрос клиента, вопрос клиента?
                    </div>
                    <div class="questions_item_answer" data-questions-item-answer>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consectetur dolore eveniet ex incidunt maiores molestias omnis possimus quaerat qui!
                    </div>
                </div>
             <?php } ?>
             <div class="questions_help-item">
                 <span>Не нашли ответ <br> на свой вопрос?</span>
                 <div class="questions_help-item_person">
                     <img src="/images/question-consultation-image-1.png" alt="image">
                     Наш опытный специалист проконсультирует вас и ответит на все интересующие вопросы
                 </div>
                 <button class="questions_help-item_btn-consultation" data-order-popup="get-a-consultation">Получить консультацию</button>
             </div>
         </div>
    </div>
</section>

<?php require 'footer.php' ?>