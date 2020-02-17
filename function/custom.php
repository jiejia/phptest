<?php
function &myFunc()
{
    static $a = 5;
    return $a;
}

echo myFunc();


$b =  &myFunc();

$b = 100;

echo myFunc();
