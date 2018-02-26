<?php

$error='';
//Если заполнены оба поля, вычисляем результат
if(($_POST['x'] !== '') and ($_POST['y'] !== '')){
    $x = $_POST['x'];
    $y = $_POST['y'];
    switch ($_POST['op']){
        case '+':
            $result = $x + $y;
            break;
        case '-':
            $result = $x - $y;
            break;
        case '*':
            $result = $x * $y;
            break;
        case '/':
            if($y==0){
                $error = 'Divizion by zero!';
            } else {
                $result = $x / $y;
            }
            break;
        default:
            break;
    }
}

//Лямбда для выбора последней использовавшейся операции
$isSelected = function ($op)
{
    if($_POST['op'] == $op) return 'selected="selected"';
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

<form method="post">
    <input type="text" name="x" value="<?php echo $x ?>">
    <select name="op" >
        <option name="+"<?php echo $isSelected('+') ?>>+</option>
        <option name="-"<?php echo $isSelected('-') ?>>-</option>
        <option name="*"<?php echo $isSelected('*')?>>*</option>
        <option name="/"<?php echo $isSelected('/') ?>>/</option>
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
//ошибка
elseif ($error !== '')
    {
    ?><br><i> Error! </i> <b><?php
        echo $error;
    }
?></b>


<br><br>
<a href="/Homework3/index.html">Назад</a>
</body>
</html>