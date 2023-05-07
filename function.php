<?php

function k(){
    echo "<br>";
}
//basic
function test(){
    echo "first function";
}
test();
k();

//with param
function test2($param){
echo $param;
}
test2("tested");
k();

//multiple param
function add($var , $var2){
return $var + $var2;
}

echo add(5,6);
k();

$res = add(10,11.6);

echo $res;
k();

$varr = 6;
echo $varr;
k();
$varr = 7;
echo $varr;
?>