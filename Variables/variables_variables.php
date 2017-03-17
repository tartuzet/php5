<?php

#Variables variables
$a = 'hola';
$$a = 'mundo'; //hola se conviernte en $hola = 'mundo' entonces $a = 'hola' y $hola = 'mundo'
$$$a= 'loco';


echo "$a ${$a}"; //hola mundo - Primera forma de imprimirlo
echo '<br/>';
echo "$a $hola"; //hola mundo - Segunda forma de imprimirlo
echo '<br/>';
echo "$a $hola $mundo"; //hola mundo loco
echo '<br/>';
echo $$$a; //loco



#Se pueden agragar varios signos de dolar
$Bar = "b";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$b = "Hello";

echo '<br/><br/><br/>';
echo $b; //Hello
echo '<br/>';
echo $$b; // World
echo '<br/>';
echo $$$b; // Foo
echo '<br/>';
echo $$$$b; // Bar
echo '<br/>';
echo $$$$$b; // b

echo '<br/>';
echo $$$$$$b; // Hello
echo '<br/>';
echo $$$$$$$b; // World
