<?php
class Person
{
    public $name = "张三";

}

$p1 = new Person();
xdebug_debug_zval('p1');

$p2 = $p1;
xdebug_debug_zval('p1');

$p2->name = "李四";
xdebug_debug_zval('p1');



