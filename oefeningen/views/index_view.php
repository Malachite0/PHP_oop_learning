<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>auto</title>
</head>
<body>
<h1>Auto's</h1>

<h2>Auto 1:</h2>
<p>Merk: <?=$auto1->merk; ?></p>
<p>Model: <?=$auto1->model; ?></p>
<p>Kleur: <?=$auto1->kleur; ?></p>
<p>Tankinhoud: <?=$auto1->tankInhoud; ?> liter</p>
<p>Benzine: <?=$auto1->benzine; ?> liter</p>
<p>Resultaat tanken: <?=$tankResultaat1; ?></p>
<p>Toeter: <?=$auto1->toeteren(3); ?></p>

<h2>Auto 2:</h2>
<p>Merk: <?=$auto2->merk; ?></p>
<p>Model: <?=$auto2->model; ?></p>
<p>Kleur: <?=$auto2->kleur; ?></p>
<p>Tankinhoud: <?=$auto2->tankInhoud; ?> liter</p>
<p>Benzine: <?=$auto2->benzine; ?> liter</p>
<p>Resultaat tanken: <?=$tankResultaat2; ?></p>
<p>Toeter: <?=$auto2->toeteren(5); ?></p>

<a href="index.php">
    <button>Terug naar Index</button>
</a>
</body>
</html>
