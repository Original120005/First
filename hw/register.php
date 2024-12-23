<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = password_hash($password, PASSWORD_DEFAULT);

    setcookie('username', $username, time() + (86400 * 30), "/");

    echo "Registration was successfully done";
}
?>

<form method="POST" action="register.php">
    <input type="text" id="username" name="username" placeholder="username" required><br><br>
    <input type="password" id="password" name="password"  placeholder="password" required><br><br>
    <button type="submit">Sing Up</button>
</form>
