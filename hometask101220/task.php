<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $x = 2;
    $m = 4;
    $z = tan($x) ** 2 / pow($x ** 2 + $m ** 2, 1 / 2) + $x ** ($m + 1) * pow($x ** 2 + $m ** 2, 1 / 2);
    echo $z;
    echo '<br>';
    $y = pow(45 * $x ** 5, 1 / 2) + cos($x + 0.5) - abs(($x ** 3) + 7 * ($x ** 2) - 1) / pow(6 * ($x ** 3) - sin($x) - exp($x + 1), 1 / 4) - pow($x ** 3 + 11, 1 / 2);
    echo $y;
    echo '<br>';
    echo pow(256, 1 / 2);
    echo '<br>';
    $y = 3 * sin(3 * $x) ** 2 + 10 * sin(3 * $x) * cos(3 * $x) + 3 * cos(3 * $x) + 3 * cos(3 * $x) ** 2;
    echo $y;

    ?>

</body>

</html>