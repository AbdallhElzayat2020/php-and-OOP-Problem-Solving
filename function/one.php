<?php

// problem solving

// 2numbers (1,20)
// loop from 1 - 20
//print Number
$sum=0;
$start=rand(1,10);
$end=rand(20,30);
for ($i=$start; $i<=$end; $i++) {
    if($i%2==0) {
        echo $i . "\n";
        $sum=$sum+$i;
    }
}
echo $sum;