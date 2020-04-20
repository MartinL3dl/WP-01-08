<?php

define('max_number', 100);
define('min_number', 0);
$guessnumber = rand(min_number, max_number);
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

<?php

 
while ($guessnumber != $yournumber) { ?>
    <?php if ($yournumber > $guessnumber) {
        $hint ="číslo je menší";
    }
    elseif ($yournumber < $guessnumber) {
        $hint="číslo je větší";
    } ?>     
    <p>tvoje typované číslo <?=$yournumber?> je nesprávné, hadané <?=$hint?>

    </p>
    
 

<?php

$yournumber = rand(min_number, max_number);
}
   
?>


<p>gratuluju, uhádl si číslo guessnumber = <?=$guessnumber?> svým hádaním číslem <?=$yournumber?></p>
</body>
</html>