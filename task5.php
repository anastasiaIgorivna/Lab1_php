<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Голосна чи приголосна</title>
</head>
<body>
    <h2>Визначення типу літери</h2>

    <form method="post">
        <label>Введіть одну літеру українського алфавіту:</label><br><br>
        <input type="text" name="letter" maxlength="1" required>
        <button type="submit">Перевірити</button>
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $letter = $_POST["letter"];
        $letter = mb_strtolower($letter);

        switch ($letter) {
            case 'а':
            case 'е':
            case 'є':
            case 'и':
            case 'і':
            case 'ї':
            case 'о':
            case 'у':
            case 'ю':
            case 'я':
                echo "Літера \"$letter\" — голосна ✅";
                break;
            default:
                echo "Літера \"$letter\" — приголосна 🔔";
                break;
        }
    }
    ?>
</body>
</html>
