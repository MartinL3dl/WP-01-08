<?php
$guessnumber = 38;
define('max_number', 100);
define('min_number', 0);

$yournumber = rand(min_number, max_number);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>Hádej číslo mezi <?= min_number ?> - <?= max_number ?></p>

<p>Typuju si, číslo : <?= $yournumber?></p>
<?php

while ($guessnumber != $yournumber) { ?>
    <p>hadané číslo <?= $yournumber ?> není správně </p>
<?php

$yournumber = rand(min_number, max_number);
}
   
?>

<p>gratuluju, uhádl si číslo $guessnumber = <?=$guessnumber?> svým hádaním číslem <?=$yournumber?></p>
</body>
</html>