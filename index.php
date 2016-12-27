<?php

/*require __DIR__ . '/cookie.php';

if($visitCounter === 1){
    echo 'Welcome';
}
else{
    echo 'Приходите еще ' ;
}*/

/*Константы-коробочка,в которую можно положить значение один раз.

define('USER_NAME', 'Вася')
echo USER_NAME//Выводит Вася


лабораторная

переделайте стрку 'Сегодня' ,$day , 'число' , $mon, 'месяц' ,
в строку
echo 'Сегодня $day,число,$mon,месяц,$year год'
*/

/*$day = 5;
$mon = 'Sentember';
$year = '2016';

echo 'Сегодня', $day , 'число' , $mon , 'месяц';

echo 'Сегодня '/$day,' число, '/$mon,' месяц, '/$year,'год';*/

/*isset() возвращает true или false
empty*/



//$hour = 60;
//
//if($hour >= 0 && $hour <= 5) {
//    echo 'Good night';
//} elseif ($hour >= 6 && $hour <= 11) {
//    echo 'Good morning';
//} elseif ($hour >= 12 && $hour <= 17) {
//    echo 'Good day';
//} elseif ($hour >= 18 && $hour <= 23) {
//    echo 'Good evening';
//} else {
//    //echo 'ERROR';
//}
//
//echo ini_get('xdebug.trace_output_dir');
//ini_set('xdebug.trace_output_dir', 'trulala');
//
//echo "\n";
//echo ini_get('xdebug.trace_output_dir');

/*$day = (int)date('%w');

if($day === 0 && $day === 6) {
    echo 'Сегодня выходной день';
}
else {
    $time = (int)date('%H');

    if($time < 8) {
        echo 'Сегодня рабочий день, но работать еще рано';
    }
    elseif(($time >= 8 && $time <= 11) || ($time >= 13 && $time < 18)) {
        echo 'Сегодня рабочий день и сейчас рабочий час';
    }
    elseif($time >= 12 && $time < 13) {
        echo 'сегодня рабочий день но время обеда';
    }
    elseif($time >= 18) {
        echo 'Сегодня рабочий день но время работы окончено';
    }
}

unset($day,$time);

echo "\n=====================\n=====================\n=====================\n";


$SERVER = '/';
$SERVER = '/index';
$SERVER = '/about';
$SERVER = '/price';
$SERVER = '/trulala';

switch($SERVER){
    case '/about':
        include __DIR__ . '/pages/ebaut.php';
    break;

    case '/price':
        include __DIR__ . '/pages/price.php';
    break;

    default:
        include __DIR__ . '/pages/404.php';
    break;
}
$arr = [];

for($i = 0; $i <= 100; $i++) {
    if($i % 2 === 1){
        $arr1[] = $i;
    }
    else{
        $arr2[] = $i;
    }
}

$arr = array_merge($arr1,$arr2);


print_r($m);*/


//1.узнаем какой сегодня день
//2.перевести этот день в микрометку
// 3.узнать какой день пользователь хочет перевести в микрометку


/*$day = (int)date('%w');

if($day >9){
    echo 'Сегодня' .   $day;
}
else{
    echo 'lll';
}*/

//echo time(); // текущая метка времени
//echo "\n";
//echo date('Y-m-d H:i:s', '1483218000'); // вывод нужной метки времени по шаблону (в человекопонятное время)
//echo "\n";
//echo mktime(0, 0, 0, 1, 1, 2017); // получение метки времени по конкретной дате и времени

/*$finish = mktime(0, 0, 0, 1, 1, 2017);

$second = $finish - time();
$minuts = $second / 60;
$hours = $minuts / 60;
$days = $hours / 24;
$mounts = $days / 30; // todo: 30 || 31
$years = $mounts / 12;
echo 'до нового года осталось - ' . (int)$days;*/
