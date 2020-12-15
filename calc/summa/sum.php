<?php
$sum = $_POST["summa"];
$sum1 = 0;
for ($i = 1; $i <= $sum; $i++) {
    $sum1 = $sum1 + $i;
    echo $i . "<br>";
}
echo $sum1;
