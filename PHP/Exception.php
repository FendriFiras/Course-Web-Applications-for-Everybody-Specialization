<?php
// fonction qui retourne a/b
function quotient($a, $b)
{
    if (!$b) {
        throw new Exception('Impossible de diviser par zéro');
    }
    return $a / $b;
}
try {
    echo quotient(5, 10) . "\n";
    echo quotient(3, 0) . "\n";
} catch (Exception $e) {
    echo 'Exception catchée : ' . $e->getMessage() . "<br>";
}
// Continue execution
echo "Je serais toujours la !<br>";
