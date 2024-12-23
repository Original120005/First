<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Вопроси</title>
</head>
<body>
<h1>Відповіді на питання</h1>
<form action="" method="POST">
    <h2>Питання 1:</h2>
    <p>Який з наступних варіантів є правильним числом?</p>
    <label>
        <input type="radio" name="q1" value="1"> 1
    </label><br>
    <label>
        <input type="radio" name="q1" value="2"> 2
    </label><br>
    <label>
        <input type="radio" name="q1" value="3"> 3
    </label><br>
    <label>
        <input type="radio" name="q1" value="4"> 4
    </label><br>

    <h2>Питання 2:</h2>
    <p>Які з наступних варіантів правильні для пари чисел?</p>
    <label>
        <input type="checkbox" name="q2[]" value="1"> 1
    </label><br>
    <label>
        <input type="checkbox" name="q2[]" value="2"> 2
    </label><br>
    <label>
        <input type="checkbox" name="q2[]" value="3"> 3
    </label><br>
    <label>
        <input type="checkbox" name="q2[]" value="4"> 4
    </label><br>

    <h2>Питання 3:</h2>
    <p>Опишіть свою відповідь на це питання:</p>
    <textarea name="q3" rows="5" cols="40"></textarea><br>

    <button type="submit">Відправити</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $q1 = isset($_POST['q1']) ? $_POST['q1'] : 'Не вибрано';

    $q2 = isset($_POST['q2']) ? implode(', ', $_POST['q2']) : 'Не вибрано';

    $q3 = isset($_POST['q3']) ? $_POST['q3'] : 'Не введено';

    echo "<h3>Ваша відповідь на питання 1: $q1</h3>";
    echo "<h3>Ваша відповідь на питання 2: $q2</h3>";
    echo "<h3>Ваша відповідь на питання 3: $q3</h3>";
}
?>
</body>
</html>
