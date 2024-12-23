<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userName = $_POST['username']; 
    $message = $_POST['message']; 
    
    $badWords = [
        'fuck', 'shit', 'bitch', 'asshole', 'dick', 'pussy', 'cock', 'cunt', 'motherfucker', 'bastard',
        'bastards', 'damn', 'hell', 'twat', 'slut', 'whore', 'fag', 'faggot', 'dyke', 'nigger',
        'nigga', 'chink', 'spic', 'kike', 'wop', 'gook', 'raghead', 'sandnigger', 'cracker', 'honky',
        'redneck', 'tranny', 'queer', 'retard', 'moron', 'idiot', 'dumbass', 'cocksucker', 'piss', 
        'shithead', 'ass', 'arse', 'wank', 'prick', 'tits', 'boobs', 'balls', 'penis', 'vagina', 'clit',
        'cum', 'ejaculate', 'masturbate', 'orgasm', 'semen', 'jizz', 'fap', 'suck', 'lick', 'blowjob',
        'handjob', 'rimjob', 'orgy', 'bukkake', 'gangbang', 'rape', 'pedophile', 'molester', 'bestiality',
        'incest', 'necrophilia', 'zoophilia', 'sodomy', 'prostitution', 'porn', 'pornography', 'sexting',
        'cuckold', 'fuckface', 'pussyface', 'douchebag', 'butthole', 'fatass', 'slutty', 'skank', 'hoe',
        'hoe-ass', 'fucking', 'bitches', 'shitfuck', 'fucked', 'fuckery', 'retarded', 'asswipe', 'cuntface',
        'cockface', 'asslicker', 'fuckhead', 'shitstain', 'shitbag', 'buttplug', 'skank', 'faggy', 'dipshit',
        'cockroach', 'ballbag', 'nutjob', 'turd', 'shitshow', 'shitstorm', 'dickhead', 'fucktard', 'dickwad',
        'assclown', 'whorebag', 'bitchass', 'cocksucker', 'smegma', 'clunge', 'bonghole'
    ];
        
    function filterMessage($message, $badWords) {
        foreach ($badWords as $word) {
            $message = str_ireplace($word, '[banned word]', $message);
        }
        return $message;
    }

    $filteredMessage = filterMessage($message, $badWords);

    $fileName = $userName . '_' . date('Y-m-d_H-i-s') . '.txt';

    file_put_contents($fileName, $filteredMessage);

    echo "<h2>Modificated message:</h2>";
    echo "<pre>$filteredMessage</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw</title>
</head>
<body>
    <h2>Send your message here: </h2>
    <form method="post">
        <label for="username">Login:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="5" cols="50" required></textarea><br><br>

        <button type="submit">Send</button>
    </form>
</body>
</html>
