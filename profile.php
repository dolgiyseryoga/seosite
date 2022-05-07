<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- animation -->
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
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="index.html"><img class="shr-logo" src="images/logo/logo.bmp" alt="">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li>
                            <a class="page-scroll cmn-t-underline" href="index.php">На главную</a>
                        </li>
                        <li>
                            <a class="page-scroll cmn-t-underline" href="#features">Личный кабинет</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

    </header>
    <!-- header end -->


    <!-- hero start -->
    <section class="shr-hero-area" id="hero">
        <div class="container">
            <div class="row animatedParent animateOnce">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h1 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?>, добро пожаловать в личный кабинет! <span class="shr-color">
    
                        </span></h1>
                    <p><a href="#"> </br><?= $_SESSION['user']['email'] ?></a></p>
                    <a class="btn btn-default shr-download-btn" href="vendor/logout.php" role="button">Выход</a>
                   
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 shr-dis-none">
                    <div class="shr-hero-content-img animated fadeInUpShort slow delay-250">
                        <!--<img src="images/others/hand.png"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero end -->

    <!-- features start -->
    <section class="shr-features-area" id="features">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">
                        Ваши услуги и <span>тикеты </span>
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
                    <div class="shr-left-features-text animated fadeInLeftShort slow delay-250">
                        <i class="fa fa-bell-o" aria-hidden="true"></i>
                        <h4>Подготовка эффективного контента</h4>
                        <p>Мы разработаем эффективный оффер, проработаем заголовки и тексты, отработаем возражения и представим ваш товар или услугу в выгодном свете.</p>
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
                </div>
            </div>
        </div>
    </section>
    <!-- features end -->

    <!-- footer start -->
    <footer class="shr-footer-area">
        <div class="container animatedParent animateOnce">
            
            <div class="row">
                <div class="col-sm-12 text-center">
                <p class="shr-copyright-text">Выполнил: <i class="fa fa-love"></i><a href="#">Студент группы BE106 Долгий Сергей</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/css3-animate-it.js"></script><!-- css3-animate-it -->
    <script src="js/jquery.easing.min.js"></script> <!-- menu smooth scroll -->
    <script type="text/javascript" src="js/scroll_script.js"></script> <!-- to top smooth scroll -->

    <!-- menu -->
    <script type="text/javascript">
        //jQuery to collapse the navbar on scroll
        $(window).scroll(function() {
            if ($(".navbar").offset().top > 50) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });

        //jQuery for page scrolling feature - requires jQuery Easing plugin
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

    <!-- counter -->
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
    <!-- /counter -->
    <a href="#top" id="toTop"><i class="fa fa-arrow-circle-up"></i></a>
</body>

</html>