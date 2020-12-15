<?php

// for ($i = 1; $i <= 10; $i++) {
//     echo  $i . "<br>";
// }//оператор for
// for ($i = 1;; $i++) {
//     if ($i > 10) {
//         break;
//     }
//     echo $i;
// }
// $i = 1;
// for (; ; ) {
//     if ($i > 10) {
//         break;
//     }
//     echo $i;
//     $i++;
// }
// for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
// $i = 0;
// $n = 9;
// while ($i <= $n) {
//     $i = $i + 1;

//     echo $i . "<br>";//предусловие
// }
// $n = 9;
// $i = 0;
// do {
//     $i = $i + 1;
//     echo $i. "<br>" ;
// } while ($i <= $n);//постусловие
$i = 0;
$n=20;
do {
    $i = $i + 1;
    echo $i . "<br>";
} while ($i < $n);
