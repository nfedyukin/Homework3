<?php

//Функции для калькулятора

function calculate($x, $y, $op)
{
    switch ($op){
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
            break;
    }
    return $result;
}

//Функции для гостевой книги
function getComments()
{
    //читаем файл в массив
    $comments = file(__DIR__ . '/data/comments.txt', FILE_IGNORE_NEW_LINES);

    return $comments;
}


function saveComments($commentsArray)
{
    file_put_contents(__DIR__ . '/data/comments.txt', implode(PHP_EOL, $commentsArray));
}


// Функции для фотоальбома


function getImageList($path)
{
    // Получаем в массив список файлов, отбрасываем "." и ".." , выбираем по паттерну только избражения (jpeg|jpg|png)
    $imageList = preg_grep('~\.(jpeg|jpg|png)$~',array_slice(scandir($path), 2));
    return $imageList;
}
