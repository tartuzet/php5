<?php
function doble($i)
{
    return $i*2;
}

$b = $a = 5;
echo $a; // 5
echo '<br/>';
echo $b; // 5

#Post incremento
$c = $a++;
echo '<br/>';
echo $c; // 5
echo '<br/>';
echo $a; // 6

#pre incremento
$e = $d = ++$b;
echo '<br/>';
echo $e; // 6
echo '<br/>';
echo $d; // 6

#usando funciones
echo '<br/>';
$f = doble($d++); //post incremento
echo $f; // 12
echo '<br/>';
$g = doble(++$e); //pre incremento
echo $g; // 14


$h = $g += 10;
echo '<br/>';
echo $h; // 24
