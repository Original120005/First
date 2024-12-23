<?php
session_start();

$questions1 = [
    ["question" => "What is the capital of France?", "answers" => ["paris" => "Paris", "rome" => "Rome"], "correct" => "paris"],
    ["question" => "Which of the following is the smallest planet in the solar system?", "answers" => ["mercury" => "Mercury", "venus" => "Venus"], "correct" => "mercury"],
    ["question" => "What is the chemical symbol for carbon dioxide?", "answers" => ["co2" => "CO2", "o2" => "O2"], "correct" => "co2"],
    ["question" => "Who developed the theory of relativity?", "answers" => ["einstein" => "Albert Einstein", "tesla" => "Nikola Tesla"], "correct" => "einstein"],
    ["question" => "What is the largest city in Ukraine?", "answers" => ["kiev" => "Kiev", "stpetersburg" => "Saint Petersburg"], "correct" => "kiev"],
    ["question" => "What is the softest mineral on Earth?", "answers" => ["talc" => "Talc", "quartz" => "Quartz"], "correct" => "talc"],
    ["question" => "In which year was the Eiffel Tower completed?", "answers" => ["1889" => "1889", "1901" => "1901"], "correct" => "1889"],
    ["question" => "Which animal is known as the 'Ship of the Desert'?", "answers" => ["camel" => "Camel", "horse" => "Horse"], "correct" => "camel"],
    ["question" => "What is the smallest ocean on Earth?", "answers" => ["arctic" => "Arctic Ocean", "indian" => "Indian Ocean"], "correct" => "arctic"],
    ["question" => "What is the rarest blood type in humans?", "answers" => ["ab" => "AB", "b" => "B"], "correct" => "ab"],
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['answers1'] = $_POST;
    header(header: 'Location: questions2.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz - Page 1</title>
</head>
<body>
<form method="POST">
    <?php foreach ($questions1 as $index => $question): ?>
        <h3>Question <?= $index + 1 ?>: <?= $question['question'] ?></h3>
        <?php foreach ($question['answers'] as $value => $label): ?>
            <input type="radio" name="q<?= $index + 1 ?>" value="<?= $value ?>"> <?= $label ?><br>
        <?php endforeach; ?>
    <?php endforeach; ?>
    <button type="submit">Next</button>
</form>
</body>
</html>
