<?php
$punten = 7;
$render = '';
if ($punten >= 6) {
    $render = 'Voldoende';
} else {
    $render = 'Nog oefenen';
}
for ($i = 1; $i <= 3; $i++) {
    $render .= ' | ronde ' . $i;
}
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorwaarden en herhalingen</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Voorwaarden en herhalingen</h2><p id="resultaat"><?= htmlspecialchars($render) ?></p>

    Je deeltal
    <input type="number" id="deeltal"><br>

    Je vermenigingsfactor
    <input type="number" id="vermenigingfactor">

    <button>Controleer</button>
</body>
</html>