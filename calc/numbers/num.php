<?php
$num1 = $_POST["val1"];
$num2 = $_POST["val2"];
if ($num1 > $num2) {
    echo "Первое число больше";
} else {
    echo "Второе число больше";
}
