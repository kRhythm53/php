<?php
$n= 1234567890;
$mask = '*';
echo substr($n, 0, 2) . str_repeat($mask, strlen($n) - 4) . substr($n, -2);
echo "\n"
?>