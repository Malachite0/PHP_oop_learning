<?php

declare(strict_types=1);
/**
 * @param string $soort
 * @param string $naam
 * @param int $aantal
 * @return string
 */
function groet(string $soort, string $naam, int $aantal=3): string {
    $tekst = "";
    for ($i = 1; $i<= $aantal; $i++) {
     $tekst .= "<p> {$soort} {$naam} </p>";
        }
    return $tekst;
}
include 'views/functie_view.php';