<?php
$x = 4;

if ($x > 5) {
    $y = sqrt($x);
} else {
    if ($x <= 3) {
        $y = $x ** 2;
    } else {
        $y = $x + 5;
    }
}
echo $y;//разветвляющийся алгоритм
