<?php
// 日期时间
date_default_timezone_set('Africa/Abidjan');
$time = time(); // 返回自从 Unix 纪元（格林威治时间 1970 年 1 月 1 日 00:00:00）到当前时间的秒数。
echo $time;
echo "<br/>\n";
echo date('Y-m-d H:i:s', $time);
echo "<br/>\n";
echo strtotime('2019-1-3');
echo "<br/>\n";
//echo mktime(); mktime()用time()代理
echo microtime();

// IP函数
echo "<br/>\n###########################";
$ip = '192.79.0.22';
echo "<br/>\n";
echo ip2long($ip); // ip2long — 将 IPV4 的字符串互联网协议转换成长整型数字
echo "<br/>\n";
echo long2ip(ip2long($ip));

// 打印函数
echo "<br/>\n###########################";
echo "<br/>\n";
$a = '1112'; $b = '214124'; $c = 'awfawf';
print($a);
echo "<br/>\n";
echo $a, $b, $c;
echo "<br/>\n";
printf("%d and %f and %s", $a, $b, $c);
echo "<br/>\n";
echo sprintf("%d and %x", $a, $b);
echo "<br/>\n";
var_export($a); //  输出或返回一个变量的字符串表示
echo "<br/>\n";
var_dump($a);

// 字符串处理函数
echo "<br/>\n###########################";
echo "<br/>\n";
$a = '111 222 333';
$a = explode(' ', $a);
print_r($a);
echo "<br/>\n";
$a = join( ',', $a);
print_r($a);
echo "<br/>\n";
echo strrev($a);
echo "<br/>\n";
echo strstr($a, '3', false);
echo "<br/>\n";
echo strpos($a, '3');
echo "<br/>\n";
$num = 1231241.124124;
echo number_format($num,6, '.', ',');

// 数组函数
echo "<br/>\n###########################";
echo "<br/>\n";
$arr = ['a', 'wfa', 'd', '12'];
$arr2 = ['b', 'c', 'd', 'wq'];
print_r(array_keys($arr));
echo "<br/>\n";
print_r(array_values($arr));
echo "<br/>\n";
print_r(array_diff($arr, $arr2));  // 数组的差集
echo "<br/>\n";
print_r(array_intersect($arr, $arr2)); // 数组的交集
echo "<br/>\n";
print_r(array_merge($arr, $arr2)); // 数组的并集
echo "<br/>\n";
print_r($arr + $arr2);
echo "<br/>\n";
array_shift($arr);
print_r($arr);
echo "<br/>\n";
array_unshift($arr, '121');
print_r($arr);
echo "<br/>\n";
array_pop($arr2);
print_r($arr2);
echo "<br/>\n";
array_push($arr2, '222');
print_r($arr2);
