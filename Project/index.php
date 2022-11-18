<?php
//
//// echo "Privet";
// 
//$a = "Hi";
//$b = "there!";
//
//echo "<br>";
//
//echo $a . " " .  $b;
//$a = 4;
//$b = 5;
//echo "<br>";
//echo $a + $b . "<br>";
//echo $a - $b . "<br>";
//echo $a * $b . "<br>";
//echo $a / $b . "<br>";
//
//if ($a > $b) {
//    echo "Больше" . $a;
//}
//else if ($b > $a){
//     echo "Больше" . $b;
//}
//else {
//    echo "Значения равны";
//}
function summa($arg1, $arg2) {
    return $arg1 + $arg2;
}

function splitt($arg1, $arg2) {
   if ($arg2 == 0)
       echo "на ноль не делется";
       return $arg1 - $arg2; 
}
function умножение($arg1, $arg2) {
    return $arg1 * $arg2;
}
    function разность($arg1, $arg2) {
        if ($arg1 < $arg2)
            echo "не работает";
    return $arg2 - $arg1;
    }
function math($arg1, $arg2, $operation) {
    switch ($operation) {
      case "Сложение":
           echo summa($arg1, $arg2);
           break;
       case "Деление":
           echo splitt($arg1, $arg2);
           break;
            case "Умножение":
           echo умножение($arg1, $arg2);
            break;
           case "Разность":
           echo разность($arg1, $arg2);
            break;
        default:
            echo "Что-то не так";
    }
    
}
echo "Оператор switch" , math(10, 30, "Умножение");
echo "Оператор switch" , math(30, 10, "Разность");
//
//echo "<br>";
// 
echo "<br>";

$i = 0;
while($i<=100) {
    if ($i % 3 == 0)
       echo $i, " ";
    $i++;
}
//echo "<br>";
//
//$myArray =[];
//var_dump($myArray);
//
//echo "<br>";
//
//$myArray[] =  true; 
//$myArray[] = 1;
//$myArray[]= "Привет";

//var_dump($myArray);

$arr = ["html", "css", "php", "js", "mysql"];
//    for ($i = 0; $i < count($arr); $i++) {
//        echo $arr[$i], " ";
//    }
//echo "<br>";
//foreach ($arr as $item){
//    echo $item, " ";
//
$users = [];

$users[0] = [
    "name" => "Vlad",
    "email" => "vald@.ru"
];
$users[1] = [
    "name" => "Hike",
    "email" => "hiked@.ru"
];
$users[2] = [
    "name" => "Koko",
    "email" => "koko@.ru"
];





foreach ($users as $key => $item) {
echo "<br> Ключ", $key, "Значение <br>";
    foreach ($item as $value)
        echo $value, " ";
}
echo "<br>";
var_dump($users);
echo "<br>";
$conn =  mysqli_connect("localhost", "root", "", "horontne");
if ($conn)
    echo "Подключение к БД есть";

$login = $_GET['login'];
$password = $_GET['password'];

if ($login && $password) {
    echo "Данные введены";
    $sql = "SELECT * FROM users WHERE login='{$login}' AND password = '{$password}'";
    
    $query =  mysqli_query ($conn, $sql);
    
    $result = mysqli_fetch_assoc($query);
    var_dump($result);
    
    foreach($result as $key => $value){
        if($key =="full_name") {
            echo "Добро пожаловать," , $value;
                
        }
    }
    //http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=horontne&table=users
}
else
    echo "Нет данных";