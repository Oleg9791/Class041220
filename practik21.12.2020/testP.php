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
    // $b = [56, 35, 27, 24, 45, 42, 32, 81, 49, 48];
    // $x = 0;
    // $y = 0;
    // for ($i = 0; $i <= 9; $i++) {
    //     if ($a[$i] == $b[$i]) {
    //         $x = $x + 1;
    //     } else {
    //         $y = $y + 1;
    //     }
    // }


    if ($_POST["a1"] == 56) {
        $i++;
    }
    if ($_POST["a2"] == 35) {
        $i++;
    }
    if ($_POST["a3"] == 27) {
        $i++;
    }
    if ($_POST["a4"] == 24) {
        $i++;
    }
    if ($_POST["a5"] == 45) {
        $i++;
    }
    if ($_POST["a6"] == 42) {
        $i++;
    }
    if ($_POST["a7"] == 32) {
        $i++;
    }
    if ($_POST["a8"] == 81) {
        $i++;
    }
    if ($_POST["a9"] == 49) {
        $i++;
    }
    if ($_POST["a10"] == 48) {
        $i++;
    }
    if ($i >= 7) {
        echo "ДА";
    } else {
         echo "Нет";
    }

    // if ($i >= 5) {
    //     // echo "Количество правильных ответов - " . $i . "<br\n>" . "  Тест пройден успешно";
    //     echo "Сдан";
    // } else {
    //     // echo "Количество неправильных ответов  " . $y . "<br\n>" . "  Тест не сдан";
    //     echo "   не сдан";
    // }

    ?>
</body>

</html>