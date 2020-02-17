<?php

//$c = ($b = false && $a == 1);
//
//var_dump($c);

$a = 0;
$b = 0;

if ($a = 3 > 0 || $b = 3 > 0) {
    $a ++;
    $b ++;
    echo $a . "\n";
    echo $b . "\n";
}
