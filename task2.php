<?php
$file_comments = __DIR__ . '\data\comments.txt';

$comments = file($file_comments);

if($_POST['comment']){
    array_push($comments, PHP_EOL . $_POST['comment']);
    file_put_contents($file_comments, $comments);
    $comments = file($file_comments);
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 2</title>
</head>
<body>
<h1>Задание №2</h1>
<h2>Гостевая книга</h2>

<?php
if (!empty($comments)){
    foreach ($comments as $comment){
        ?>
        <blockquote><article style="border: 1px solid gray">
                <?php echo $comment; ?>
            </article></blockquote>
        <?php
    }
}
?>

<form style="border: 1px solid black" method="post">
    <textarea style="width: 80%; margin: 15px 15px 15px 15px" name="comment"  rows="5"></textarea><br>
    <button type="submit" style="margin: 0px 15px 15px 15px">Добавить коментарий</button><br>
</form>


</body>
</html>