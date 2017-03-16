<?php

#Para asignar por referencia, simplemente se antepone un signo ampersand (&) al comienzo de la variable cuyo valor se está asignando
$foo = 'Bob';
$bar = &$foo; // Referenciar $foo vía $bar.
$bar = "Mi nombre es $bar";
echo "$bar <br/>";  // Mi nombre es Bob
echo $foo; // Mi nombre es Bob

#Sólo las variables con nombre pueden ser asignadas por referencia.
$foo2 = 25;
$bar2 = &$foo2;      // Esta es una asignación válida.
echo "<br/> $bar2"; //25
//$bar2 = &(24 * 7);  # Inválida; referencia una expresión sin nombre.

function test()
{
   return 35;
}

//$bar2 = &test();    # Inválido.
