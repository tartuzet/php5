<?php
# Array Simple
$array = array(
  "foo" => "bar",
  "bar" => "foo",
);
// a partir de PHP 5.4
$array = [
  "foo" => "bar",
  "bar" => "foo",
];
var_dump($array); //array(2) { ["foo"]=> string(3) "bar" ["bar"]=> string(3) "foo" }
echo '<br/>';


#Amoldamiento de tipo y sobrescritura
$array2 = array(
  1    => "a",
  "1"  => "b",
  1.5  => "c",
  true => "d",
);
var_dump($array2); //array(1) { [1]=> string(1) "d" }
echo '<br/>';


#Claves mixtas
$array3 = array(
  "foo" => "bar",
  "bar" => "foo",
  100   => -100,
  -100  => 100,
);
var_dump($array3); //array(4) { ["foo"]=> string(3) "bar" ["bar"]=> string(3) "foo" [100]=> int(-100) [-100]=> int(100) }
echo '<br/>';


#Arrays sin claves
$array4 = array("foo", "bar", "hello", "world");
var_dump($array4); //array(4) { [0]=> string(3) "foo" [1]=> string(3) "bar" [2]=> string(5) "hello" [3]=> string(5) "world" }
echo '<br/>';

#Claves no en todos los elementos
$array5 = array(
  "a",
  "b",
  6 => "c",
  "d",
);
var_dump($array5); //array(4) { [0]=> string(1) "a" [1]=> string(1) "b" [6]=> string(1) "c" [7]=> string(1) "d" }
echo '<br/>';


#Acceso a elementos de un array
$array = array(
  "foo" => "bar",
  42    => 24,
  "multi" => array(
    "dimensional" => array(
      "array" => "foo"
    )
  )
);

var_dump($array["foo"]); // bar
var_dump($array[42]); // 24
var_dump($array["multi"]["dimensional"]["array"]); // foo
