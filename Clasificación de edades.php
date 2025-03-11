<?php

$numero = 30;

if ($numero >= 1 && $numero <= 12) {
    echo "niño";
} elseif (in_array($numero, range(13, 18))) {
    echo "adolescente";
} elseif (in_array($numero, range(19, 25))) {
    echo "joven";
} elseif (in_array($numero, range(26, 45))) {
    echo "adulto";
} elseif (in_array($numero, range(46, 100))) {
    echo "viejo";
} else {
    echo "Fuera de rango";
}
?>

