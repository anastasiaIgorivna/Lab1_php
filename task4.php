<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Визначення пори року</title>
</head>
<body>
    <h2>Введи номер місяця (1-12):</h2>

    <form method="post">
        <input type="number" name="month" min="1" max="12" required>
        <button type="submit">Визначити пору року</button>
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $month = $_POST["month"];

        if ($month == 12 || $month == 1 || $month == 2) {
            echo "<strong>Це зима ❄️</strong>";
        } elseif ($month >= 3 && $month <= 5) {
            echo "<strong>Це весна 🌸</strong>";
        } elseif ($month >= 6 && $month <= 8) {
            echo "<strong>Це літо ☀️</strong>";
        } elseif ($month >= 9 && $month <= 11) {
            echo "<strong>Це осінь 🍂</strong>";
        } else {
            echo "<strong>Невірний номер місяця!</strong>";
        }
    }
    ?>
</body>
</html>
