<?php
$x='';
$y='';
if(isset($_POST['x']))
{
    $x = $_POST['x'];
}
if(isset($_POST['y']))
{
    $y = $_POST['y'];
}
if($x and $y){
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
            $result = $x / $y;
            break;
        default:
            $result = null;
            break;
    }
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
        <option name="+"<?php if($_POST['op'] == '+'){?> selected="selected"<?php;} ?>>+</option>
        <option name="-"<?php if($_POST['op'] == '-'){?> selected="selected"<?php;} ?>>-</option>
        <option name="*"<?php if($_POST['op'] == '*'){?> selected="selected"<?php;} ?>>*</option>
        <option name="/"<?php if($_POST['op'] == '/'){?> selected="selected"<?php;} ?>>/</option>
    </select>
    <input type="text" name="y" value="<?php echo $y ?>">
    <button type="submit">=</button>
</form>

<?php
if($result){
    ?><br><i> Результат:</i> <b><?php
    echo $result;
}
?></b>


<br><br>
<a href="/Homework3/index.html">Назад</a>
</body>
</html>