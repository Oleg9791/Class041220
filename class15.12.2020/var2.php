<?php
// $a = 0;
// $n = 4;

// for ($i = 1; $i <= $n; $i++) {
//     $a = $a + $i;
// }
// echo $a . "<br>" . $i;
// echo "<br>\n";

// $i = 2;
// $n = 4;
// $a = 0;
// while ($i <= $n) {
//     $a = $a + $i;
//     $i++;
// }
// echo $a . "<br>" . $i;
// $sum = 0;
// $n = 10;
// for ($i = 1; $i <= $n; $i++) {
//     $sum = $sum + $i;
//     echo $sum . "<br><br>";
// }
// echo $sum."<br><br>";
// echo $i;
// echo "<br\n>";
$fib = $_POST["num"];
$a = 0;
$b = 1;

echo $a . " " . $b . " ";
for ($i = 0; $i <= $fib; $i++) {
    $c = $a + $b;
    $a = $b;
    $b = $c;
    echo $c . " ";
}
echo "<br\n>";
$a = 0;
$b = 1;
echo $a . " " . $b . " ";
$i = 0;
while ($i <= $fib) {
    $c = $a + $b;
    $a = $b;
    $b = $c;
    $i++;
    echo $c . " ";
}
echo "<br\n>";

$a = 0;
$b = 1;
echo $a . " " . $b . " ";
$i = 0;
do {
    $c = $a + $b;
    $a = $b;
    $b = $c;
    $i++;
    echo $c . " ";
} while ($i <= $fib);
