<?php
$text = "abdallh bedair Elzayat";

// length in php

echo strlen($text);

// limit in php
echo substr($text, 10, 8);
echo "<br>";
// replace in php
echo str_replace("bedair", "abdallh", $text);
echo "<br>";

//find thing in php
echo strpos($text, "bedair", 5);
echo "<br>";

//make thing upper case in php
echo strtoupper($text);
echo "<br>";

//make text lower case in php
echo strtolower($text);
echo "<br>";

// count word count in php
//echo wordcount($text);
// repeat string in php
echo str_repeat($text, 10);
echo "<br>";

//reverse string in php
echo strrev($text);
echo "<br>";

//emptey string in php true or false check if text empty or not
echo empty($text);


//practice string
$testtext = 'lorem ipsum dolor killed lorem ipsum dolor dolor killed lorem ipsum dolor  killed lorem ipsum dolor killed lorem ipsum dolor killed lorem ipsum dolor killed';
$part_of_string =substr($testtext,rand(0,50));
echo strlen($part_of_string);
?>


