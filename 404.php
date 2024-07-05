<?php require 'head.php' ?>

<?php
require 'breadcrumb.php';
breadcrumb([['url' => '', 'name' => '404']]);
?>


<section class="core-container warning">
    <h1 class="warning_header">404</h1>
    <p class="warning_text">Кажется что-то пошло не так! Страница, которую вы запрашиваете, не существует. Возможно она  устарела, была удалена, или был введен неверный адрес в адресной строке.</p>
    <div class="warning_link-wrapper">
        <a class="warning_link btn-green" href="catalog.php">В каталог</a>
        <a class="warning_link btn-invisible-with-border" href="/">Вернуться на главную</a>
    </div>
</section>


<section class="catalog-wrapper" data-page-type="404">
    <div class="core-container catalog">
        <div class="catalog_header-wrapper">
            <h2 class="catalog_header site-other-headers">Каталог</h2>
            <a class="catalog_link-go-to" href="catalog.php">Перейти в каталог</a>
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


<?php require 'footer.php' ?>