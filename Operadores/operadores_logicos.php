<?php

#AND
$a = true and true;
var_dump($a); //bool(true)
echo '<br/>';
$b = false and true; // bool(false)
var_dump($b);
echo '<br/>';

$c = false && false;
var_dump($c); //bool(false)
echo '<br/>';
$d = true && false; // bool(false)
var_dump($d);
echo '<br/>';

#OR
$e = true or true;
var_dump($e); //bool(true)
echo '<br/>';
$f = false or true; // bool(false)
var_dump($f);
echo '<br/>';

$g = false || false;
var_dump($g); //bool(false)
echo '<br/>';
$h = true || false; // bool(true)
var_dump($h);
echo '<br/>';



#XOR
$i = true xor true;
var_dump($i); //bool(true)
echo '<br/>';
$j = false xor true; // bool(false)
var_dump($j);
echo '<br/>';
$k = false xor false;
var_dump($k); //bool(false)
echo '<br/>';
$l = true xor false; // bool(true)
var_dump($l);
echo '<br/>';

#Not

$m = true;
$n = false;

echo '<br/>';
var_dump(!$m); //false
echo '<br/>';
var_dump(!$n); //true 
