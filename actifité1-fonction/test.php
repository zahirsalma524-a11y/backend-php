
<?php
require_once __DIR__ . "/fonctions.php";

echo "Addition : " . additionner(12, 8) . "<br>";
echo "Soustraction : " . soustraire(12, 8) . "<br>";
echo "Multiplication : " . multiplier(12, 8) . "<br>";

try {
    echo "Division : " . diviser(12, 0);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}


