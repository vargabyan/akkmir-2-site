<?php require 'head.php' ?>

<?php
require 'breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'Контакты']]);
?>


<section class="core-container contacts">
    <h1 class="contacts_header site-header">Контакты</h1>
    <div class="contacts_item-wrapper">
        <div class="contacts_item">
            <span class="contacts_item_title">Связаться с нами</span>
            <a class="contacts_item_link-tel" href="tel:+7343261-62-62">+7 343 261-62-62</a>
            <div class="contacts_item_btn-wrapper">
                <button class="contacts_item_btn btn-invisible-with-border">Заказать звонок</button>
                <div class="contacts_messengers-wrapper">
                    <a class="contacts_messengers-item" href=""></a>
                    <a class="contacts_messengers-item" href=""></a>
                    <a class="contacts_messengers-item" href=""></a>
                </div>
            </div>
        </div>
        <div class="contacts_item">
            <p class="contacts_item_title-wrapper">
                <span class="contacts_item_title">Связаться с нами</span>
                Email для связи со специалистами по работе с юридическими лицами
            </p>
            <div class="contacts_item_link-wrapper">
                <a class="contacts_item_link-tel" href="tel:+7 965 539-48-63">+7 965 539-48-63</a>
                <a class="contacts_item_link-mail" href="mailto:2616262@akkmir.pro">2616262@akkmir.pro</a>
            </div>
        </div>
    </div>
    <div class="contacts_map-content">
        <div class="contacts_map_address-wrapper">
            <div class="contacts_map_address">
                <?php foreach ([1,2,3,4,5,6] as $item) { ?>
                    <div class="contacts_map_address_item">
                        <img class="contacts_map_address_item_img" src="/images/contacts-address-image-1.png" alt="image">
                        <div class="contacts_map_address_item_content">
                            <div class="contacts_map_address_item_grade-wrapper">
                                <?php foreach ([1,2,3,4,5] as $item_star) { ?>
                                    <span class="contacts_map_address_item_stars_item active"></span>
                                <?php } ?>
                                <span class="contacts_map_address_item_grade">4.34</span>
                            </div>
                            <div class="contacts_map_address_item_address-wrapper">
                                <p>
                                    Адрес:
                                    <span>ул. Посадская, д 23 (м. Геологическая)</span>
                                </p>
                                <p>
                                    Режим работы:
                                    <span>Ежедневно с 10:00 до 21:00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="contacts_map">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A95ddd0cff5f2d5f6586039c06523223ee7bdcaeda97b563191436cb74d569e22&amp;source=constructor" width="728" height="400" frameborder="0"></iframe>
        </div>
    </div>
</section>


<?php require 'footer.php' ?>