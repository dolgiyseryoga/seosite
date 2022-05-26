<?php

include "/profile.php";
require_once "post.php";


addPost($_POST['name'], $_POST['title'], $_POST['content']);

header("Location:/profile.php");
