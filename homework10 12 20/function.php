<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        i {
            color: red;
        }

        b {
            color: green;
        }
    </style>
</head>

<body>
    <?php
    $a = 2;
    $b = 3;
    $x = 4;
    $y = ($a * $x + 2 * $b * ($x ** 2)) * abs(cos($x ** 2)) / pi() * exp($x);
    echo $y;
    echo '<br><i>';
    $y = pow($a * log($b * $x), 1 / 3) / 1 + sin($a * $x) ** 2;
    echo $y;
    echo '</i><br><b>';
    $y = abs((sin($x ** 3)) + $a) * exp($a) / pow($b ** 2 + $c ** 2, 1 / 3);
    echo $y;
    echo '</b><br>';
    ?>
</body>

</html>