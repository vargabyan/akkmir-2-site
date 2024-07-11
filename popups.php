

<section class="popup-wrapper" data-popup-wrapper="order-products">
    <form action="" class="popup-container" data-popup-container>
        <div class="popup_head">
            <div class="popup_header-wrapper">
                <h2 class="popup_header">
                    Заказать продукцию
                    <span>Мелкозернистый песок 0,7–1 мм</span>
                </h2>
                <button type="button" class="popup_btn-close" data-popup-btn-close></button>
            </div>
            <div class="popup_label-wrapper">
                <label class="popup_label"><input type="text" placeholder="Имя"></label>
                <label class="popup_label"><input type="tel" placeholder="Телефон" pattern="[0-9]{12}"></label>
            </div>
        </div>
        <div class="popup_footer">
            <button class="popup_btn-submit btn-grey" data-popup-btn-submit>Заказать</button>
            <p class="popup_subtitle">Нажимая на кнопку, вы даёте согласие на обработку персональных данных</p>
        </div>
    </form>
    <div class="success-container" data-success-container>
        <button class="popup_btn-close" data-popup-btn-close></button>
        <span class="success-container_icon"></span>
        <h2 class="popup_header">
            Заявка отправлена
            <span>Мы свяжемся с вами в ближайшее время</span>
        </h2>
        <button class="popup_btn-submit btn-grey" data-popup-btn-close>Готово</button>
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