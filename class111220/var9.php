<?php
$many = 100;
$month = 12;
$percent = 1.5;
$s = $many;


for ($i = 1; $i <= $month; $i++) {
    $s = $s + ($s  * $percent / 100);
}
echo round($s, 2);//цикл c параметром for
