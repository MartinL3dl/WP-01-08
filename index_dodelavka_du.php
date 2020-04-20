<?php
$entryfee = 120;
$age = 900; //* to je věk mr. yody //
$height = 75;
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($height <=140 && $age <=10 || $age >= 65) {
    $entryfee = 60;
}

elseif ($age >= 11 && $age <=26 ) {
    $entryfee = 80;
}
else {
    $entryfee = 120;
}
?>

<p>Jelikož vám je <?=$age?>, a výšku máte <?=$height ?> tak platíte <?=$entryfee?></p>
</body>
</html>