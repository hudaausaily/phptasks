<?php
error_reporting(0);
$count_my_page = ("counter.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);
echo $hits[0];


?>
