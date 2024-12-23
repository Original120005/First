<?php
session_start();

$questions2 = [
    ["question" => "Which of the following are countries in South America? (Select all that apply)", "answers" => ["brazil" => "Brazil", "egypt" => "Egypt", "argentina" => "Argentina", "australia" => "Australia"], "correct" => ["brazil", "argentina"]],
    ["question" => "Which of these creatures are reptiles? (Select all that apply)", "answers" => ["dog" => "Dog", "lizard" => "Lizard", "whale" => "Whale", "bird" => "Bird"], "correct" => ["lizard"]],
    ["question" => "Which are the secondary colors? (Select all that apply)", "answers" => ["orange" => "Orange", "green" => "Green", "purple" => "Purple", "yellow" => "Yellow"], "correct" => ["orange", "green", "purple"]],
    ["question" => "Which of these are types of precipitation? (Select all that apply)", "answers" => ["rain" => "Rain", "hail" => "Hail", "snow" => "Snow", "twister" => "Twister"], "correct" => ["rain", "hail", "snow"]],
    ["question" => "Which countries are part of the European Union? (Select all that apply)", "answers" => ["france" => "France", "sweden" => "Sweden", "switzerland" => "Switzerland", "germany" => "Germany"], "correct" => ["france", "sweden", "germany"]],
    ["question" => "Which of these innovations were created by Nikola Tesla? (Select all that apply)", "answers" => ["alternating" => "Alternating Current", "electricmotor" => "Electric Motor", "phonograph" => "Phonograph", "radar" => "Radar"], "correct" => ["alternating", "electricmotor", "radar"]],
    ["question" => "Which of these are winter Olympic sports? (Select all that apply)", "answers" => ["skiing" => "Skiing", "cricket" => "Cricket", "icehockey" => "Ice Hockey", "snowboarding" => "Snowboarding"], "correct" => ["skiing", "icehockey", "snowboarding"]],
    ["question" => "Which of these are oceans? (Select all that apply)", "answers" => ["pacific" => "Pacific Ocean", "indian" => "Indian Ocean", "caribbean" => "Caribbean Sea", "arctic" => "Arctic Ocean"], "correct" => ["pacific", "indian", "arctic"]],
    ["question" => "Which are popular search engines? (Select all that apply)", "answers" => ["google" => "Google", "yahoo" => "Yahoo", "facebook" => "Facebook", "bing" => "Bing"], "correct" => ["google", "yahoo", "bing"]],
    ["question" => "Which of these are famous landmarks in London? (Select all that apply)", "answers" => ["londonbridge" => "London Bridge", "colosseum" => "Colosseum", "toweroflondon" => "Tower of London", "bigben" => "Big Ben"], "correct" => ["londonbridge", "toweroflondon", "bigben"]],
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['answers2'] = $_POST;
    header('Location: questions3.php');
    exit;
}

$answers1 = $_SESSION['answers1'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz - Page 2</title>
</head>
<body>
<form method="POST">
    <?php foreach ($questions2 as $index => $question): ?>
        <h3>Question <?= $index + 1 ?>: <?= $question['question'] ?></h3>
        <?php foreach ($question['answers'] as $value => $label): ?>
            <input type="checkbox" name="q<?= $index + 1 ?>[]" value="<?= $value ?>"> <?= $label ?><br>
        <?php endforeach; ?>
    <?php endforeach; ?>
    <button type="submit">Next</button>
</form>
</body>
</html>
