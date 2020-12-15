<?php
$depositAmount = 100;
$percent = 1.5;
$months = 12;
$sum = $depositAmount;
while ($i <= $months) {
    $sum = $sum + ($sum * $percent / 100) / 12;
    $i = $i + 1;
}
echo round($sum, 2);//предусловие