<?php
// 递归打开test目录

$dir = './test';

function loopDir($dir)
{
    $handle = opendir($dir);

    while(false !== ($file = readdir($handle))) {  // false !== 是为了防止漏掉文件名为0的目录
        if ($file != '.' && $file != '..') {
//            echo $file . "\n";
            $filepath = $dir . '/' . $file;
            if (is_dir($filepath)) {
                loopDir($filepath);
            } else {
                echo $filepath . "\n";
            }
        }
    }
}
loopDir($dir);
