<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 2</title>
</head>
<body>
<h1>Rekening Overzicht</h1>

<h2>Rekening 1</h2>
<ul>
    <li>Rekeningnummer: <?= $data['rekening1']->rekeningNummer ?></li>
    <li>Naam Eigenaar: <?= $data['rekening1']->getNaam() ?></li>
    <li>Saldo: €<?= number_format($data['rekening1']->getSaldo(), 2) ?></li>
</ul>

<h2>Rekening 2</h2>
<ul>
    <li>Rekeningnummer: <?= $data['rekening2']->rekeningNummer ?></li>
    <li>Naam Eigenaar: <?= $data['rekening2']->getNaam() ?></li>
    <li>Saldo: €<?= number_format($data['rekening2']->getSaldo(), 2) ?></li>
</ul>

<h2>SpaarRekening</h2>
<ul>
    <li>Rekeningnummer: <?= $data['spaarRekening']->rekeningNummer ?></li>
    <li>Naam Eigenaar: <?= $data['spaarRekening']->getNaam() ?></li>
    <li>Saldo: €<?= number_format($data['spaarRekening']->getSaldo(), 2) ?></li>
    <li>Rente: <?= $data['spaarRekening']->rente * 100 ?>%</li>
    <li>Kosten per maand: €<?= number_format($data['spaarRekening']->kosten, 2) ?></li>
</ul>

<h2>BeleggingsRekening</h2>
<ul>
    <li>Rekeningnummer: <?= $data['beleggingsRekening']->rekeningNummer ?></li>
    <li>Naam Eigenaar: <?= $data['beleggingsRekening']->getNaam() ?></li>
    <li>Saldo: €<?= number_format($data['beleggingsRekening']->getSaldo(), 2) ?></li>
    <li>Maandelijkse inleg: €<?= number_format($data['beleggingsRekening']->inleg, 2) ?></li>
    <li>Rendement: <?= $data['beleggingsRekening']->rendement * 100 ?>%</li>
</ul>

<a href="index.php">
    <button>Terug naar Index</button>
</a>
</body>
</html>
