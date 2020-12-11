<?php
$x=1500;

if ($x<100) {
    $y=$x*2.53;
} else{ if ($x>=10000){
    $y=$x*2.532;
} else {
    $y=$x*2.531;
}
}
echo $y;