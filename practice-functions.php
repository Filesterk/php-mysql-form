<?php

$p = pi();
$r = 5;
function areaCircle() {
   global $p;
   global $r;
   echo $p * (pow($r,2));
}
areaCircle();

// $var = array(5, 10, 15);
// function average($var) {
//    echo array_sum($var)/count($var);
// }
// average($var);

// $arr = [2, 4, 5];
// function maxValue() {
//    global $arr;
//    $max = max($arr);
//    echo $max;
// }
// maxValue();
?>