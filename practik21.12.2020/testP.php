<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $a = [$_POST["a1"], $_POST["a2"], $_POST["a3"], $_POST["a4"], $_POST["a5"], $_POST["a6"], $_POST["a7"], $_POST["a8"], $_POST["a9"], $_POST["a10"]];
    $b = [56, 35, 27, 24, 45, 42, 32, 81, 49, 48];
    $x = 0;
    $y = 0;
    for ($i = 0; $i <= 9; $i++) {
        if ($a[$i] == $b[$i]) {
            $x = $x + 1;
        } else {
            $y = $y + 1;
        }
    }
    if ($x >= 5) {
        echo "Количество правильных ответов - " . $x ."<br\n>". "  Тест пройден успешно";
    } else {
        echo "Количество неправильных ответов  " . $y ."<br\n>". "  Тест не сдан";
    }

    ?>
</body>

</html>