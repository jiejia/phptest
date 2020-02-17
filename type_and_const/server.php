<?php

echo "<strong>当前执行脚本的文件名 PHP_SELF</strong>：" . $_SERVER['PHP_SELF'];  //
echo "<br/>";
echo "<strong>当前运行脚本所在的服务器的 IP 地址 SERVER_ADDR</strong>：" . $_SERVER['SERVER_ADDR'];
echo "<br/>";
echo "<strong>浏览当前页面的用户的 IP 地址 REMOTE_ADDR</strong>：" . $_SERVER['REMOTE_ADDR'];
echo "<br/>";
echo "<strong>服务器标识字符串 SERVER_SOFTWARE</strong>：" . $_SERVER['SERVER_SOFTWARE'];
echo "<br/>";
echo "<strong>请求页面时通信协议的名称和版本 SERVER_PROTOCOL</strong>：" . $_SERVER['SERVER_PROTOCOL'];
echo "<br/>";
echo "<strong>访问页面使用的请求方法 REQUEST_METHOD</strong>：" . $_SERVER['REQUEST_METHOD'];
echo "<br/>";
echo "<strong>请求开始时的时间戳 REQUEST_TIME_FLOAT</strong>：" . $_SERVER['REQUEST_TIME_FLOAT'];
echo "<br/>";
echo "<strong>查询字符串 QUERY_STRING</strong>：" . $_SERVER['QUERY_STRING']; // ?a=1
echo "<br/>";
echo "<strong>当前运行脚本所在的文档根目录 DOCUMENT_ROOT</strong>：" . $_SERVER['DOCUMENT_ROOT'];
echo "<br/>";
echo "<strong>当前请求头中 Accept: 项的内容 HTTP_ACCEPT</strong>：" . $_SERVER['HTTP_ACCEPT'];
echo "<br/>";
//echo $_SERVER['HTTP_ACCEPT_CHARSET'];
//echo "<br/>";
echo "<strong>当前请求头中 Accept-Encoding: 项的内容 HTTP_ACCEPT_ENCODING</strong>：" . $_SERVER['HTTP_ACCEPT_ENCODING'];
echo "<br/>";
echo "<strong>当前请求头中 Accept-Language: 项的内容 HTTP_ACCEPT_LANGUAGE</strong>：" . $_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo "<br/>";
echo "<strong>当前请求头中 Connection: 项的内容 HTTP_CONNECTION</strong>：" . $_SERVER['HTTP_CONNECTION'];
echo "<br/>";
echo "<strong>当前请求头中 Host: 项的内容 HTTP_HOST</strong>：" . $_SERVER['HTTP_HOST'];
echo "<br/>";
//echo $_SERVER['HTTP_REFERER'];
//echo "<br/>";
echo "<strong>服务端端口 HTTP_USER_AGENT</strong>：" . $_SERVER['HTTP_USER_AGENT'];
echo "<br/>";
//echo $_SERVER['HTTPS'];
//echo "<br/>";
//echo $_SERVER['REMOTE_HOST'];
//echo "<br/>";

//echo $_SERVER['REMOTE_USER'];
//echo "<br/>";
//echo $_SERVER['REDIRECT_REMOTE_USER'];
//echo "<br/>";
echo "<strong>当前执行脚本的绝对路径 SCRIPT_FILENAME</strong>：" . $_SERVER['SCRIPT_FILENAME'];
echo "<br/>";
echo "<strong>WEB服务端端口 SERVER_PORT</strong>：" . $_SERVER['SERVER_PORT'];
echo "<br/>";
//echo $_SERVER['SERVER_ADMIN'];
//echo "<br/>";
//echo "<strong>服务器版本和虚拟主机名的字符串</strong>：" . $_SERVER['SERVER_SIGNATURE'];
//echo "<br/>";
echo "<strong>服务端端口 PATH_TRANSLATED</strong>：" . $_SERVER['PATH_TRANSLATED'];
echo "<br/>";
echo "<strong>当前脚本路径 SCRIPT_NAME</strong>：" . $_SERVER['SCRIPT_NAME'];
echo "<br/>";
echo "<strong>URI指定访问的页面 REQUEST_URI</strong>：" . $_SERVER['REQUEST_URI'];
echo "<br/>";
echo "<strong>pathinfo PATH_INFO</strong>：" . $_SERVER['PATH_INFO'];
echo "<br/>";

