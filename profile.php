<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
include 'crud/modal.php';
include 'crud/func.php';
include 'crud/config.php';
include './uslugi/services.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png">
    <!-- анимация -->
    <link rel="stylesheet" type="text/css" href="css/animations.css">
    <link rel="stylesheet" type="text/css" href="css/ihover.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- header start -->
    <header class="shr-header">
        <!-- Навигация -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- навигационные ссылки -->
                <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="page-scroll cmn-t-underline" href="index.php">На главную</a></li>
                        <li><a class="page-scroll cmn-t-underline" href="#features">Личный кабинет</a></li>
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
                    <h1 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?>, <span class="shr-color">добро пожаловать в личный кабинет!
                        </span></h1>
                    <p><a style="color:#ffffff" href="#"> </br><?= $_SESSION['user']['email'] ?></a></p>
                    <a class="btn btn-default shr-download-btn" href="vendor/logout.php" role="button">Выход</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 shr-dis-none">
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- заголовок end -->

    <!-- тикеты start -->

    <span class="shr-features-area" id="features">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">
                        <br></br>
                        <span>Ваши тикеты</span>
                        <span class="shr-round"></span>
                    </h2>
                </div>
            </div>
    </span>

    <div class="container">
        <br>
        <div class="row">
            <div class="col mt-1">
                <?= $success ?>
                <button class="btn btn-success mb-1" data-toggle="modal" data-target="#Modal"><i class="fa fa-user-plus"></i></button>
                <table class="table shadow ">
                    <thead class="thead-dark">
                        <tr>
                            <th>№</th>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Описание вопроса</th>
                            <th>Действие</th>
                        </tr>
                        <?php foreach ($result as $value) { ?>
                            <tr>
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['name'] ?></td>
                                <td><?= $value['last_name'] ?></td>
                                <td><?= $value['pos'] ?></td>
                                <td>
                                    <a href="?edit=<?= $value['id'] ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?= $value['id'] ?>"><i class="fa fa-edit"></i></a>
                                    <a href="?delete=<?= $value['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?= $value['id'] ?>"><i class="fa fa-trash"></i></a>
                                    <?php require 'crud/modal.php'; ?>
                                </td>
                            </tr> <?php } ?>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <!-- Модальное окно создания тикета -->
    <div class="modal fade" tabindex="-1" role="dialog" id="Modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title">Создать тикет</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="" placeholder="Имя">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" value="" placeholder="Фамилия">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="pos" value="" placeholder="Описание вопроса">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Услуги -->
    <span class="shr-features-area" id="features">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">
                        <br></br>
                        <span>Ваши услуги</span>
                        <span class="shr-round"></span>
                    </h2>
                </div>
            </div>
    </span>

        <div class="container">
        <br>
        <div class="row">
            <div class="col mt-1">
                <?= $success ?>
                <table class="table shadow ">
                    <thead class="thead-dark">
                        <tr>
                            <th>Пакет</th>
                            <th>Описание</th>
                            <th>BYN</th>
                        </tr>
                        <?php
                        try {
                            $pdo = new PDO('mysql:dbname=baza; host=localhost', 'root', '');
                        } catch (PDOException $e) {
                            die($e->getMessage());
                        }

                        $sql = $pdo->prepare("SELECT * FROM `us`");
                        $sql->execute();
                        $result = $sql->fetchAll();

                        foreach ($result as $value) { ?>
                            <tr>
                                <td><?= $value['package'] ?></td>
                                <td><?= $value['text'] ?></td>
                                <td><?= $value['BYN'] ?></td>
                            </tr>
                        <?php } ?>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <!-- Разделитель -->
    <section class="shr-twitter-area">
        <div class="container">
            <div class="row"></div>
        </div>
    </section>

    <!-- Оставить отзыв -->
    <span class="shr-features-area" id="features">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">
                        <br></br>
                        <span>Оставте отзыв о нас!</span>
                        <span class="shr-round"></span>
                    </h2>
                </div>
            </div>
    </span>

    <!--форма отправки отзывов-->
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-12 text-center">
                <form action="reviews/store.php" method="post">
                    <input class="col-sm-12" type="text" name="name" placeholder="Ваше имя"> <br><br>
                    <input class="col-sm-12" type="text" name="title" placeholder="Тема"> <br><br>
                    <textarea class="col-sm-12" name="content" placeholder="Текст отзыва"></textarea><br><br>
                    <br>
                    <h2></h2>
                    <button class="btn btn-success mb-1" type="submit">Отправить отзыв</button>
                </form>
            </div>
        </div>
    </div>

    <!-- footer start -->
    <footer class=" shr-footer-area">
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