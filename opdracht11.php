<?php

declare(strict_types=1);

$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['number'] ?? '';
    $conversionType = $_POST['conversion'] ?? '';

    if ($conversionType === 'decimal_to_binary') {
        $result = decbin((int)$input);
    } elseif ($conversionType === 'binary_to_decimal') {
        $result = bindec($input);
    } elseif ($conversionType === 'decimal_to_hex') {
        $result = dechex((int)$input);
    } elseif ($conversionType === 'hex_to_binary') {
        $result = decbin(hexdec($input));
    } else {
        $result = 'Ongeldige invoer.';
    }
}

include 'views/opdracht11_view.php';
