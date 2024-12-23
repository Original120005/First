<?php
session_start();

$questions3 = [
    ["question" => "What is the capital of Italy?", "correct" => "Rome"],
    ["question" => "What is the smallest ocean on Earth?", "correct" => "Arctic Ocean"],
    ["question" => "Who invented the telephone?", "correct" => "Alexander Graham Bell"],
    ["question" => "What is the square root of 25?", "correct" => "5"],
    ["question" => "What is the highest mountain in Africa?", "correct" => "Mount Kilimanjaro"],
    ["question" => "What is the currency of the United Kingdom?", "correct" => "Pound Sterling"],
    ["question" => "Which planet is known as the Earth’s twin?", "correct" => "Venus"],
    ["question" => "What is the softest natural substance on Earth?", "correct" => "Talc"],
    ["question" => "Which animal is known as the 'King of the Skies'?", "correct" => "Eagle"],
    ["question" => "Which is the smallest country by area?", "correct" => "Vatican City"],
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['answers3'] = $_POST;
    header('Location: results.php');
    exit;
}

$answers1 = $_SESSION['answers1'] ?? [];
$answers2 = $_SESSION['answers2'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz - Page 3</title>
</head>
<body>
<form method="POST">
    <?php foreach ($questions3 as $index => $question): ?>
        <h3>Question <?= $index + 1 ?>: <?= $question['question'] ?></h3>
        <input type="text" name="q<?= $index + 1 ?>" placeholder="Your answer"><br>
    <?php endforeach; ?>
    <button type="submit">Finish</button>
</form>
</body>
</html>
