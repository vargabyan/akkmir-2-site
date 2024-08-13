<!--<section class="popup-wrapper active_" data-popup-wrapper="Selection-of-batteries-by-a-specialist">-->
<!--    <form action="" class="popup-container active_" data-popup-container>-->
<!--        <button type="button" class="popup_btn-close" data-popup-btn-close></button>-->
<!--        <h2 class="popup_header">-->
<!--            Подбор АКБ специалистом-->
<!--        </h2>-->
<!--        <div class="popup_label-wrapper">-->
<!--            <label class="popup_label">-->
<!--                Имя*-->
<!--                <input type="text" placeholder="Имя">-->
<!--            </label>-->
<!--            <label class="popup_label">-->
<!--                Телефон*-->
<!--                <input type="tel" placeholder="8 900 000 00 00" pattern="[0-9]{12}">-->
<!--            </label>-->
<!--        </div>-->
<!--        <div class="popup_footer">-->
<!--            <button class="popup_btn-submit btn-green" data-popup-btn-submit>Оставить заявку</button>-->
<!--            <p class="popup_subtitle">Нажимая на кнопку, вы соглашаетесь с <a href="confidentiality.php">политикой конфиденциальности</a></p>-->
<!--        </div>-->
<!--    </form>-->
<!--    <div class="success-container" data-success-container>-->
<!--        <button class="popup_btn-close" data-popup-btn-close></button>-->
<!--        <span class="success-container_icon"></span>-->
<!--        <h2 class="popup_header">-->
<!--            Заявка успешно отправлена!-->
<!--            <span>Менеджер свяжется с вами в ближайшее время</span>-->
<!--        </h2>-->
<!--    </div>-->
<!--</section>-->

<?php
$data = file_get_contents('data.json');
$data_contacts_item = json_decode($data, true);
?>

