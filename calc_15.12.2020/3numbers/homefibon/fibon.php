<?php
$fib = $_POST["number"];
$a = 0;
$b = 1;
echo $a . ", ";
echo $b . ", ";
for ($i=1; $i <= $fib - 2; $i++) {
    $c = $a + $b;
    echo $c . ", ";
    $a = $b;
    $b = $c;
}
?>
<?php
$fib = $_POST["number"];
$a = 0;
$b = 1;
echo $a . ", ";
echo $b . ", ";

