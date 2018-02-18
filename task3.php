<?php
$img_folder = __DIR__ . '/img/';

if (isset($_FILES['image'])){
    if(0 == $_FILES['image']['error']){
        move_uploaded_file(
                $_FILES['image']['tmp_name'],
                $img_folder .$_FILES['image']['name']
        );
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
    <link href="style.css" rel="stylesheet">
    <title>Задание 3</title>
    <style>
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }

    </style>
</head>
<body>

<h1>Задание №3</h1>
<h2>Фотогалерея</h2>
<div style="width: 300px">
    <form style="border: 2px solid #4CAF50" method="post" enctype="multipart/form-data" >
        <!--<input type="hidden" name="MAX_FILE_SIZE" value="1000">-->
        <h3 style="margin-left: 10px">Добавить рисунок: </h3>
        <input type="button" style="margin-left: 10px" class="button button1" id="loadFile" value="1. Выбрать рисунок" onclick="document.getElementById('image').click();" />
        <input type="file" style="display:none;" id="image" name="image" accept="image/jpeg, image/png"><br>
        <button type="submit" style="margin-left: 10px" class="button button1">2. Добавить в библиотеку</button>
    </form>
</div>

<br>
<hr style="border: 1px solid #4CAF50">
<?php
$img_list = preg_grep('~\.(jpeg|jpg|png)$~',array_slice(scandir($img_folder), 2));
//var_dump($img_list);

foreach ($img_list as $image){
    ?>
    <img id="shadowbox" style="width: auto" src="<?php echo '/Homework3/img/' . $image ?>"><br><br>

    <?php
}
?>
<br><br>
<a href="/Homework3/index.html">Назад</a>


</body>
</html>