<?php
// quote_variable

$a = range(0, 1000);
var_dump(memory_get_usage());

// COW机制 copy on write，只有修改$a时候，$a才会新开一块地址空间
$b = &$a; // 引用&代表$a和$b永远指向同一个地址空间
var_dump(memory_get_usage());

$a = range(0, 1000); //
var_dump(memory_get_usage());

