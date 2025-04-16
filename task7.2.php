<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Червоні квадрати на чорному тлі</title>
    <style>
        body {
            margin: 0;
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
        }
        .form-container {
            padding: 20px;
            text-align: center;
        }
        label, input, button {
            font-size: 18px;
            margin: 10px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Скільки червоних квадратів згенерувати?</h2>
    <form method="post">
        <label for="count">Кількість квадратів:</label>
        <input type="number" name="count" id="count" min="1" required>
        <button type="submit">Показати</button>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $n = (int) $_POST['count'];

    if ($n > 0) {
        echo "<script>";
        echo "const count = $n;";
        echo <<<JS
            for (let i = 0; i < count; i++) {
                const square = document.createElement('div');
                const size = Math.floor(Math.random() * 81) + 20; // 20–100px
                const posX = Math.floor(Math.random() * (window.innerWidth - size));
                const posY = Math.floor(Math.random() * (window.innerHeight - size));

                square.style.width = size + 'px';
                square.style.height = size + 'px';
                square.style.backgroundColor = 'red';
                square.style.position = 'absolute';
                square.style.left = posX + 'px';
                square.style.top = posY + 'px';

                document.body.appendChild(square);
            }
        JS;
        echo "</script>";
    } else {
        echo "<p style='text-align:center; color:red;'>Введіть додатне число.</p>";
    }
}
?>

</body>
</html>
