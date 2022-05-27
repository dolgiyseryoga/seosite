<?php
function getPosts()
{
    $pdo = new PDO('mysql:dbname=baza; host=localhost', 'root', '');
    $statement = $pdo->prepare("SELECT* FROM posts");
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $posts;
}


function addPost($name, $title, $content)
{
    $pdo = new PDO('mysql:dbname=baza; host=localhost', 'root', '');
    $sql = "INSERT INTO posts (name,title, content) VALUES (:name, :title, :content)";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":name", $name);
    $statement->bindParam(":title", $title);
    $statement->bindParam(":content", $content);

    $statement->execute();
}
