<?php

// 打开文件demo.txt,并在开头写入hello world

$file = './demo.txt';

$handle = fopen($file, 'r');

$content = fread($handle, filesize($file));

$content = 'Hello World' . $content;

fclose($handle);

$handle = fopen($file, 'w');

fwrite($handle, $content);

fclose($handle);

