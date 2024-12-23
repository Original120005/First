<?php
session_start();
$users = 'pages/users.txt';

function register($name, $pass, $email)
{
    $name = trim(htmlspecialchars($name));
    $pass = trim(htmlspecialchars($pass));
    $email = trim(htmlspecialchars($email));

    if ($name == '' || $pass == '' || $email == '') {
        echo "<h3/><span style='color:red;'>
                Fill All Required Fields!</span><h3/>";
        return false;
    }

    if (strlen($name) < 3 || strlen($name) > 30 || strlen($pass) < 3 || strlen($pass) > 30) {
        echo "<h3/><span style='color:red;'>
                Values Length Must Be Between 3 And 30!</span><h3/>";
        return false;
    }

    global $users;
    $file = fopen($users, 'a+');
    while ($line = fgets($file, 128)) {
        $readname = substr($line, 0, strpos($line, ':'));
        if ($readname == $name) {
            echo "<h3/><span style='color:red;'>
                Such Login Name Is Already Used!</span><h3/>";
            fclose($file);
            return false;
        }
    }

    $line = $name . ':' . md5($pass) . ':' . $email . "\r\n";
    fputs($file, $line);
    fclose($file);
    return true;
}

function login($name, $pass) {
    global $users;
    $name = trim(htmlspecialchars($name));
    $pass = trim(htmlspecialchars($pass));

    if ($name == '' || $pass == '') {
        echo "<h3><span style='color:red;'>Fill all required fields!</span></h3>";
        return;
    }

    $file = fopen($users, 'r');
    while ($line = fgets($file)) {
        list($storedName, $storedPass) = explode(':', trim($line));
        if ($storedName == $name && $storedPass == md5($pass)) {
            $_SESSION['registered_user'] = $name;
            fclose($file);
            header('Location: index.php');
            exit();
        }
    }
    fclose($file);

    echo "<h3><span style='color:red;'>Invalid login or password!</span></h3>";
    header('Location: index.php?page=4');
    exit();
}
?>
