<?php

$num = 5; // Cambia este valor según sea necesario
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "El factorial de $num es: " . $factorial;

?>
