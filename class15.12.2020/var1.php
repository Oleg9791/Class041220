<?php
<<<<<<< HEAD
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

for ($i = $a; $i <= $b; $i = $i + $c) {

    echo  $i . "<br>";
    // echo "<br>";
}
=======
$fib = $_POST["num"];

echo ($a = 0) . "<br>" . ($b = 1) . "<br>";
for ($i = 0; $i < $fib; $i++) {
    $c = $a + $b;
    echo $c . "<br>";
    $a = $b;
    $b = $c;
}
echo "<br\n>";


echo ($a = 0) . "<br>" . ($b = 1) . "<br>";
$i = 0;
while ($i < $fib) {
    $c = $a + $b;
    echo $c . "<br>";
    $a = $b;
    $b = $c;
    $i++;
}
echo "<br\n>";
echo ($a = 0) . "<br>" . ($b = 1) . "<br>";
$i = 0;

do {
    $c = $a + $b;
    echo $c . "<br>";
    $a = $b;
    $b = $c;
    $i++;
} while ($i < $fib);
>>>>>>> 0545a4efcc62e5c08b1f5215055fb639b9c899ec
