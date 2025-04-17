<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamerberekening</title>
    <style>
        .kamer {
            background-color: #b1b0b0;
            position: relative;
            margin: 20px 0;
        }
    </style>
</head>
<body>
<h1>Kamerberekening</h1>
<form method="POST" action="opdracht12.php">
    <label for="lengte">Lengte (m):</label>
    <input type="number" id="lengte" name="lengte" step="0.1" value="<?= htmlspecialchars($lengte); ?>" required>
    <br><br>
    <label for="breedte">Breedte (m):</label>
    <input type="number" id="breedte" name="breedte" step="0.1" value="<?= htmlspecialchars($breedte); ?>" required>
    <br><br>
    <label for="hoogte">Hoogte (m, optioneel):</label>
    <input type="number" id="hoogte" name="hoogte" step="0.1" value="<?= htmlspecialchars($hoogte ?? ''); ?>">
    <br><br>
    <button type="submit">Bereken</button>
</form>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <h2>Resultaten:</h2>
    <p><strong>Oppervlakte:</strong> <?= $oppervlakte; ?> m²</p>
    <?php if ($hoogte !== null): ?>
        <p><strong>Inhoud:</strong> <?= $inhoud; ?> m³</p>
    <?php endif; ?>

    <h2>Visuele Representatie:</h2>
    <div class="kamer" style="width: <?= $lengte * 15; ?>px; height: <?= $breedte * 15; ?>px;">
    </div>
    <p>1 meter = 15 pixels (hoogte niet vertoont)</p>
<?php endif; ?>
<a href="index.php">
    <button>Terug naar Index</button>
</a>
</body>
</html>
