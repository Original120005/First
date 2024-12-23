<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_SESSION['username']) && $_SESSION['username'] === $username) {
        if (password_verify($password, $_SESSION['password'])) {
            echo "Hello, $username";
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "User was not founded";
    }
}
?>

<form method="POST" action="login.php">
    <input type="text" id="username" name="username" placeholder="username" required><br><br>
    <input type="password" id="password" name="password" placeholder="password" required><br><br>
    <button type="submit">Login</button>
</form>
