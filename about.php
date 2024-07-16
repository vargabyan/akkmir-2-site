<?php require 'head.php' ?>

<?php
require 'breadcrumb.php';
breadcrumb([['url' => '', 'name' => 'о компании']]);
?>

<section class="core-container about">
    <h1 class="about_header site-header">Привет, <br> мы компания Мега <span class="about_logo">BATT</span></h1>
    <a class="about_btn btn-green" href="catalog.php">перейти в каталог</a>
</section>


<section class="core-container our-principles">
    <h2 class="our-principles_header site-other-headers">наши приципы</h2>
    <div class="our-principles_content">
        <div class="our-principles_item">
            <span class="our-principles_item_title">Надежность</span>
            <img class="our-principles_item_img" src="/images/icon-about-item-1.png" alt="icon">
            <p class="our-principles_item_text">
                Наша компания гарантирует качество и надежность всех предлагаемых аккумуляторов и аксессуаров, обеспечивая долгосрочную и стабильную работу вашего автомобиля.
            </p>
        </div>
        <div class="our-principles_item">
            <span class="our-principles_item_title">Экологическая ответственность</span>
            <p class="our-principles_item_text">
                Мы стремимся минимизировать негативное влияние нашей деятельности на окружающую среду, предлагая аккумуляторы и аксессуары, которые соответствуют высоким стандартам экологической безопасности.
            </p>
        </div>
    </div>
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