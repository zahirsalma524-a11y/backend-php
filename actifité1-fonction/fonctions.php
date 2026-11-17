
<?php
//Etape 1:
declare(strict_types=1);

// Addition
function additionner(float $a, float $b): float {
    return $a + $b;
}

// Soustraction
function soustraire(float $a, float $b): float {
    return $a - $b;
}

// Multiplication
function multiplier(float $a, float $b): float {
    return $a * $b;
}

// Division
function diviser(float $a, float $b): float {
    if ($b == 0) {
        throw new InvalidArgumentException("Division par zéro impossible");
    }

    return $a / $b;
}



//Etape 2:

<?php

// 1. Tester si un nombre est pair
function estPair(int $n): bool {
    return $n % 2 == 0;
}

// 2. Tester si un nombre est positif
function estPositif(float $n): bool {
    return $n >= 0;
}

// 3. Maximum sans utiliser max()
function maximum(float $a, float $b, float $c): float {
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}

// Maximum avec max()
function maximumAvecMax(float $a, float $b, float $c): float {
    return max($a, $b, $c);
}

// 4. Tester si un nombre est premier
function estPremier(int $n): bool {
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= floor(sqrt($n)); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}




//Étape 3 :Calculs commerciaux

<?php

// 1. Calculer le prix TTC
function calculerTTC(float $ht, float $tva = 20.0): float {
    return $ht * (1 + $tva / 100);
}

// 2. Calculer la remise
function calculerRemise(float $prix, float $pourcentage): float {
    return $prix * (1 - $pourcentage / 100);
}

// 3. Calculer la facture
function calculerFacture(
    float $prixUnitaire,
    int $quantite,
    float $remise = 0,
    float $tva = 20.0
): float {

    $total = $prixUnitaire * $quantite;

    $totalApresRemise = calculerRemise($total, $remise);

    return calculerTTC($totalApresRemise, $tva);
}

// 4. Afficher le montant
$montant = calculerFacture(100, 10, 10, 20);

echo number_format($montant, 2, ',', ' ') . " MAD";