#!/usr/bin/php
<?php
echo(__LINE__).PHP_EOL;
echo(__FILE__).PHP_EOL;
$str = <<<EOD
Многострочная переменная,
охватывающей несколько строк,
с использованием heredoc-синтаксиса.
EOD;
echo($str).PHP_EOL;
$str1 = 'Привет';
$str2 = 'МИР!';
echo 'Я изучаю PHP и первое это ' . $str1 . ', второе ' . $str2;
?>
