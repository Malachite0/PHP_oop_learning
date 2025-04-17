<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . '/models/auto.php');

$auto1 = new Auto("Opel", "Mokka", "zwart", 50, 30, true);
$auto2 = new Auto("Ford", "Focus", "zwart", 60);

$tankResultaat1 = $auto1->tanken(10);
$tankResultaat2 = $auto2->tanken(70);


include 'views/index_view.php';
