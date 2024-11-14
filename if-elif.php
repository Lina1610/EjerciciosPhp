<?php
$age = 18;

if ($age >= 18) {
    print "Puede entrar....";
} elseif ($age >= 10 || $age <= 17) {
    print "Paso restringido....";
} else {
    print "Fuera de rango";
}
