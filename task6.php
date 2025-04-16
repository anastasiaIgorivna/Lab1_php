<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Операції з тризначним числом</title>
</head>
<body>
    <h2>Робота з випадковим тризначним числом</h2>

    <?php
    // Генеруємо випадкове число від 100 до 999
    $number = mt_rand(100, 999);
    echo "Згенероване число: <strong>$number</strong><br><br>";

    // Перетворюємо число на масив цифр
    $digits = str_split($number); // Наприклад, [1, 2, 3]

    // 1. Сума цифр
    $sum = array_sum($digits);
    echo "1️⃣ Сума цифр: $sum<br>";

    // 2. Зворотне число
    $reversed = implode('', array_reverse($digits));
    echo "2️⃣ У зворотному порядку: $reversed<br>";

    // 3. Найбільше можливе число з цих цифр
    rsort($digits); // Сортуємо від найбільшої до найменшої
    $maxNumber = implode('', $digits);
    echo "3️⃣ Найбільше можливе число: $maxNumber";
    ?>
</body>
</html>
