<?php

/**
 * Zet een datum van "YYYY-MM-DD" om naar Nederlands formaat, met Nederlandse maandnamen.
 *
 * @param string $datum De originele datum in "YYYY-MM-DD"-formaat.
 * @param bool $volledigJaartal (optioneel) Geeft aan of het jaartal voluit moet worden weergegeven (true) of kort (false).
 * @return string De geformatteerde datum in Nederlands formaat.
 */
function nlDatum(string $datum, bool $volledigJaartal = true): string
{
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $datum)) {
        return 'Ongeldige datum';
    }

    $timestamp = strtotime($datum);
    if ($timestamp === false) {
        return 'Ongeldige datum';
    }

    $maanden = [
        1 => 'januari', 'februari', 'maart', 'april', 'mei', 'juni',
        'juli', 'augustus', 'september', 'oktober', 'november', 'december'
    ];

    $dag = date('d', $timestamp);
    $maandNummer = (int)date('m', $timestamp);
    $jaar = date($volledigJaartal ? 'Y' : 'y', $timestamp);

    return sprintf('%s %s %s', $dag, $maanden[$maandNummer], $jaar);
}

function magStemmen($leeftijd): bool
{

    if (is_numeric($leeftijd)) {
        return $leeftijd >= 18;
    }
    return false;
}
