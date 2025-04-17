<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 14 - Stemrecht</title>
</head>
<body>
<h1>Controleer of je mag stemmen</h1>
<form method="post" action="opdracht14.php">
    <label for="leeftijd">Voer je leeftijd in:</label><br>
    <input type="text" id="leeftijd" name="leeftijd" placeholder="Leeftijd" required>
    <button type="submit">Controleer</button>
</form>

<?php if (isset($resultaat)): ?>
    <h2>Resultaat:</h2>
    <p>
        <?php
        if ($resultaat) {
            echo "Je mag stemmen!";
        } else {
            echo "Je mag niet stemmen.";
        }
        ?>
    </p>
<?php endif; ?>

<a href="index.php">
    <button>Terug naar Index</button>
</a>
</body>
</html>
