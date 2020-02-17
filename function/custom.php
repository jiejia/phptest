<?php
function &myFunc(&$c)
{
    static $a = 5;
    return $a;
}

echo myFunc();
echo "<br/>";

$b =  &myFunc();

$b = 100;

echo myFunc();
