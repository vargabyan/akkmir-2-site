<?php require 'head.php' ?>

<?php
require 'breadcrumb.php';
breadcrumb([['url' => '/catalog.php', 'name' => 'Каталог'], ['url' => '', 'name' => 'Автомобильные аккумуляторы']]);
?>


<section class="core-container product-card">
    <h1 class="product-card_header site-header">Автомобильные <br> аккумуляторы</h1>
    <div class="product-card_tags-wrapper">
        <span>Аккумуляторы автомобильные</span>
        <span>Аккумуляторы мотоциклетные</span>
        <span>Аккумуляторы промышленные</span>
        <span>Клеммы и провода</span>
        <span>Крепёж для АКБ</span>
    </div>
    <div class="product-card_contents">
        <div class="product-card_filter-wrapper">
            <div class="product-card_links-menu-wrapper">
                <span class="product-card_links-menu-wrapper_title">Аккумуляторы и клеммы</span>
                <div class="product-card_links-menu">
                    <span class="product-card_links-menu_title">Аккумуляторы </span>
                    <ul class="product-card_links-menu_drop-down">
                        <li><a href="">Аккумуляторы автомобильные</a></li>
                        <li><a href="">Аккумуляторы мотоциклетные </a></li>
                        <li><a href="">Аккумуляторы промышленные</a></li>
                        <li><a href="">Аккумуляторы ...</a></li>
                    </ul>
                </div>
                <div class="product-card_links-menu">
                    <span class="product-card_links-menu_title">Клеммы</span>
                    <ul class="product-card_links-menu_drop-down">
                        <li><a href="">Клеммы автомобильные</a></li>
                        <li><a href="">Клеммы мотоциклетные </a></li>
                        <li><a href="">Клеммы промышленные</a></li>
                        <li><a href="">Клеммы ...</a></li>
                    </ul>
                </div>
            </div>
            <div class="product-card_filter">
                <div class="product-card_filter_title-wrapper">
                    <span class="product-card_links-menu-wrapper_title">Подбор АКБ</span>
                    <form action="" class="product-card_select-filter-params">
                        <label class="product-card_select-filter-params_label active">
                            По марке авто
                            <input type="radio" name="select-filter-params" checked value="По марке авто">
                        </label>
                        <label class="product-card_select-filter-params_label">
                            по меркам акб
                            <input type="radio" name="select-filter-params" value="по меркам акб">
                        </label>
                    </form>
                </div>
                <form action="" class="product-card_filter_params">
                    <div class="select-section_wrapper-label">
                        Бренд
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
                        Цена, в руб
                        <div class="select-slider-_content">
                            <span class="select-slider_values" data-select-slider-value-min>0</span>
                            <div class="select-slider_container" data-select-slider-container>
                                <div class="select-slider_slider-track" data-select-slider-slider-track></div>
                                <label>
                                    <input type="range" min="0" step="10" max="500" value="20" data-select-slider-input-decrement>
                                </label>
                                <label>
                                    <input type="range" min="0" step="10" max="500" value="200" data-select-slider-input-increment>
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
                        Цена, в руб
                        <div class="select-slider-_content">
                            <span class="select-slider_values" data-select-slider-value-min>0</span>
                            <div class="select-slider_container" data-select-slider-container>
                                <div class="select-slider_slider-track" data-select-slider-slider-track></div>
                                <label>
                                    <input type="range" min="0" step="10" max="500" value="20" data-select-slider-input-decrement>
                                </label>
                                <label>
                                    <input type="range" min="0" step="10" max="500" value="200" data-select-slider-input-increment>
                                </label>
                            </div>
                            <span class="select-slider_values" data-select-slider-value-max>100</span>
                        </div>
                    </div>

                    <div class="select-slider-wrapper" data-select-slider-wrapper>
                        Цена, в руб
                        <div class="select-slider-_content">
                            <span class="select-slider_values" data-select-slider-value-min>0</span>
                            <div class="select-slider_container" data-select-slider-container>
                                <div class="select-slider_slider-track" data-select-slider-slider-track></div>
                                <label>
                                    <input type="range" min="0" step="10" max="500" value="20" data-select-slider-input-decrement>
                                </label>
                                <label>
                                    <input type="range" min="0" step="10" max="500" value="200" data-select-slider-input-increment>
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

                    <div>
                        <button type="submit" class="btn-green">Показать <span>343</span></button>
                        <button type="button" class="btn-invisible-with-border">сбросить</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="product-card_product-wrapper">
            <div class="product-card_product-items">
                <?php foreach ([1,2,3,4,5,6,7,8,9,10,11,12] as $item) { ?>
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
                <?php } ?>
            </div>


            <?php
            $url_page = 0;
            if(isset($_GET["page"])) {
                $url_page = $_GET["page"];
            }
            ?>
            <section class="core-container pagination">
                <ul>
                    <li><a href="?page=<?= $url_page < 0 ? $url_page - 1 : 1; ?>">Назад</a></li>
                    <li><a class="<?= $url_page === '1' ? 'active' : '' ?>" href="?page=1">1</a></li>
                    <li><a class="<?= $url_page === '2' ? 'active' : '' ?>" href="?page=2">2</a></li>
                    <li><a class="<?= $url_page === '3' ? 'active' : '' ?>" href="?page=3">3</a></li>
                    <li><a class="<?= $url_page === '4' ? 'active' : '' ?>" href="?page=4">4</a></li>
                    <li><a class="<?= $url_page === '5' ? 'active' : '' ?>" href="?page=5">5</a></li>
                    <li><a class="<?= $url_page === '6' ? 'active' : '' ?>" href="?page=6">6</a></li>
                    <li><a class="<?= $url_page === '7' ? 'active' : '' ?>" href="?page=7">7</a></li>
                    <li><a href="">...</a></li>
                    <li><a class="<?= $url_page === '22' ? 'active'  : '' ?>" href="?page=22">22</a></li>
                    <li><a href="?page=<?php if($url_page > 0 )echo $url_page + 1 ?>">Вперёд</a></li>
                </ul>
            </section>
        </div>
    </div>
</section>


<?php require 'footer.php' ?>