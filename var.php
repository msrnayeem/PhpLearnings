<?php
$var = 5;
$var2 = 10;
$res = $var +$var2;
echo $var;
echo "<br>";
echo $res;
echo "<br>";

//bin to dec
$bin = 0b101111;
echo decbin($bin);
echo "<br>";
var_dump($bin);
echo "<br>";

//dec to bin
$dec = 458992;
echo decbin($dec);
echo "<br>";
var_dump($dec);
echo "<br>";

//dec to hexa
echo dechex($dec);
echo "<br>";

// hex dec
$hex = 0xABCDEF;
echo dechex($hex);
echo "<br>";
echo $hex;
echo "<br>";

//oct dec
$oct = 07654321;
echo $oct;
echo "<br>";
echo decoct($oct)
?>