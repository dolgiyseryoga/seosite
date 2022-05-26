<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Отзывы </title>
    <link rel="icon" href="/images/faviconhome.png">
    <!-- анимация -->
    <link rel="stylesheet" type="text/css" href="/css/animations.css">
    <link rel="stylesheet" type="text/css" href="/css/ihover.css">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link rel="stylesheet" type="text/css" href="/responsive.css">

    <link rel="stylesheet" type="text/css" href="/css/rev.css">
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
                            <a class="page-scroll cmn-t-underline" href="/index.php">Главная</a>
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
                    <h1> Отзывы наших клиентов!<span class="shr-color"></span></h1>
                    <a class="btn btn-default" href="/register.php" role="button">Зарегистрироваться</a>
                    <a class="btn btn-default" href="/login.php" role="button">Войти в личный кабинет</a>
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
                        <span>SeoSite.by</span>
                        <span class="shr-round"></span>
                    </h2>
                    <p class="shr-sub-title"><strong>«Каждый день мы задаем вопрос: «Как мы можем сделать наших клиентов счастливыми?<br>Какие инновации нам нужно использовать для этого?»</strong> <br>- Билл Гейтс, председатель правления и главный архитектор программного обеспечения корпорации Microsoft.</p>
                </div>
            </div>

            <?php
            //контроллер

            require_once 'post.php'; //модель 

            $posts = getPosts();     //вызов модели

            include "views/index.show.php"; //показ модели
            ?>


        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a class="btn btn-default" href="/index.php" role="button">Вернуться на главную</a>

                </div>
            </div>
            <br>
    </section>


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