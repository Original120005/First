<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-HW</title>
    <style>
        .circle {
            float: left;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: blue;
            margin-right: 5px;
        }
    </style>
</head>
<body>
<?php
for ($i = 0; $i < 10; $i++) {
    echo '<div class="circle"></div>';
}
?>
</body>
</html>
