<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site 1</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row mt-4">
        <div class="col-sm-4">
            <section>
                <?php
                include_once('pages/menu.php');
                include_once('pages/functions.php');

                if (isset($_POST['loginbtn'])) {
                    $login = $_POST['login'];
                    $password = $_POST['password'];
                    login($login, $password);
                }

                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    if ($page == 1) include_once('pages/home.php');
                    if ($page == 2) include_once('pages/upload.php');
                    if ($page == 3) include_once('pages/gallery.php');
                    if ($page == 4) include_once('pages/registration.php');
                }
                ?>
            </section>
        </div>

        <div class="col-sm-8">
            <header>
                <form action="index.php" method="post" class="border p-3 rounded">
                    <h5>Login</h5>
                    <input type="text" name="login" class="form-control mb-2" placeholder="Enter login" required>
                    <input type="password" name="password" class="form-control mb-2" placeholder="Enter password" required>
                    <button type="submit" name="loginbtn" class="btn btn-primary btn-block">Login</button>
                </form>
            </header>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
