<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversie Tool</title>
</head>
<body>
<h1>Conversie Tool</h1>
<form method="POST" action="opdracht11.php">
    <label for="number">Voer een getal in:</label>
    <input type="text" id="number" name="number" required>
    <br><br>

    <button type="submit" name="conversion" value="decimal_to_binary">Van decimaal naar binair</button>
    <button type="submit" name="conversion" value="binary_to_decimal">Van binair naar decimaal</button>
    <button type="submit" name="conversion" value="decimal_to_hex">Van decimaal naar hexadecimaal</button>
    <button type="submit" name="conversion" value="hex_to_binary">Van hexadecimaal naar binair</button>
</form>

<?php if (!empty($result)): ?>
    <h2>Resultaat:</h2>
    <p><?= htmlspecialchars($result); ?></p>
<?php endif; ?>
<a href="index.php">
    <button>Terug naar Index</button>
</a>
</body>
</html>
