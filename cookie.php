<?php
/*Повторение
 оператора switch

$x =10;
$y = 20;

switch($x){
    case 1:
        echo 1;
    break;

    case $x>2 :
        echo 2;
    break;
    default :
        echo 'Ошибочка!';*/

/*Цикл for
for(инициализация;условие;итератор)
{
оператор
}*/

/*
 * Пример
 * $n=10;

for($i=0;$i<$n;$i++){
    echo yes;
}*/

/*$b = 10;
$a = 10;


    if($b > $a){
        echo 'много';
    }

    elseif($b<$a){
        echo 'мало';
    }
    elseif($b ===$a){
        echo 'Вы угадали';
    }*/

/*Списки-ловкий способсделать несклько
присваиваний за один раз */

/*Повторение массивов*/

/*$array = [
    100 => egg1,
    egg2,
    egg3
];
print_r($array);

/*цикл foreach-разбивает массив на
ключ-значение*/

/*foreach($array as $k => $v) {
    echo "ключ : [$k]; Значение:[$v] " . PHP_EOL;
}*/

/*Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
С помощью цикла foreach выведите эти слова в столбик.*/

/*$array = [
    'html',
    'css',
    'php',
    'js',
    'jq',
];

foreach($array as $value) {
    echo $value[1] . PHP_EOL;
}

/*
 * Изучение сериализации
 */
/*$user = [
    'name' => 'John',
    'year' => '24',
    'password' => '1234',
];

$str = serialize($user);
echo $str;
echo base64_encode($str);

//сериализация- способ преобразования сложной структуры в строку и наоброт

/*Лабораторная работа.Изучаю что такое куки и их работу

$visitCounter = 0;
if(isset($_COOKIE['visitCounter'])) {
    $visitCounter = date('d-m-Y H-i-s', $_COOKIE['visitCounter']);
}
$visitCounter++;

setcookie('visitCounter', time(), $visitCounter, 0x7FFFFFFF);*/

/*Изучаю хэширование и ее работу
$hash = password_hash("password", PASSWORD_BCRYPT);
echo $hash;

$pass = 'passwokrd';
if(password_verify($pass,$hash));
echo 'OK';
*/

/*Хэширование MD5-возвращает хэш в виде 32-символьного шестнадцатеричного числа.
$string = 'Apple';
if(md5($string) === '1afa148eb41f2e7103f21410bf48346c') {
    echo 'apple';
}
else {
    echo 'error';
}
*/



/*Trim-удаляет пробелы по краям
$text = ' Anna Sergey ';
$trim = trim($text);
echo $trim;*/

/*Регулярные выражения*/

