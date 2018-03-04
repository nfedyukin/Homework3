<?php

$img_folder = __DIR__ . '/img/';

//Если $_FILES['image'] не null
if (isset($_FILES['image'])){
    // ... и нет ошибок
    if(0 == $_FILES['image']['error']){
        //... перемещаем изображение из временного каталога
        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            $img_folder .$_FILES['image']['name']
        );
    }
}
header('Location: /Homework3/task3.php')
?>