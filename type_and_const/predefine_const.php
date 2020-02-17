<?php
class predefineConst
{
    function test()
    {
        echo __FILE__;
        echo "<br/>\n";
        echo __CLASS__;
        echo "<br/>\n";
        echo __DIR__;
        echo "<br/>\n";
        echo __FUNCTION__;
        echo "<br/>\n";
        echo __LINE__;
        echo "<br/>\n";
        echo __METHOD__;
        echo "<br/>\n";
        echo __TRAIT__;
        echo "<br/>\n";
        echo __NAMESPACE__;
    }
}

$test = new predefineConst();
$test->test();
