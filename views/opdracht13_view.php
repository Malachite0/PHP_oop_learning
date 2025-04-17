<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 13 - Datum Formatteren</title>
</head>
<body>
<h1>Opdracht 13 - Nederlandse Datum</h1>
<h2>Probeer zelf:</h2>
<form method="POST" action="opdracht13.php">
    <label for="datum">Datum (YYYY-MM-DD):</label>
    <input type="date" id="datum" name="datum" required>
    <br><br>
    <label for="volledigJaartal">Volledig jaartal?</label>
    <select id="volledigJaartal" name="volledigJaartal">
        <option value="1" selected>Ja</option>
        <option value="0">Nee</option>
    </select>
    <br><br>
    <button type="submit">Formatteer</button>
</form>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <h2>Jouw resultaat:</h2>
    <?php
    $inputDatum = $_POST['datum'] ?? '';
    $volledig = isset($_POST['volledigJaartal']) && $_POST['volledigJaartal'] === '1';
    $formattedDatum = nlDatum($inputDatum, $volledig);
    ?>
    <p><?= htmlspecialchars($formattedDatum); ?></p>
<?php endif; ?>
<a href="index.php">
    <button>Terug naar Index</button>
</a>
</body>
</html>
