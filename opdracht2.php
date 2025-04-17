<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('models/rekening.php');
require_once('models/spaarrekening.php');
require_once('models/beleggingsrekening.php');

$rekening1 = new Rekening("12", "Yuri", 57, 10, -10);
$rekening2 = new Rekening("60", "Mika", 100, 20, -50);
$spaarRekening = new SpaarRekening("33", "Anna", 500, "2024-01-01", 0.03, 2);
$beleggingsRekening = new BeleggingsRekening("44", "Tom", 1000, "2024-01-01", 100, 0.05);

// Berekeningen toepassen
$spaarRekening->berekenMaandbedrag();
$beleggingsRekening->berekenNieuweSaldo();

// Data voor de view
$data = [
    'rekening1' => $rekening1,
    'rekening2' => $rekening2,
    'spaarRekening' => $spaarRekening,
    'beleggingsRekening' => $beleggingsRekening,
];

include 'views/opdracht2_view.php';

?>
