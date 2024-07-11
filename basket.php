<?php require 'head.php' ?>

<?php
require 'breadcrumb.php';
breadcrumb([['url' => '/basket.php', 'name' => 'Оформление заказа']]);
?>


<section class="core-container basket active" data-basket-empty>
    <h1 class="basket_header site-header">Корзина</h1>
    <div class="basket_empty-content">
        <p class="basket_empty-content_text">В вашей корзине ничего нет</p>
        <a class="basket_empty-content_link btn-green" href="catalog.php">В каталог</a>
    </div>
</section>


<section class="core-container basket" data-basket-have-product>
    <h1 class="basket_header site-header">Оформление</h1>
    <form action="/form" method="post" class="basket_form">
        <div class="basket_form-content">
            <p class="basket_total-products-stock">
                Товары
                <span><span data-basket-total-products-stock>0</span> шт.</span>
            </p>
            <div class="basket_products-wrapper" data-basket-products-wrapper>
                <?php foreach ([1,2,3,4] as $item) { ?>
                    <div class="basket_products_item" data-basket-products-item>
                        <div class="basket_item_img-wrapper">
                            <img class="basket_item_img" src="/images/product-image-1.png" alt="image">
                        </div>
                        <p class="basket_item_title">Аккумулятор 6МТС Tyumen Battery Мото «Лидер» 9 Ач о.п.</p>
                        <div class="basket_item_label-wrapper active" data-basket-item-label-wrapper>
                            <label class="basket_item_label">
                                <input type="checkbox">
                                Сдать свой аккумулятор и получить скидку
                            </label>
                        </div>
                        <div class="basket_item_count-wrapper">
                            <div class="basket_item_count">
                                <p class="basket_item_price"><span data-basket-item-price>1 200</span> ₽</p>
                                <div class="counter active" data-basket-counter>
                                    <button type="button" class="counter_btn-decrement" data-basket-counter-decrement></button>
                                    <div class="counter_value">
                                        <span data-basket-counter-value>1</span>
                                        <label class="counter_value_label">
                                            <input type="tel" name="quantity" value="1" data-basket-counter-input>
                                        </label>
                                    </div>
                                    <button type="button" class="counter_btn-increment" data-basket-counter-increment></button>
                                </div>
                            </div>
                            <button class="basket_item_btn-delete active" data-basket-btn-delet-item></button>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="basket_total-price-wrapper">
                <div class="basket_total-price">Итого:<div><p data-basket-total-price>0</p> <span>₽</span></div></div>
                <div class="basket_total-price_need-installation-wrapper active" data-basket-total-price-need-installation-wrapper>
                    <label class="basket_total-price_need-installation_label">
                        <input type="checkbox">
                        <span class="basket_total-price_need-installation">Мне требуется установка</span>
                    </label>
                    <div class="icon-exclamation-point">
                        <div class="exclamation-point_notification">
                            <span class="exclamation-point_notification_title">Установка от нашей компании</span>
                            <p class="exclamation-point_notification_description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </p>
                            <a class="exclamation-point_notification_link" href="">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="basket_form-data active" data-basket-form-data>
            <p class="basket_form-data_title">форма для заявки</p>
            <div class="basket_form-data_content">
                <label class="basket_form-data_label">
                    <span>Имя*</span>
                    <input type="text" placeholder="Иван">
                </label>
                <label class="basket_form-data_label">
                    <span>Телефон*</span>
                    <input type="text" placeholder="8 900 000 00 00">
                </label>
                <div class="basket_form-data_delivery">
                    <p class="basket_form-data_delivery_title">Выберите способ получения</p>
                    <div class="basket_form-data_delivery_label-wrapper" data-basket-form-data-delivery-label-wrapper>
                        <label class="basket_form-data_delivery_label active" data-select-delivery-label>
                            Самовывоз
                            <input type="radio" name="select-delivery" value="Самовывоз">
                        </label>
                        <label class="basket_form-data_delivery_label" data-select-delivery-label>
                            Доставка
                            <input type="radio" name="select-delivery" value="Доставка">
                        </label>
                    </div>
                    <div class="select-section" data-select-section>
                        <span class="select-section_value" data-select-section-value>select</span>
                        <div class="select-section_drop-menu" data-select-section-drop-menu>
                            <div class="select-section_item-wrapper">
                                <?php foreach ([1,2,3,4,5,6,7,8,9,10,11,12,13] as $item) { ?>
                                    <label class="select-section_item_label">
                                        option <?= $item ?>
                                        <input type="radio" value="option <?= $item ?>" name="select" data-select-section-item>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <label class="basket_form-data_label">
                    Оставьте комментарий
                    <textarea name="" id="" cols="30" rows="4" placeholder="Комментарий"></textarea>
                </label>
                <button class="basket_form-submit btn-green" data-basket-form-submit>Оформить заявку</button>
            </div>
        </div>
        <div class="basket-successful" data-basket-successful>
            <span class="basket-successful_icon"></span>
            <span class="basket-successful_title">Заявка оформлена!</span>
            <p class="basket-successful_description">Ожидайте звонка менеджера или позвоните по номеру для уточнения деталей заказа</p>
            <a class="basket-successful_link" href="tel:89000000000">8 900 000 00 00</a>
        </div>
    </form>
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