<?php

declare(strict_types=1);

/**
 * Bereken de oppervlakte of inhoud van een kamer.
 *
 * @param float $lengte De lengte van de kamer.
 * @param float $breedte De breedte van de kamer.
 * @param float|null $hoogte (optioneel) De hoogte van de kamer.
 * @return float De oppervlakte of inhoud van de kamer.
 */
function berekenKamer(float $lengte, float $breedte, ?float $hoogte = null): float
{
    if ($hoogte === null) {
        return $lengte * $breedte;
    }
    return $lengte * $breedte * $hoogte;
}

$lengte = 0;
$breedte = 0;
$hoogte = null;
$oppervlakte = 0;
$inhoud = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Haal de ingevoerde waarden op
    $lengte = (float)($_POST['lengte'] ?? 0);
    $breedte = (float)($_POST['breedte'] ?? 0);
    $hoogte = isset($_POST['hoogte']) && $_POST['hoogte'] !== '' ? (float)$_POST['hoogte'] : null;

    $oppervlakte = berekenKamer($lengte, $breedte);
    if ($hoogte !== null) {
        $inhoud = berekenKamer($lengte, $breedte, $hoogte);
    }
}

include 'views/opdracht12_view.php';
