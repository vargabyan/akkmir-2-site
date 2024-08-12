<?php require 'head.php' ?>

<?php
require 'breadcrumb.php';
breadcrumb([['url' => '/catalog.php', 'name' => 'Каталог'], ['url' => '', 'name' => 'Автомобильные аккумуляторы']]);
?>


<section class="core-container product-showcase">
    <h1 class="product-showcase_header site-header">Автомобильные <br> аккумуляторы</h1>
    <div class="product-showcase_tags-wrapper">
        <a href="product-showcase.php">Аккумуляторы автомобильные</a>
        <a href="product-showcase.php">Аккумуляторы мотоциклетные</a>
        <a href="product-showcase.php">Аккумуляторы промышленные</a>
        <a href="product-showcase.php">Клеммы и провода</a>
        <a href="product-showcase.php">Крепёж для АКБ</a>
    </div>
    <div class="product-showcase_contents">
        <div class="product-showcase_filter-wrapper">
            <div class="product-showcase_links-menu-wrapper">
                <span class="product-showcase_links-menu-wrapper_title">Аккумуляторы и клеммы</span>
                <div class="product-showcase_links-menu" data-product-showcase-links-menu>
                    <span class="product-showcase_links-menu_title active" data-product-showcase-links-menu-open>Аккумуляторы </span>
                    <ul class="product-showcase_links-menu_drop-down active" data-product-showcase-links-menu-drop-down>
                        <li><a href="">Аккумуляторы автомобильные</a></li>
                        <li><a href="">Аккумуляторы мотоциклетные </a></li>
                        <li><a href="">Аккумуляторы промышленные</a></li>
                        <li><a href="">Аккумуляторы ...</a></li>
                    </ul>
                </div>
                <div class="product-showcase_links-menu" data-product-showcase-links-menu>
                    <span class="product-showcase_links-menu_title" data-product-showcase-links-menu-open>Клеммы</span>
                    <ul class="product-showcase_links-menu_drop-down" data-product-showcase-links-menu-drop-down>
                        <li><a href="">Клеммы автомобильные</a></li>
                        <li><a href="">Клеммы мотоциклетные </a></li>
                        <li><a href="">Клеммы промышленные</a></li>
                        <li><a href="">Клеммы ...</a></li>
                    </ul>
                </div>
            </div>
            <div class="product-showcase_filter_mobile-wrapper" data-product-showcase-filter-mobile-wrapper>
                <button class="product-showcase_filter_btn-open-menu btn-green" data-product-showcase-filter-btn-open-menu>фильтр по подбору</button>
                <div class="product-showcase_filter">
                    <button class="product-showcase_filter-btn-close btn-close" data-product-showcase-filter-btn-close></button>
                    <div class="product-showcase_filter_title-wrapper">
                        <span class="product-showcase_links-menu-wrapper_title">Подбор АКБ</span>
                        <form action="" class="product-showcase_select-filter-params" data-product-showcase-select-filter-params>
                            <label class="product-showcase_select-filter-params_label active" data-product-showcase-select-filter-params-label="car-model">
                                По марке авто
                                <input type="radio" name="select-filter-params" checked value="По марке авто">
                            </label>
                            <label class="product-showcase_select-filter-params_label" data-product-showcase-select-filter-params-label="battery-model">
                                по меркам акб
                                <input type="radio" name="select-filter-params" value="по меркам акб">
                            </label>
                        </form>
                    </div>
                    <form action="" method="post" class="product-showcase_filter_params" data-product-showcase-filter-params>
                        <div class="product-showcase_filter_params_content active" data-product-filter-content="car-model">
                            <div class="select-section_wrapper-label">
                                Бренд
                                <div class="select-section" data-select-section>
                                    <span class="select-section_value" data-select-section-value>Выбрать</span>
                                    <div class="select-section_drop-menu" data-select-section-drop-menu>
                                        <div class="select-section_item-wrapper">
                                            <?php foreach ([1,2,3,4,5,6] as $item) { ?>
                                                <label class="select-section_item_label">
                                                    <span>option <?= $item ?></span>

                                                    <input type="radio" value="option <?= $item ?>" name="select" data-select-section-item>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="select-slider-wrapper" data-select-slider-wrapper>
                                Цена, в руб
                                <div class="select-slider-_content">
                                    <span class="select-slider_values" data-select-slider-value-min>0</span>
                                    <div class="select-slider_container" data-select-slider-container>
                                        <div class="select-slider_slider-track" data-select-slider-slider-track></div>
                                        <label>
                                            <input type="range" name="select-slider-min" min="0" step="10" max="500" value="20" data-select-slider-input-decrement>
                                        </label>
                                        <label>
                                            <input type="range" name="select-slider-max" min="0" step="10" max="500" value="200" data-select-slider-input-increment>
                                        </label>
                                    </div>
                                    <span class="select-slider_values" data-select-slider-value-max>100</span>
                                </div>
                            </div>

                            <div class="select-section_wrapper-label">
                                Гарантия
                                <div class="select-section" data-select-section>
                                    <span class="select-section_value" data-select-section-value>Выбрать</span>
                                    <div class="select-section_drop-menu" data-select-section-drop-menu>
                                        <div class="select-section_item-wrapper">
                                            <?php foreach ([1,2,3,4,5,6] as $item) { ?>
                                                <label class="select-section_item_label">
                                                    option <?= $item ?>
                                                    <input type="radio" value="option <?= $item ?>" name="select" data-select-section-item>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="select-section_wrapper-label">
                                Тип крепления
                                <div class="select-section" data-select-section>
                                    <span class="select-section_value" data-select-section-value>Выбрать</span>
                                    <div class="select-section_drop-menu" data-select-section-drop-menu>
                                        <div class="select-section_item-wrapper">
                                            <?php foreach ([1,2,3,4,5,6] as $item) { ?>
                                                <label class="select-section_item_label">
                                                    option <?= $item ?>
                                                    <input type="radio" value="option <?= $item ?>" name="select" data-select-section-item>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="select-section_wrapper-label">
                                Тип клемм
                                <div class="select-section" data-select-section>
                                    <span class="select-section_value" data-select-section-value>Выбрать</span>
                                    <div class="select-section_drop-menu" data-select-section-drop-menu>
                                        <div class="select-section_item-wrapper">
                                            <?php foreach ([1,2,3,4,5,6] as $item) { ?>
                                                <label class="select-section_item_label">
                                                    option <?= $item ?>
                                                    <input type="radio" value="option <?= $item ?>" name="select" data-select-section-item>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="select-section_wrapper-label">
                                Технология
                                <div class="select-section" data-select-section>
                                    <span class="select-section_value" data-select-section-value>Выбрать</span>
                                    <div class="select-section_drop-menu" data-select-section-drop-menu>
                                        <div class="select-section_item-wrapper">
                                            <?php foreach ([1,2,3,4,5,6] as $item) { ?>
                                                <label class="select-section_item_label">
                                                    option <?= $item ?>
                                                    <input type="radio" value="option <?= $item ?>" name="select" data-select-section-item>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="select-slider-wrapper" data-select-slider-wrapper>
                                Ёмкость (Ач)
                                <div class="select-slider-_content">
                                    <span class="select-slider_values" data-select-slider-value-min>0</span>
                                    <div class="select-slider_container" data-select-slider-container>
                                        <div class="select-slider_slider-track" data-select-slider-slider-track></div>
                                        <label>
                                            <input type="range" name="select-slider-min" min="0" step="10" max="500" value="20" data-select-slider-input-decrement>
                                        </label>
                                        <label>
                                            <input type="range" name="select-slider-max" min="0" step="10" max="500" value="200" data-select-slider-input-increment>
                                        </label>
                                    </div>
                                    <span class="select-slider_values" data-select-slider-value-max>100</span>
                                </div>
                            </div>

                            <div class="select-slider-wrapper" data-select-slider-wrapper>
                                Пусковой ток (А)
                                <div class="select-slider-_content">
                                    <span class="select-slider_values" data-select-slider-value-min>0</span>
                                    <div class="select-slider_container" data-select-slider-container>
                                        <div class="select-slider_slider-track" data-select-slider-slider-track></div>
                                        <label>
                                            <input type="range" name="select-slider-min" min="0" step="10" max="500" value="20" data-select-slider-input-decrement>
                                        </label>
                                        <label>
                                            <input type="range" name="select-slider-max" min="0" step="10" max="500" value="200" data-select-slider-input-increment>
                                        </label>
                                    </div>
                                    <span class="select-slider_values" data-select-slider-value-max>100</span>
                                </div>
                            </div>

                            <div class="select-section_wrapper-label">
                                Габариты (Д*Ш*В, мм)
                                <div class="select-section" data-select-section>
                                    <span class="select-section_value" data-select-section-value>Выбрать</span>
                                    <div class="select-section_drop-menu" data-select-section-drop-menu>
                                        <div class="select-section_item-wrapper">
                                            <?php foreach ([1,2,3,4,5,6] as $item) { ?>
                                                <label class="select-section_item_label">
                                                    option <?= $item ?>
                                                    <input type="radio" value="option <?= $item ?>" name="select" data-select-section-item>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="select-section_wrapper-label">
                                Полярность
                                <div class="select-section" data-select-section>
                                    <span class="select-section_value" data-select-section-value>Выбрать</span>
                                    <div class="select-section_drop-menu" data-select-section-drop-menu>
                                        <div class="select-section_item-wrapper">
                                            <?php foreach ([1,2,3,4,5,6] as $item) { ?>
                                                <label class="select-section_item_label">
                                                    option <?= $item ?>
                                                    <input type="radio" value="option <?= $item ?>" name="select" data-select-section-item>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="select-section_wrapper-label">
                                Напряжение (B)
                                <div class="select-section" data-select-section>
                                    <span class="select-section_value" data-select-section-value>Выбрать</span>
                                    <div class="select-section_drop-menu" data-select-section-drop-menu>
                                        <div class="select-section_item-wrapper">
                                            <?php foreach ([1,2,3,4,5,6] as $item) { ?>
                                                <label class="select-section_item_label">
                                                    option <?= $item ?>
                                                    <input type="radio" value="option <?= $item ?>" name="select" data-select-section-item>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-showcase_filter_params_content" data-product-filter-content="battery-model">
                            <div class="select-section_wrapper-label">
                                Выберите марку
                                <div class="select-section" data-select-section>
                                    <span class="select-section_value" data-select-section-value>Выбрать</span>
                                    <div class="select-section_drop-menu" data-select-section-drop-menu>
                                        <div class="select-section_item-wrapper">
                                            <?php foreach ([1,2,3,4,5,6] as $item) { ?>
                                                <label class="select-section_item_label">
                                                    <span>option <?= $item ?></span>

                                                    <input type="radio" value="option <?= $item ?>" name="select" data-select-section-item>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="select-slider-wrapper" data-select-slider-wrapper>
                                Цена, в руб
                                <div class="select-slider-_content">
                                    <span class="select-slider_values" data-select-slider-value-min>0</span>
                                    <div class="select-slider_container" data-select-slider-container>
                                        <div class="select-slider_slider-track" data-select-slider-slider-track></div>
                                        <label>
                                            <input type="range" name="select-slider-min" min="0" step="10" max="500" value="20" data-select-slider-input-decrement>
                                        </label>
                                        <label>
                                            <input type="range" name="select-slider-max" min="0" step="10" max="500" value="200" data-select-slider-input-increment>
                                        </label>
                                    </div>
                                    <span class="select-slider_values" data-select-slider-value-max>100</span>
                                </div>
                            </div>

                            <div class="select-section_wrapper-label">
                                Модель
                                <div class="select-section" data-select-section>
                                    <span class="select-section_value" data-select-section-value>Выбрать</span>
                                    <div class="select-section_drop-menu" data-select-section-drop-menu>
                                        <div class="select-section_item-wrapper">
                                            <?php foreach ([1,2,3,4,5,6] as $item) { ?>
                                                <label class="select-section_item_label">
                                                    option <?= $item ?>
                                                    <input type="radio" value="option <?= $item ?>" name="select" data-select-section-item>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="select-section_wrapper-label">
                                Поколение
                                <div class="select-section" data-select-section>
                                    <span class="select-section_value" data-select-section-value>Выбрать</span>
                                    <div class="select-section_drop-menu" data-select-section-drop-menu>
                                        <div class="select-section_item-wrapper">
                                            <?php foreach ([1,2,3,4,5,6] as $item) { ?>
                                                <label class="select-section_item_label">
                                                    option <?= $item ?>
                                                    <input type="radio" value="option <?= $item ?>" name="select" data-select-section-item>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="select-section_wrapper-label">
                                Двигатель
                                <div class="select-section" data-select-section>
                                    <span class="select-section_value" data-select-section-value>Выбрать</span>
                                    <div class="select-section_drop-menu" data-select-section-drop-menu>
                                        <div class="select-section_item-wrapper">
                                            <?php foreach ([1,2,3,4,5,6] as $item) { ?>
                                                <label class="select-section_item_label">
                                                    option <?= $item ?>
                                                    <input type="radio" value="option <?= $item ?>" name="select" data-select-section-item>
                                                </label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="select-slider-wrapper" data-select-slider-wrapper>
                                Ёмкость (Ач)
                                <div class="select-slider-_content">
                                    <span class="select-slider_values" data-select-slider-value-min>0</span>
                                    <div class="select-slider_container" data-select-slider-container>
                                        <div class="select-slider_slider-track" data-select-slider-slider-track></div>
                                        <label>
                                            <input type="range" name="select-slider-min" min="0" step="10" max="500" value="20" data-select-slider-input-decrement>
                                        </label>
                                        <label>
                                            <input type="range" name="select-slider-max" min="0" step="10" max="500" value="200" data-select-slider-input-increment>
                                        </label>
                                    </div>
                                    <span class="select-slider_values" data-select-slider-value-max>100</span>
                                </div>
                            </div>

                            <div class="select-slider-wrapper" data-select-slider-wrapper>
                                Пусковой ток (А)
                                <div class="select-slider-_content">
                                    <span class="select-slider_values" data-select-slider-value-min>0</span>
                                    <div class="select-slider_container" data-select-slider-container>
                                        <div class="select-slider_slider-track" data-select-slider-slider-track></div>
                                        <label>
                                            <input type="range" name="select-slider-min" min="0" step="10" max="500" value="20" data-select-slider-input-decrement>
                                        </label>
                                        <label>
                                            <input type="range" name="select-slider-max" min="0" step="10" max="500" value="200" data-select-slider-input-increment>
                                        </label>
                                    </div>
                                    <span class="select-slider_values" data-select-slider-value-max>100</span>
                                </div>
                            </div>
                        </div>

                        <div class="product-showcase_filter_params_btn-wrapper">
                            <button type="submit" class="product-showcase_filter_params_btn-submit btn-green">Показать <span>343</span></button>
                            <button type="button" class="product-showcase_filter_params_btn-reset btn-invisible-with-border" data-product-showcase-filter-params-btn-reset>сбросить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="product-showcase_product-wrapper">
            <div class="product-showcase_product-items">
                <?php foreach ([1,2,3,4,5,6,7,8,9,10,11,12] as $item) { ?>
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
                <?php } ?>
            </div>


            <?php
            $url_page = 0;
            if(isset($_GET["page"])) {
                $url_page = $_GET["page"];
            }
            ?>
            <section class="pagination">
                <ul>
                    <li><a href="?page=<?= $url_page < 0 ? $url_page - 1 : 1; ?>"><span>Назад</span></a></li>
                    <li><a class="<?= $url_page === '1' ? 'active' : '' ?>" href="?page=1">1</a></li>
                    <li><a class="<?= $url_page === '2' ? 'active' : '' ?>" href="?page=2">2</a></li>
                    <li><a class="<?= $url_page === '3' ? 'active' : '' ?>" href="?page=3">3</a></li>
                    <li><a class="<?= $url_page === '4' ? 'active' : '' ?>" href="?page=4">4</a></li>
                    <li><a class="<?= $url_page === '5' ? 'active' : '' ?>" href="?page=5">5</a></li>
                    <li><a class="<?= $url_page === '6' ? 'active' : '' ?>" href="?page=6">6</a></li>
                    <li><a class="<?= $url_page === '7' ? 'active' : '' ?>" href="?page=7">7</a></li>
                    <li><a href="">...</a></li>
                    <li><a class="<?= $url_page === '22' ? 'active'  : '' ?>" href="?page=22">22</a></li>
                    <li><a href="?page=<?php if($url_page > 0 )echo $url_page + 1 ?>"><span>Вперёд</span></a></li>
                </ul>
            </section>
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
                    Нам опытный специалист проконсультирует вас и ответит на все интересующие вопросы
                </div>
                <button class="questions_help-item_btn-consultation" data-order-popup="get-a-consultation">Получить консультацию</button>
            </div>
        </div>
    </div>
</section>


<?php require 'footer.php' ?>