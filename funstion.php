<?php
//function helloHandler($number1, $message){
//    return $number1+$message;
//}
//echo helloHandler(10,20);

function fullname($firstName, $lastName) {
    return $firstName . ' ' . $lastName;
}
echo fullname("abdallh","elzayat");

$student=[
    "name"=>"Student",
    "email"=>"student@gmail.com",
    "phone"=>"01212484233",
];

$color=["red","green","yellow","black"];
echo $color[0];
echo "<br>";
$student=[
    "name"=>"Student",
    "email"=>"student@gmail.com",
    "password"=>"password",
];
echo $student["name"];
echo "<br>";

echo $student["email"];
echo "<br>";

echo $student["password"];