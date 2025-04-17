<?php

declare(strict_types=1);

include 'functies.php';

$datum1 = '1974-05-14';
$datum2 = '2000-01-01';

$resultaatVoluit = nlDatum($datum1);
$resultaatKort = nlDatum($datum2, false);

// Include de view
include 'views/opdracht13_view.php';

