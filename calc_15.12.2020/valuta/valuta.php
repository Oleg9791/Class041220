<?php
$byn = $_POST["byn"];
$dol = $byn / 2.53;
$euro = $byn / 3.07;
$rus = $byn / 0.0343;
echo round($dol, 2) . " Покупка доллара<br>";
echo round($euro, 2) . " Покупка евро  <br>";
echo round($rus, 2) . " Покупка российского рубля  <br>";