<section class="popup-wrapper" data-popup-wrapper="pick-up-points">
    <div class="popup-container" data-popup-container>
        <button type="button" class="popup_btn-close" data-popup-btn-close></button>
        <h2 class="popup_header">
            Наличие в пунктах выдачи
        </h2>
        <div class="contacts_map-content-wrapper" data-popup-map-wrapper>
            <div class="contacts_map_switch-btn-wrapper">
                <button class="contacts_map_switch-btn_item active" data-popup-map-switch-btn="items">Списком</button>
                <button class="contacts_map_switch-btn_item" data-popup-map-switch-btn="map">На карте</button>
            </div>
            <div class="contacts_map-content">
                <div class="contacts_map_address-wrapper active" data-popup-map-content="items">
                    <div class="contacts_map_address" data-map-contacts-item-wrapper>
                        <?php foreach ($data_contacts_item['features'] as $item) { ?>
                            <div class="contacts_map_address_item" data-map-contacts-item="<?= $item['id'] ?>">
                                <div class="contacts_map_address_item_head">
                                    <img class="contacts_map_address_item_img" src="/images/contacts-address-image-1.png" alt="image">
                                    <div class="contacts_map_address_item_content">
                                        <div class="contacts_map_address_item_grade-wrapper">
                                                <span class="contacts_map_address_item_stars_item active"></span>
                                                <span class="contacts_map_address_item_stars_item active"></span>
                                                <span class="contacts_map_address_item_stars_item active"></span>
                                                <span class="contacts_map_address_item_stars_item active"></span>
                                                <span class="contacts_map_address_item_stars_item active"></span>
                                            <span class="contacts_map_address_item_grade">4.34</span>
                                        </div>
                                        <div class="contacts_map_address_item_address-wrapper">
                                            <p>
                                                Адрес:
                                                <span><?= $item['properties']['city'] ?> <?= $item['properties']['address'] ?></span>
                                            </p>
                                            <p>
                                                Режим работы:
                                                <span><?= $item['properties']['workHours'] ?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contacts_map_address_item_btn-wrapper">
                                    <button class="contacts_map_address_item_btn btn-green" data-order-popup="get-a-consultation">Оставить заявку</button>
                                    <div class="contacts_map_address_item_availability">
                                        Доступно:
                                        <span>Мало</span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="contacts_map" data-popup-map-content="map">
                    <div class="map" id="map"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="popup-wrapper" data-popup-wrapper="get-a-consultation">
    <form action="" class="popup-container active" data-popup-container>
        <button type="button" class="popup_btn-close" data-popup-btn-close></button>
        <h2 class="popup_header">
            Оставить заявку для консультации со специалистом
        </h2>
        <div class="popup_label-wrapper">
            <label class="popup_label">
                Имя*
                <input type="text" placeholder="Имя">
            </label>
            <label class="popup_label">
                Телефон*
                <input type="tel" placeholder="8 900 000 00 00" pattern="[0-9]{12}">
            </label>
        </div>
        <div class="popup_footer">
            <button class="popup_btn-submit btn-green" data-popup-btn-submit>Оставить заявку</button>
            <p class="popup_subtitle">Нажимая на кнопку, вы соглашаетесь с <a href="confidentiality.php">политикой конфиденциальности</a></p>
        </div>
    </form>
    <div class="success-container" data-success-container>
        <button class="popup_btn-close" data-popup-btn-close></button>
        <span class="success-container_icon"></span>
        <h2 class="popup_header">
            Заявка успешно отправлена!
            <span>Менеджер свяжется с вами в ближайшее время</span>
        </h2>
    </div>
</section>


<section class="popup-wrapper" data-popup-wrapper="order-selection">
    <form action="" class="popup-container" data-popup-container>
        <button type="button" class="popup_btn-close" data-popup-btn-close></button>
        <h2 class="popup_header">
            Заявка на подбор со специалистом
        </h2>
        <div class="popup_label-wrapper">
            <label class="popup_label">
                Имя*
                <input type="text" placeholder="Имя">
            </label>
            <label class="popup_label">
                Телефон*
                <input type="tel" placeholder="8 900 000 00 00" pattern="[0-9]{12}">
            </label>
        </div>
        <div class="popup_footer">
            <button class="popup_btn-submit btn-green" data-popup-btn-submit>Оставить заявку</button>
            <p class="popup_subtitle">Нажимая на кнопку, вы соглашаетесь с <a href="confidentiality.php">политикой конфиденциальности</a></p>
        </div>
    </form>
    <div class="success-container" data-success-container>
        <button class="popup_btn-close" data-popup-btn-close></button>
        <span class="success-container_icon"></span>
        <h2 class="popup_header">
            Заявка успешно отправлена!
            <span>Менеджер свяжется с вами в ближайшее время</span>
        </h2>
    </div>
</section>


<section class="popup-wrapper" data-popup-wrapper="question-to-an-experienced-specialist">
    <form action="" class="popup-container" data-popup-container>
        <button type="button" class="popup_btn-close" data-popup-btn-close></button>
        <div class="popup_head">
            <div class="popup_header-wrapper">
                <h2 class="popup_header">Задайте свой вопрос опытному специалисту</h2>
            </div>
            <div class="popup_label-wrapper">
                <label class="popup_label">
                    Имя*
                    <input type="text" placeholder="Имя">
                </label>
                <label class="popup_label">
                    Телефон*
                    <input type="tel" placeholder="8 900 000 00 00" pattern="[0-9]{12}">
                </label>
                <label class="popup_label">
                    Задать свой вопрос
                    <textarea name="" id="" placeholder="Задать свой вопрос"></textarea>
                </label>
            </div>
        </div>
        <div class="popup_footer">
            <button class="popup_btn-submit btn-green" data-popup-btn-submit>Оставить заявку</button>
            <p class="popup_subtitle">Нажимая на кнопку, вы соглашаетесь с <a href="confidentiality.php">политикой конфиденциальности</a></p>
        </div>
    </form>
    <div class="success-container" data-success-container>
        <button class="popup_btn-close" data-popup-btn-close></button>
        <span class="success-container_icon"></span>
        <h2 class="popup_header">
            Заявка успешно отправлена!
            <span>Менеджер свяжется с вами в ближайшее время.</span>
        </h2>
    </div>
</section>


<!--<section class="popup-wrapper active_" data-popup-wrapper="order-products">-->
<!--    <form action="" class="popup-container active_" data-popup-container>-->
<!--        <button type="button" class="popup_btn-close" data-popup-btn-close></button>-->
<!--        <div class="popup_head">-->
<!--            <div class="popup_header-wrapper">-->
<!--                <h2 class="popup_header">Оставьте свой отзыв</h2>-->
<!--            </div>-->
<!--            <div class="popup_label-wrapper">-->
<!--                <div class="popup_label">-->
<!--                    Поставьте рейтинг-->
<!--                    <div class="popup_grade-wrapper" data-grade-wrapper>-->
<!--                        <label class="popup_grade_star_label" data-grade-star-label>-->
<!--                            <input type="checkbox" id="1">-->
<!--                        </label>-->
<!--                        <label class="popup_grade_star_label" data-grade-star-label>-->
<!--                            <input type="checkbox" id="2">-->
<!--                        </label>-->
<!--                        <label class="popup_grade_star_label" data-grade-star-label>-->
<!--                            <input type="checkbox" id="3">-->
<!--                        </label>-->
<!--                        <label class="popup_grade_star_label" data-grade-star-label>-->
<!--                            <input type="checkbox" id="4">-->
<!--                        </label>-->
<!--                        <label class="popup_grade_star_label" data-grade-star-label>-->
<!--                            <input type="checkbox" id="5">-->
<!--                        </label>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <label class="popup_label">-->
<!--                    Имя*-->
<!--                    <input type="text" placeholder="Имя">-->
<!--                </label>-->
<!--                <label class="popup_label">-->
<!--                    Телефон*-->
<!--                    <input type="tel" placeholder="8 900 000 00 00" pattern="[0-9]{12}">-->
<!--                </label>-->
<!--                <label class="popup_label">-->
<!--                    Напишите отзыв-->
<!--                    <textarea name="" id="" placeholder="Здесь может быть ваш отзыв"></textarea>-->
<!--                </label>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="popup_footer">-->
<!--            <button class="popup_btn-submit btn-green" data-popup-btn-submit>Оставить заявку</button>-->
<!--            <p class="popup_subtitle">Нажимая на кнопку, вы соглашаетесь с <a href="confidentiality.php">политикой конфиденциальности</a></p>-->
<!--        </div>-->
<!--    </form>-->
<!--    <div class="success-container" data-success-container>-->
<!--        <button class="popup_btn-close" data-popup-btn-close></button>-->
<!--        <span class="success-container_icon"></span>-->
<!--        <h2 class="popup_header">-->
<!--            Заявка успешно отправлена!-->
<!--            <span>Менеджер свяжется с вами в ближайшее время.</span>-->
<!--        </h2>-->
<!--    </div>-->
<!--</section>-->


<!--<section class="popup-wrapper active_" data-popup-wrapper="order-products">-->
<!--    <form action="" class="popup-container active_" data-popup-container>-->
<!--        <button type="button" class="popup_btn-close" data-popup-btn-close></button>-->
<!--        <div class="popup_head">-->
<!--            <div class="popup_header-wrapper">-->
<!--                <h2 class="popup_header">Оставьте свой отзыв</h2>-->
<!--            </div>-->
<!--            <div class="popup_label-wrapper">-->
<!--                <label class="popup_label">-->
<!--                    Имя*-->
<!--                    <input type="text" placeholder="Имя">-->
<!--                </label>-->
<!--                <label class="popup_label">-->
<!--                    Телефон*-->
<!--                    <input type="tel" placeholder="8 900 000 00 00" pattern="[0-9]{12}">-->
<!--                </label>-->
<!--                <div class="popup_wrapper-data_delivery">-->
<!--                    <p class="popup_wrapper-data_delivery_title">Выберите способ получения</p>-->
<!--                    <div class="popup_wrapper-data_delivery_label-wrapper" data-delivery-label-wrapper>-->
<!--                        <label class="popup_wrapper-data_delivery_label active" data-select-delivery-label="delivery">-->
<!--                            Самовывоз-->
<!--                            <input type="radio" name="select-delivery" value="Самовывоз">-->
<!--                        </label>-->
<!--                        <label class="popup_wrapper-data_delivery_label" data-select-delivery-label="pickup">-->
<!--                            Доставка-->
<!--                            <input type="radio" name="select-delivery" value="Доставка">-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="select-section active" data-select-section data-select-delivery-wrapper="delivery">-->
<!--                        <span class="select-section_value" data-select-section-value>Пункты выдачи заказов</span>-->
<!--                        <div class="select-section_drop-menu" data-select-section-drop-menu>-->
<!--                            <div class="select-section_item-wrapper">-->
<!--                                --><?php //foreach ([1,2,3,4,5,6,7,8,9,10,11,12,13] as $item) { ?>
<!--                                        <div class="select-section_item" data-popup-select-section-item>-->
<!--                                            <label class="select-section_item_label">-->
<!--                                                <span></span>-->
<!--                                                <input type="radio" value="ул. Посадская, д 23 (м. Геологическая" name="select">-->
<!--                                            </label>-->
<!--                                            <div class="select-section_item_title-wrapper">-->
<!--                                                <span class="select-section_item_title" data-popup-select-section-item-value>ул. Посадская, д 23 (м. Геологическая)</span>-->
<!--                                                <p class="select-section_item_address">-->
<!--                                                    Режим работы: <span>Ежедневно 10:00 - 19:00</span>-->
<!--                                                </p>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                --><?php //} ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="popup_search-section active_" data-select-delivery-wrapper="pickup" data-popup-search-section>-->
<!--                        <label class="popup_label">-->
<!--                            <input type="text" placeholder="Адрес доставки" data-popup-search-input>-->
<!--                        </label>-->
<!--                        <div class="popup_search-section_items-wrapper" data-popup-search-items-wrapper>-->
<!--                            <span>Г. Екатеринбург, Ул. Ткачей</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <label class="popup_label">-->
<!--                    Напишите отзыв-->
<!--                    <textarea name="" id="" placeholder="Здесь может быть ваш отзыв"></textarea>-->
<!--                </label>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="popup_footer">-->
<!--            <button class="popup_btn-submit btn-green" data-popup-btn-submit>Оставить заявку</button>-->
<!--            <p class="popup_subtitle">Нажимая на кнопку, вы соглашаетесь с <a href="confidentiality.php">политикой конфиденциальности</a></p>-->
<!--        </div>-->
<!--    </form>-->
<!--    <div class="success-container" data-success-container>-->
<!--        <button class="popup_btn-close" data-popup-btn-close></button>-->
<!--        <span class="success-container_icon"></span>-->
<!--        <h2 class="popup_header">-->
<!--            Заявка успешно отправлена!-->
<!--            <span>Менеджер свяжется с вами в ближайшее время.</span>-->
<!--        </h2>-->
<!--    </div>-->
<!--</section>-->


<section class="popup-wrapper" data-popup-wrapper="Buy-in-one-click">
    <form action="" class="popup-container" data-popup-container>
        <button type="button" class="popup_btn-close" data-popup-btn-close></button>
        <div class="popup_head">
            <div class="popup_header-wrapper">
                <h2 class="popup_header">Купить в 1 клик</h2>
            </div>
            <div class="popup_label-wrapper">
                <div class="popup_product-wrapper">
                    <div class="popup_product">
                        <img class="popup_product_img" src="/images/product-image-1.png" alt="image">
                        <span>
                            Аккумулятор ZEUS SUPER AGM 20 Ач о.п. (YTX20L-BS) СУПЕР ЦЕНА
                        </span>
                    </div>
                    <span class="popup_product_title">итого: 20 550 ₽</span>
                </div>
                <label class="popup_label">
                    Имя*
                    <input type="text" placeholder="Имя">
                </label>
                <label class="popup_label">
                    Телефон*
                    <input type="tel" placeholder="8 900 000 00 00" pattern="[0-9]{12}">
                </label>
                <div class="popup_wrapper-data_delivery">
                    <p class="popup_wrapper-data_delivery_title">Выберите способ получения</p>
                    <div class="popup_wrapper-data_delivery_label-wrapper" data-delivery-label-wrapper>
                        <label class="popup_wrapper-data_delivery_label active" data-select-delivery-label="delivery">
                            Самовывоз
                            <input type="radio" name="select-delivery" value="Самовывоз">
                        </label>
                        <label class="popup_wrapper-data_delivery_label" data-select-delivery-label="pickup">
                            Доставка
                            <input type="radio" name="select-delivery" value="Доставка">
                        </label>
                    </div>
                    <div class="select-section active" data-select-section data-select-delivery-wrapper="delivery">
                        <span class="select-section_value" data-select-section-value>Пункты выдачи заказов</span>
                        <div class="select-section_drop-menu" data-select-section-drop-menu>
                            <div class="select-section_item-wrapper">
                                <div class="select-section_item" data-popup-select-section-item>
                                    <label class="select-section_item_label_address-delivery">
                                        <span class="select-section_item_label_address-delivery_title" data-popup-select-section-item-value>ул. Посадская, д 23 (м. Геологическая)</span>
                                        <input type="radio" value="ул. Посадская, д 23 (м. Геологическая)" name="select">
                                        <span class="select-section_item_address-delivery_status">
                                            Доступно: <span class="redd">Мало</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="select-section_item" data-popup-select-section-item>
                                    <label class="select-section_item_label_address-delivery">
                                        <span class="select-section_item_label_address-delivery_title" data-popup-select-section-item-value>ул. Посадская, д 23 (м. Геологическая)</span>
                                        <input type="radio" value="ул. Посадская, д 23 (м. Геологическая)" name="select">
                                        <span class="select-section_item_address-delivery_status">
                                            Доступно: <span class="yellow">Достаточно</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="select-section_item" data-popup-select-section-item>
                                    <label class="select-section_item_label_address-delivery">
                                        <span class="select-section_item_label_address-delivery_title" data-popup-select-section-item-value>ул. Посадская, д 23 (м. Геологическая)</span>
                                        <input type="radio" value="ул. Посадская, д 23 (м. Геологическая)" name="select">
                                        <span class="select-section_item_address-delivery_status">
                                            Доступно: <span>Много</span>
                                        </span>
                                    </label>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popup_search-section active_" data-select-delivery-wrapper="pickup" data-popup-search-section>
                        <label class="popup_label">
                            <input type="text" placeholder="Адрес доставки" data-popup-search-input>
                        </label>
                        <div class="popup_search-section_items-wrapper" data-popup-search-items-wrapper>
                            <span>Г. Екатеринбург, Ул. Ткачей</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup_footer">
            <button class="popup_btn-submit btn-green" data-popup-btn-submit>Оставить заявку</button>
            <p class="popup_subtitle">Нажимая на кнопку, вы соглашаетесь с <a href="confidentiality.php">политикой конфиденциальности</a></p>
        </div>
    </form>
    <div class="success-container" data-success-container>
        <button class="popup_btn-close" data-popup-btn-close></button>
        <span class="success-container_icon"></span>
        <h2 class="popup_header">
            Заявка успешно отправлена!
            <span>Менеджер свяжется с вами в ближайшее время.</span>
        </h2>
    </div>
</section>


<?php
$response_data_cities = [
    'Екатеринбург',
    'Нижний Тагил',
    'Первоуральск',
    'Полевской',
    'Серов',
    'Сысерть',
    'Екатеринбург',
    'Нижний Тагил',
    'Первоуральск',
    'Полевской',
    'Серов',
    'Сысерть',
    'Екатеринбург',
    'Нижний Тагил',
    'Первоуральск',
    'Полевской',
    'Серов',
    'Сысерть',
]
?>


<section class="popup-wrapper" data-popup-wrapper data-popup-select-city>
    <div class="popup-container popup-select" data-popup-container>
        <button class="popup_btn-close" data-popup-btn-close></button>
        <h2 class="popup_header">
            Выберите <br> свой город
        </h2>
        <label class="popup_label-input-search">
            <input type="text" placeholder="поиск" data-popup-select-search-input>
        </label>
        <form class="popup_form-select" action="">
            <?php foreach ($response_data_cities as $item) { ?>
                <label class="popup_form-select_label" data-popup-select-input>
                    <?= $item ?>
                    <input type="radio" value="<?= $item ?>" name="city">
                </label>
            <?php } ?>
        </form>
    </div>
</section>