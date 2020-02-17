<?php
function test(&$a)
{
    $a = 100;
}

$a = 1;

test($a);

echo $a;
