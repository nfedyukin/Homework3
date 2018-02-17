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
    <title>Задание 3</title>
</head>
<body>
<h1>Задание №3</h1>
<h2>Фотогалерея</h2>



<form style="border: 1px solid black" method="post" enctype="multipart/form-data" >
    Выберите картинку для загрузки: <input type="file" name="image"><br>
    <button type="submit" style="margin: 0px 15px 15px 15px">Добавить</button>
</form>

<?php
$img_list = array_slice(scandir($img_folder), 2);
//var_dump($img_list);

foreach ($img_list as $image){
    ?>
    <img src="<?php echo '/Homework3/img/' . $image ?>"><br>
    <?php
}
?>

</body>
</html>