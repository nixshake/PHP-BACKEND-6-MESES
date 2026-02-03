<?php 

$soma = 0;

for ($i = 1; $i <= 100; $i++) {

    $soma = $soma + $i;
    echo "$i | $soma <br>";
}

echo "Soma final: $soma";

?>