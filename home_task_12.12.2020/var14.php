<?php
$many = 100;
$month = 12;
$percent = 1.5;
$s = $many;
$i = 1;

// // for ($i = 1; $i <= $month; $i++) {
// //     $s = $s + ($s / 100 * $percent);
// // }

// echo round($s, 2);//for
// while ($i <= $month) {
//     $s = $s + ($s  /100* $percent);
//     $i = $i + 1;
// }
// echo round($s, 2);//предусловие
do {
    $s = $s + ($s * $percent / 100);
    $i = $i + 1;
} while ($i <= $month);
echo round($s, 2);//постусловие
