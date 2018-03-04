<?php
require_once __DIR__ . '/functions.php';

$actions  = ['+','-','*','/'];

$error='';
//Если заполнены оба поля, вычисляем результат
if(($_POST['x'] !== '') and ($_POST['y'] !== '')){

    $result = calculate($_POST['x'], $_POST['y'], $_POST['op']);
}
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 1</title>
</head>
<body>
<h1>Задание №1</h1>
<h2>Калькулятор</h2>

<form method="post" action="/Homework3/task1.php">
    <input type="text" name="x" value="<?php echo $x ?>">
    <select name="op" >
        <?php

        foreach ($actions as $act)
        {
            ?>
              <option name="<?php echo $act ?>" <?php echo ($act == $_POST['op']?'selected ':'') ?>><?php echo $act ?></option>
            <?php
        }
        ?>

    </select>
    <input type="text" name="y" value="<?php echo $y ?>">
    <button type="submit">=</button>
</form>

<?php
//var_dump($result);
//Вывод результата
if(isset($result))
    {
        ?><br><i> Результат:</i> <b><?php
        echo $result;
    }
?></b>


<br><br>
<a href="/Homework3/index.html">Назад</a>
</body>
</html>