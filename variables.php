<?php

#Booleanos
$foo = True;
#Enteros
$a = 1234;
$b = 0123; // número octal (equivale a 83 decimal)
$c = 0x1A; // número hexadecimal (equivale a 26 decimal)
$d = 0b11111111; // número binario (equivale al 255 decimal)
#Punto flotante
$e = 1.234;
$f = 1.2e3;
$g = 7E-10;
#Strings
$string1= 'Hola \'mundo';
$string2= "Hola \'mundo";


echo "$foo <br/>"; //1

echo "$a <br/>"; //1234
echo "$b <br/>"; //83
echo "$c <br/>"; //26
echo "$d <br/>"; //255

echo "$e <br/>"; //1.234
echo "$f <br/>"; //1200
echo "$g <br/>"; //7.0E-10

echo "$string1 <br/>"; // Hola 'mundo
echo "$string2 <br/>"; // Hola \'mundo
echo "$string1 $string2 <br/>"; // Hola 'mundo Hola \'mundo
