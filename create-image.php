<?php
/**
 * Created by PhpStorm.
 * User: Анютка
 * Date: 27.12.2016
 * Time: 18:48
 */

// Говорим браузеру, что файл надо выводить как картинку
header ("Content-type: image/png");

//создаем холст
$holst = imagecreate(300,300);

//создаем цвета
$creatColor = imagecolorallocate($holst, 0,0,0);
$creatColorLine = imagecolorallocate($holst, 0,250,0);
$creatColorEllips = imagecolorallocate($holst,255,255,0);
$creatColorQuart = imagecolorallocate($holst,240,0,255);
$creatColorPolygon = imagecolorallocate($holst, 0,0,255);

//рисуем треугольник
imageline($holst,150,100,200,200,$creatColorLine);
imageline($holst,150,100,100,200,$creatColorLine);
imageline($holst,100,200,200,200,$creatColorLine);

// Рисуем круг
imageellipse($holst,150,160,200,200,$creatColorEllips);

//рисуем квадрат
imagerectangle($holst,49,59,251,262,$creatColorQuart);

//рисуем многоугольник
$polygonArr = [
    100, 222,
    80, 155,
    115, 95,
    195, 95,
    228, 156,
    210, 222
];
imagepolygon($holst,$polygonArr,6,$creatColorPolygon);

// создаем само изображение из всего брахла выше
imagepng($holst);