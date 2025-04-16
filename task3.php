<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Конвертер валют</title>
</head>
<body>
    <h2>Конвертація гривень у долари</h2>
    <?php
    $uah = 1500;           
    $rate = 42.41;         
    $usd = floor($uah / $rate); // округлення до меншого
    echo "$uah грн. можна обміняти на $usd доларів";
    ?>
</body>
</html>
