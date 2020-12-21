<?php
$age = $_POST["age"];
if ($age <= 16) {
    echo "Вы юноша";
} elseif ($age > 16 and $age <= 30) {
    echo "Вы молодой человек";
} elseif ($age > 30 and $age <= 70) {
    echo "Вы мужчина";
} else {
    echo " Вы пожилой человек";
}
