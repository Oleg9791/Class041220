<?php
$depositAmount = 100;
$percent = 1.5;
$months = 5;
$sum = $depositAmount;

for ($i = 1; $i <= $months; $i++) {
    $sum = $sum + ($sum * $percent / 100) / 12;
}
echo round($sum, 2);//цикл с параметром for

// while ($i <= $months) {
//     $sum = $sum + (($sum * $percent / 100) / 12);
//     $i = $i + 1;
// }
// echo round($sum, 2);//предусловие
// do {
//     $i = $i + 1;
//     $sum = $sum + ($sum * $percent / 100);
// } while ($i <= $months);
// echo round($sum, 2);//постусловие
