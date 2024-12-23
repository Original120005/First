<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Страничка</title>
</head>
<body>
<?php
$tag = 'div';
$background_color = 'lightblue';
$color = 'darkblue';
$width = '300px';
$height = '200px';

echo "<$tag style='background-color: $background_color; color: $color; width: $width; height: $height;'>
            Це блок з заданими стилями.
          </$tag>";
?>
</body>
</html>
