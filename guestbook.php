<?php
require_once __DIR__ . '/functions.php';

//Если $_POST['comment'] не null
if(isset($_POST['comment'])){
    $comments = getComments();

    //добавляем комментарий к массиву
    $comments[]  = $_POST['comment'];

    //сохраняем массив в файл
    saveComments($comments);

    header('Location: /Homework3/task2.php');
    //$comments = file($file_comments);

}
?>
