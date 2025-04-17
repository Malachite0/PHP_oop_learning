<?php
require_once 'functies.php';

$resultaat = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $leeftijd = $_POST['leeftijd'] ?? null;

    $resultaat = magStemmen($leeftijd);
}

// Include de view
include 'views/opdracht14_view.php';
