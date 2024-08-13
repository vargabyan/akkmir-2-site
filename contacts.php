<?php require 'head.php' ?>

<?php
require 'breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'Контакты']]);
?>


<?php
$data = file_get_contents('data.json');
$data_contacts_item = json_decode($data, true);
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
            <div class="contacts_map_address" data-map-contacts-item-wrapper>
                <?php foreach ($data_contacts_item['features'] as $item) { ?>
                    <div class="contacts_map_address_item" data-map-contacts-item="<?= $item['id'] ?>">
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
                <?php } ?>
            </div>
        </div>
        <div class="contacts_map">
            <div class="map" id="map"></div>
        </div>
    </div>
</section>


<?php require 'footer.php' ?>