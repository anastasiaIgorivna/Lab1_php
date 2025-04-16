<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Кольорова таблиця</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        td {
            width: 50px;
            height: 50px;
            border: 1px solid #000;
        }
        .form-block {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<h2>Генератор таблиці з випадковими кольорами</h2>

<form method="post" class="form-block">
    <label for="rows">Кількість рядків:</label>
    <input type="number" name="rows" id="rows" min="1" required>
    <br><br>
    <label for="cols">Кількість стовпців:</label>
    <input type="number" name="cols" id="cols" min="1" required>
    <br><br>
    <button type="submit">Створити таблицю</button>
</form>

<?php
function createColorTable($rows, $cols) {
    echo "<table>";
    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $cols; $j++) {
            $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            echo "<td style='background-color: $color;'></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $rows = (int) $_POST['rows'];
    $cols = (int) $_POST['cols'];

    if ($rows > 0 && $cols > 0) {
        echo "<h3>Згенерована таблиця {$rows}x{$cols}:</h3>";
        createColorTable($rows, $cols);
    } else {
        echo "<p style='color:red;'>Будь ласка, введіть додатні числа.</p>";
    }
}
?>

</body>
</html>

