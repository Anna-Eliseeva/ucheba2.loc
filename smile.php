<?php
//говорим браузеру что файл надо открыть как картинку

header('Content-Type: image/png');

//создаем холст

$holst = imagecreate(500,500);

//создаем цвет

$colorHolst = imagecolorallocate($holst,0,0,0);//
$colorEllipse = imagecolorallocate($holst,242,255,0);//
$ul = imagecolorallocate($holst,242,255,0);
$colorSlapa = imagecolorallocate($holst,200,0,255);
//рисуем круг туловище

imageellipse($holst,250,200,200,200,$colorEllipse);


//рисуем глаз левый
imageellipse($holst,199,170,20,20,$colorEllipse);

//рисуем глаз правый
imageellipse($holst,299,170,20,20,$colorEllipse);

//рисуем улыбку

imagearc($holst, 240, 200, 160, 160, 25, 185, $ul);

//шляпа

imagefilledellipse($holst,270,50,150,50,$colorSlapa);
imagefilledrectangle($holst,350,80,160,100,$colorSlapa);




imagepng($holst);