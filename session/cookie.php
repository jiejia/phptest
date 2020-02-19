<?php
setcookie('a', 'haha', time() + 10000, '/phptest/', 'localhost', true, true);
print_r($_COOKIE);
//setcookie('a', 'aaaaaaaaa', time() - 1000, '/phptest/');
