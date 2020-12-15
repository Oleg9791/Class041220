<?php
$a = $_POST["vala"];
$b = $_POST["valb"];
$c = $_POST["valc"];
for ($i = $a; $i <= $b; $i += $c) {
    echo $i . "<br>";
}

