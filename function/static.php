<?php
$count = 5;
function getCount()
{
    static $count;
    return ++ $count ;  // i++先做别的事，再自己加1，++i先自己加1，再做别的事情。
}
echo $count . "\n";
++ $count;


echo getCount() . "\n";
echo getCount() . "\n";

