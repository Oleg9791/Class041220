<?php
$x = 2;
if ($x > 2) {
    $y = sqrt($x);
} else if ($x <= 2) {
    $y = $x ** 2;
}
echo $y;//разветвляющийся алгоритм
