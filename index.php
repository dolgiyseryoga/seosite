<?php
include './api/functions.php';
include './uslugi/services.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SeoSite.by </title>
    <link rel="icon" href="images/faviconhome.png">
    <!-- анимация -->
    <link rel="stylesheet" type="text/css" href="css/animations.css">
    <link rel="stylesheet" type="text/css" href="css/ihover.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- header start -->
    <header class="shr-header">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="index.html"><img class="shr-logo" src="images/logo/logo.bmp" alt="">
                    </a>
                </div>

                <!-- навигационные ссылки -->
                <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="page-scroll cmn-t-underline" href="#page-top">Главная</a>
                        </li>
                        <li>
                            <a class="page-scroll cmn-t-underline" href="#features">Разработка сайтов</a>
                        </li>
                        <li>
                            <a class="page-scroll cmn-t-underline" href="#describe">Продвижение</a>
                        </li>
                        <li>
                            <a class="page-scroll cmn-t-underline" href="#team">Портфолио</a>
                        </li>
                        <li>
                            <a class="page-scroll cmn-t-underline" href="#news">Новости</a>
                        </li>
                        <li>
                            <a class="page-scroll cmn-t-underline" href="#Contact">Контакты</a>
                        </li>
                        <li>
                            <a class="page-scroll cmn-t-underline" href="reviews/reviewpage.php">Отзывы клиентов</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

    </header>
    <!-- header end -->


    <!-- заголовок start -->
    <section class="shr-hero-area" id="hero">
        <div class="container">
            <div class="row animatedParent animateOnce">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h1> Если сайт - то только у нас!<span class="shr-color"> SeoSite.by </span></h1>
                    <p>Весь спектр услуг по созданию сайтов и seo-продвижение</p>
                    <a class="btn btn-default" href="/register.php" role="button">Зарегистрироваться</a>
                    <a class="btn btn-default" href="/login.php" role="button">Войти в личный кабинет</a>
                    <a class="btn btn-default shr-download-btn" href="./docs/price.docx" role="button">Скачать прайс</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 shr-dis-none">
                    <div class="shr-hero-content-img animated fadeInUpShort slow delay-250">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- заголовок end -->



    <!-- добро пожаловат start -->
    <section class="shr-welcome-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">
                        Добро пожаловать на <span>SeoSite.by</span>
                        <span class="shr-round"></span>
                    </h2>
                    <p class="shr-sub-title">Создаем по-настоящему эффективные сайты: внедряем актуальные IT-разработки, уделяем максимум внимания дизайну и юзабилити.</p>
                </div>
            </div>
            <div class="row animatedParent animateOnce">
                <div class="col-md-6 col-sm-6">
                    <div class="shr-welcome-content animated fadeInLeftShort slow delay-250">
                        <i class="fa fa-envira" aria-hidden="true"></i>
                        <h4>WEB-дизайн</h4>
                        <p>Мы осуществляем разработку и создание всех видов сайтов – от «визитки» до мощного многофункционального портала. Наши специалисты проконсультируют вас и помогут определиться с выбором.</p>
                    </div>
                    <div class="shr-welcome-content animated fadeInLeftShort slow delay-500">
                        <i class="fa fa-sign-language" aria-hidden="true"></i>
                        <h4>Программирование</h4>
                        <p>Приоритетной задачей при программировании сайта является автоматизация функционала, не требующего участия администратора сайта, с целью сэкономить время и силы владельца ресурса.</p>
                    </div>
                    <div class="shr-welcome-content animated fadeInLeftShort slow delay-750">
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <h4>SEO-продвижение</h4>
                        <p>Чтобы вывести сайт в топ необходима качественная внутренняя и внешняя оптимизация. Вот почему SEO-продвижение - это комплексная услуга, включающая в себя сразу несколько этапов работы.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 animated fadeInUpShort slow delay-250">
                    <img src="images/others/web_image.jpg">
                </div>
            </div>
        </div>
    </section>
    <!-- добро пожаловат start -->

    <!-- разработка и продвижение start -->
    <section class="shr-features-area" id="features">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">
                        Разработка и <span>Продвижение </span>
                        <span class="shr-round"></span>
                    </h2>
                </div>
            </div>
            <div class="row animatedParent animateOnce">
                <div class="col-md-4">
                    <div class="shr-left-features-text animated fadeInLeftShort slow delay-250">
                        <i class="fa fa-bell-o" aria-hidden="true"></i>
                        <h4>Маркетинговый анализ</h4>
                        <p>Мы анализируем целевую аудиторию, вашу нишу, и конкурентов. На основе этого подбирается шаблон и составляются ТЗ для подготовки контента.</p>
                    </div>
                    <div class="shr-left-features-text animated fadeInLeftShort slow delay-500">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <h4>Подготовка макета</h4>
                        <p>Подготовим уникальный дизайн, на основе ваших пожеланий или подберем подходящий шаблонный дизайн, адаптировав его под задачи вашего бизнеса.</p>
                    </div>
                    <div class="shr-left-features-text animated fadeInLeftShort slow delay-500">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <h4>SEO-продвижение</h4>
                        <p>Проведем аудит сайта, спроектируем посадочные страницы, создадим полезный контент и повысим доверие.Выведем сайт на лидирующие позиции в поиские.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shr-features-img animated fadeInUpShort slow">
                        <img src="images/others/mobile.png">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shr-right-features-text animated fadeInRightShort slow delay-250">
                        <i class="fa fa-diamond" aria-hidden="true"></i>
                        <h4>Верстка</h4>
                        <p>Переносим согласованный дизайн в HTML-код.</p>
                    </div>
                    <div class="shr-right-features-text animated fadeInRightShort slow delay-500">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        <h4>Программирование</h4>
                        <p>Сложные проекты зачастую требуют нетривиальных программных решений. Фильтры, брошенные корзины, выгрузка в Яндекс.Маркет, почтовые рассылки, работа с внешними приложениями, подключение сторонних библиотек, регистрация через соц.сети, калькуляторы, мультилендинги и много другое.</p>
                    </div>
                    <div class="shr-right-features-text animated fadeInLeftShort slow delay-500">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <h4>Контекстная реклама</h4>
                        <p>Продвигаем профили на Яндекс.Услугах и в других сервисах Яндекса. Только белое SEO и долговременные результаты. Предлагаем услуги гиперлокального продвижения, регионального и глобального SEO.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- разработка и продвижение end -->

    <!-- пакеты разработка сайтов start-->
    <section class="shr-pricing-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">
                        Пакеты <span>"Разработка сайта"</span>
                        <span class="shr-round"></span>
                    </h2>
                    <p class="shr-sub-title">Наша компания давно и успешно специализируется на разработке и создании сайтов. Если сложить вместе все годы работы каждого специалиста SeoSite.by в этой области, то получится опыт длиною в несколько десятилетий.</p>
                </div>
            </div>
            <div class="row animatedParent animateOnce">
                <div class="col-lg-4">
                    <div class="shr-table-col animated fadeInLeftShort slow delay-250">
                        <div class="shr-table-heading">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <h2>На готовом шаблоне</h2>
                            <h2> OpenCart, WordPress, Joomla<h2>
                        </div>
                        <h1>от 10 <span>рабочих дней</span></h1>
                        <ul class="list-group">
                            <li class="list-group-item">Сайты-визитки и корпоративные сайты на бесплатных CMS:</li>
                            <li class="list-group-item">Удобная и современная админка</li>
                            <li class="list-group-item">До 20 страниц</li>
                            <li class="list-group-item">Адаптивная верстка</li>

                        </ul>
                        <div class="shr-table-footer">
                            <form action="" method=POST>
                                <input type=submit name=button value='Сделать заказ'>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="shr-table-col animated fadeInUpShort slow">
                        <div class="shr-table-heading">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <h2>Индивидуальный дизайн</h2>
                            <h2>WordPress, Joomla, Bitrix</h2>
                        </div>
                        <h1>от 14 <span>рабочих дней</span></h1>
                        <ul class="list-group">
                            <li class="list-group-item">Сайты-визитки и корпоративные сайты на любых CMS:</li>
                            <li class="list-group-item">Индивидуальный дизайн, согласование и отрисовка</li>
                            <li class="list-group-item">До 15 страниц</li>
                            <li class="list-group-item">Адаптивная верстка</li>
                            <li class="list-group-item">Обучение администрированию</li>
                        </ul>
                        <div class="shr-table-footer">
                            <form action="" method=POST>
                                <input type=submit name=button1 value='Закачать'>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="shr-table-col animated fadeInRightShort slow delay-250">
                        <div class="shr-table-heading">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <h2>Интернет-магазин</h2>
                            <h2>WordPress, Joomla, Bitrix, Shop-Script</h2>
                        </div>
                        <h1>от 20 <span>рабочих дней</span></h1>
                        <ul class="list-group">
                            <li class="list-group-item">Функциональные и надежные решения для интернет маркетинга</li>
                            <li class="list-group-item">Разработка структуры сайта под дальнейшее продвижение</li>
                            <li class="list-group-item">Анализ конкурентов</li>
                            <li class="list-group-item">Структура сайта</li>
                            <li class="list-group-item">Яркий дизайн и индивидуальный функционал</li>
                            <li class="list-group-item">Подключение платежных систем</li>
                            <li class="list-group-item">Интеграция с 1C</li>
                            <li class="list-group-item">Программирование 15 часов</li>
                        </ul>
                        <div class="shr-table-footer">
                            <form action="" method=POST>
                                <input type=submit name=button2 value='Закачать'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- пакеты разработка сайтов end -->

    <!-- блок SEO-продвижение start -->
    <section class="shr-describe-area" id="describe">
        <div class="container">
            <div class="row animatedParent animateOnce">
                <div class="col-sm-6">
                    <div class="shr-discribe-col">
                        <h1>SEO-продвижение <span class="shr-color">Увеличим количество заявок с поиска</span></h1>
                        <p>Чтобы получить хорошие позиции в поисковых системах, сайт должен удовлетворять большому количеству параметров. Необходимо улучшать коммерческие факторы сайта, создавать дополнительные страницы и блоки контента, исправлять технические ошибки. В работе мы используем только "белые" методы продвижения, поэтому не обещаем попадание в топ-10 в определенные сроки. Мы гарантируем стабильный рост трафика и позиций в долгосрочной перспективе.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="shr-discribe-col animated fadeInUpShort slow delay-250">
                        <img src="images/others/mobile4.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- блок SEO-продвижение end -->

    <!-- пакеты продвижение сайтов start -->
    <section class="shr-pricing-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">
                        Пакеты <span>"Продвижение сайта"</span>
                        <span class="shr-round"></span>
                    </h2>
                    <p class="shr-sub-title">Заказав продвижение в «SeoSite.by», Вы получите комплексное развитие сайта, ориентированное на цели и задачи Вашего бизнеса.</p>
                </div>
            </div>
            <div class="row animatedParent animateOnce">
                <div class="col-lg-4">
                    <div class="shr-table-col animated fadeInLeftShort slow delay-250">
                        <div class="shr-table-heading">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <h2>Тариф "Лайт"</h2>
                        </div>
                        <h1>от 10 <span>рабочих дней</span></h1>
                        <ul class="list-group">
                            <li class="list-group-item">Продвижение корпоративного сайта, состоящего из 10-20-30 страниц или небольшого интернет-магазина.</li>
                            <li class="list-group-item">выполнение аудита;</li>
                            <li class="list-group-item">добавление дополнительных посадочных страниц под важные запросы компании;</li>
                            <li class="list-group-item">составление семантического ядра;</li>
                            <li class="list-group-item">заполнение мета-тегов;</li>
                            <li class="list-group-item">исправление технических ошибок;</li>
                            <li class="list-group-item">анализ коммерческих факторов и т.д.</li>
                        </ul>
                        <div class="shr-table-footer">
                            <form action="" method=POST>
                                <input type=submit name=button3 value='Закачать'>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="shr-table-col animated fadeInUpShort slow">
                        <div class="shr-table-heading">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <h2>Тариф "Медиум"</h2>
                        </div>
                        <h1>от 14 <span>рабочих дней</span></h1>
                        <ul class="list-group">
                            <li class="list-group-item">Продвижение интернет-магазина, состоящего из сотен страниц и тысяч товаров.</li>
                            <li class="list-group-item">применяются технологии, подобные для продвижения корпоративного сайта;</li>
                            <li class="list-group-item">выделяем несколько наиболее приоритетных категорий товара и начинаем работу именно с них;</li>
                            <li class="list-group-item">нарастающим итогом двигаемся по оставшимся категориям, параллельно осуществляя мониторинг и поддержку уже продвинутых категорий;</li>
                            <li class="list-group-item">закупка внешних ссылок, которые влияют на продвижение;</li>
                        </ul>
                        <div class="shr-table-footer">
                            <form action="" method=POST>
                                <input type=submit name=button4 value='Закачать'>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="shr-table-col animated fadeInRightShort slow delay-250">
                        <div class="shr-table-heading">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <h2>Тариф "VIP"</h2>
                        </div>
                        <h1>от 20 <span>рабочих дней</span></h1>
                        <ul class="list-group">
                            <li class="list-group-item">Продвижение VIP. Работа SEO-специалиста 2Х</li>
                            <li class="list-group-item">Внутренняя и внешняя оптимизация</li>
                            <li class="list-group-item">Поведенческие факторы ранжирования</li>
                            <li class="list-group-item">Коммерческие факторы ранжирования</li>
                            <li class="list-group-item">Контекстная реклама</li>
                            <li class="list-group-item">Продвижение в Google и Яндекс</li>
                            <li class="list-group-item">
                                <span style="color:red"><strong>Дарим 100 р. на Контекстную рекламу!<strong></span>
                            </li>

                        </ul>
                        <div class="shr-table-footer">
                            <form action="" method=POST>
                                <input type=submit name=button5 value='Закачать'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- пакеты продвижение сайтов end -->

    <!-- наши клиенты start -->
    <section class="shr-team-area" id="team">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">
                        Наши <span>Клиенты</span>
                        <span class="shr-round"></span>
                    </h2>
                    <p class="shr-sub-title">Ещё до учебы сделал пару работающих сайтов )) </p>
                </div>
            </div>
            <div class="row animatedParent animateOnce">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="shr-team-col animated fadeInUpShort slow delay-250">
                        <!-- hover -->

                    </div>
                </div>
                <div class="row animatedParent animateOnce">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="shr-team-col animated fadeInUpShort slow delay-250">
                            <!-- hover -->
                            <div class="ih-item square effect6 from_top_and_bottom">
                                <a href="https://juliabevz.com.au/">
                                    <div class="img">
                                        <img src="images/team/01.jpg" alt="img">
                                    </div>
                                    <div class="info">
                                        <h3>Julia Bevz<br>juliabevz.com.au</h3>
                                        <p>Photographer from Melbourne</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="shr-team-col animated fadeInUpShort slow delay-500">
                            <!-- hover -->
                            <div class="ih-item square effect6 from_top_and_bottom">
                                <a href="https://jujutsubelarus.by/">
                                    <div class="img">
                                        <img src="/images/team/02.png" alt="img">
                                    </div>
                                    <div class="info">
                                        <h3>Школа Джиу-джитсу.Беларусь<br>jujutsubelarus.by</h3>
                                        <p>Школа Джиу-джитсу в г. Новополоцк</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- наши клиенты end -->


    <!-- инфографика start -->
    <section class="shr-counter-area">
        <div class="container">
            <div class="row animatedParent animateOnce">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="shr-count-col animated fadeInUpShort slow delay-250">
                        <i class="fa fa-cloud-download" aria-hidden="true"></i>
                        <h3>Лет на рынке</h3>
                        <span class="count">10</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="shr-count-col animated fadeInUpShort slow delay-500">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        <h3>Сайтов находжится в продвижении</h3>
                        <span class="count">130</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="shr-count-col animated fadeInUpShort slow delay-750">
                        <i class="fa fa-shield" aria-hidden="true"></i>
                        <h3>Клиетов с нами на протяжении 3-х лет <strong>%</strong></h3>
                        <span class="count">65</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="shr-count-col animated fadeInUpShort slow delay-1000">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <h3>Довольных клиентов более</h3>
                        <span class="count">1000</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- инфографика end -->


    <!-- новости API start -->
    <section class="shr-news-area" id="news">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">IT <span>Новости</span>
                        <span class="shr-round"></span>
                    </h2>
                </div>
            </div>
            <div class="row animatedParent animateOnce">
                <div class="col-sm-12">
                    <div class="shr-news-col animated fadeInLeftShort slow delay-250">
                        <div class="shr-news-content">
                            <i class="fa fa-arrows-alt shr-awesome" aria-hidden="true"></i>
                            <h3>Последние новости в сфере компьютерных технологий</h3>
                            <?php showProducts(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- новости API end -->


    <!-- зеленый разделитель start -->
    <section class="shr-twitter-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"></div>
            </div>
        </div>
    </section>
    <!-- зеленый разделитель end -->


    <!-- подписка start -->
    <section class="shr-subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">
                        ПОДПИСАТЬСЯ на <span>Наши новости</span>
                        <span class="shr-round"></span>
                    </h2>
                    <p class="shr-sub-title">Будь в курсе самых свежих новостей в сфере Web-разработки и Seo-продвижения!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 text-center">
                    <form action="/subscribe/subscribe.php" method="post" class="navbar-form">
                        <div class="form-group">
                            <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Введите ваше имя">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Введите ваш email">
                            <button type="submit" name="submit_form" class="btn btn-default">Подписаться</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- подписка end -->



    <!-- наши контакты start -->
    <section class="shr-contact-area" id="Contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">
                        Наши<span>Контакты</span>
                        <span class="shr-round"></span>
                    </h2>]
                    <p class="shr-sub-title">Мы находимся: г. Минск, ул. Карла Либкнехта 68</p>
                    <h3><a style="color: #A0CE4E" class="shr-sub-title" href="tel:+375336143550">Позвоните нам!</a></h3>
                    <br>
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A55808aa5f80e8b96ca71c186fc9768f22c858aaacb32a6635efbd8d5856effaa&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
                    <br>
                    <br>
                    <h2 class="shr-section-title">
                        Обратная<span>связь</span>
                        <span class="shr-round"></span>
                    </h2>
                </div>
            </div>
            <div class="row animatedParent animateOnce">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 animated fadeInUpShort slow delay-250">
                    <form action="mail/mail.php" method="post">>
                        <input type="text" name="name" class="form-control" placeholder="Full Name">
                        <input type="text" name="phone" class="form-control" placeholder="телефон">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                        <input type="submit" value="Отправить сообщение" class="btn btn-primary btn-lg btn-block">Отправить сообщение</input>
                    </form>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </section>
    <!-- наши контакты end -->


    <!-- footer start -->
    <footer class="shr-footer-area">
        <div class="container animatedParent animateOnce">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="shr-copyright-text">Выполнил: <i class="fa fa-love"></i><a href="#">Студент группы BE106 Долгий Сергей</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->



    <!-- jQuery (необходим для плагинов Bootstrap) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/css3-animate-it.js"></script><!-- css3-анимация -->
    <script src="js/jquery.easing.min.js"></script> <!-- плавная прокрутка меню -->
    <script type="text/javascript" src="js/scroll_script.js"></script> <!-- гладкая прокрутка вверх  -->

    <!-- menu -->
    <script type="text/javascript">
        //Query, чтобы свернуть панель навигации при прокрутке
        $(window).scroll(function() {
            if ($(".navbar").offset().top > 50) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });

        //jQuery для функции прокрутки страниц
        $(function() {
            $('a.page-scroll').bind('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        });
    </script>
    <!-- /menu -->



    <!-- прокрутка -->
    <script type="text/javascript">
        $(document).ready(function($) {

            $('.count').each(function() {
                var $this = $(this);
                $this.data('target', parseInt($this.html()));
                $this.data('counted', false);
                $this.html('0');
            });

            $(window).bind('scroll', function() {
                var speed = 3000;
                $('.count').each(function() {
                    var $this = $(this);
                    if (!$this.data('counted') && $(window).scrollTop() + $(window).height() >= $this.offset().top) {
                        $this.data('counted', true);
                        $this.animate({
                            dummy: 1
                        }, {
                            duration: speed,
                            step: function(now) {
                                var $this = $(this);
                                var val = Math.round($this.data('target') * now);
                                $this.html(val);
                                if (0 < $this.parent('.value').length) {
                                    $this.parent('.value').css('width', val + '%');
                                }
                            }
                        });
                    }
                });
            }).triggerHandler('scroll');
        });
    </script>
    <!-- /прокрутка -->

    <a href="#top" id="toTop"><i class="fa fa-arrow-circle-up"></i></a>

</body>

</html>