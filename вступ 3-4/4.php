<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-HW</title>
</head>
<body>
<?php
$binary = "111111";
$hexadecimal = dechex(bindec($binary));
echo "binary: " . $binary . "<br>";
echo "hex: " . $hexadecimal . "<br>";
?>
</body>
</html>