<?php
session_start();

$answers1 = $_SESSION['answers1'] ?? [];
$answers2 = $_SESSION['answers2'] ?? [];
$answers3 = $_SESSION['answers3'] ?? [];

$score1 = [
    "q1" => "berlin",
    "q2" => "jupiter",
    "q3" => "h2o",
    "q4" => "einstein",
    "q5" => "tokyo",
    "q6" => "diamond",
    "q7" => "1912",
    "q8" => "lion",
    "q9" => "pacific",
    "q10" => "o"
];

$score2 = [
    "q1" => ["germany", "france"],
    "q2" => ["dog", "whale"],
    "q3" => ["red", "blue", "yellow"],
    "q4" => ["cumulus", "nimbus", "stratus"],
    "q5" => ["england", "scotland", "wales"],
    "q6" => ["lightbulb", "phonograph"],
    "q7" => ["basketball", "swimming", "sailing"],
    "q8" => ["asia", "antarctica", "australia"],
    "q9" => ["facebook", "instagram", "linkedin"],
    "q10" => ["eiffel", "louvre"]
];

$score3 = [
    "q1" => "Paris",
    "q2" => "Pacific Ocean",
    "q3" => "Alexander Fleming",
    "q4" => "4",
    "q5" => "Mount Everest",
    "q6" => "Yen",
    "q7" => "Mars",
    "q8" => "Diamond",
    "q9" => "Lion",
    "q10" => "Russia"
];

$totalScore = 0;
$totalScore += calculateScore($answers1, $score1, 1);
$totalScore += calculateScore($answers2, $score2, 3);
$totalScore += calculateScore($answers3, $score3, 5);

function calculateScore($userAnswers, $correctAnswers, $pointsPerQuestion) {
    $score = 0;
    foreach ($correctAnswers as $key => $correct) {
        if (is_array($correct)) {
            if (isset($userAnswers[$key]) && !array_diff($correct, $userAnswers[$key])) {
                $score += $pointsPerQuestion;
            }
        } else {
            if (isset($userAnswers[$key]) && $userAnswers[$key] === $correct) {
                $score += $pointsPerQuestion;
            }
        }
    }
    return $score;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz Results</title>
</head>
<body>
<h1>Your Results</h1>
<p>You scored: <?= $totalScore ?> points</p>

<h2>Details:</h2>
<p>Page 1 Score: <?= calculateScore($answers1, $score1, 1) ?> points</p>
<p>Page 2 Score: <?= calculateScore($answers2, $score2, 3) ?> points</p>
<p>Page 3 Score: <?= calculateScore($answers3, $score3, 5) ?> points</p>
</body>
</html>
