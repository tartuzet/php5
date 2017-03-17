<?php

define('MIN_VALUE', 0); //Funciona solo afuera de las clases y adentro no
define('MAX_VALUE', 10);
const C_VALUE = 15; // Funciona tanto adentro y afuera de las clases

echo MIN_VALUE;
echo '<br/>';
echo MAX_VALUE;
echo '<br/>';
echo C_VALUE;


// Funciona a partir de PHP 5.6.0
const CONSTANTE = 'Hola Mundo';
const OTRA_CONSTANTE = CONSTANTE.'; Adiós Mundo';
echo '<br/>';
echo OTRA_CONSTANTE; // muestra Hola Mundo; Adiós Mundo

const ANIMALES = array('perro', 'gato', 'pájaro');
echo '<br/>';
echo ANIMALES[1]; // muestra "gato"
