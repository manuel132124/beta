<?php
echo"Mayor de tres números</P>";

$a=50;
$b=62;
$c=54;

if ($a>$b||$a>$c){
    echo "<p>el numero mayor es: </p>".$a;
}
elseif ($b>$a|| $b>$c){
    echo "<p>el numero mayor es: </p>".$b;
}
elseif ($c>$a|| $c>$b){
    echo "<p>el numero mayor es: </p>".$c;
}


?>