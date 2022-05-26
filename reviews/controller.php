<?php
//контроллер

require_once 'post.php'; //модель 

$posts = getPosts();     //вызов модели

include "reviews/views/index.show.php"; //показ модели
