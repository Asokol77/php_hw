<?php
$fname = trim(fgets(STDIN));
$lname = trim(fgets(STDIN));
$patronim = trim(fgets(STDIN));

$fio = mb_strtoupper(substr($lname,0,2), "utf-8") . mb_strtoupper(substr($fname,0,2), "utf-8") . mb_strtoupper(substr($patronim,0,2), "utf-8") . PHP_EOL;
$fulname = mb_substr($fio,0,1) . mb_substr($lname,1,) . " " . mb_substr($fio,1,1) . mb_substr($fname,1,) . " " . mb_substr($fio,2,1) . mb_substr($patronim,1,) . PHP_EOL;
$surnameAndInitials = mb_substr($fio,0,1) . mb_substr($lname,1,) . " " . mb_substr($fio,1,1) . "." . mb_substr($fio,2,1) . "." . PHP_EOL;

echo $fulname;
echo $fio;
echo $surnameAndInitials;
?>
