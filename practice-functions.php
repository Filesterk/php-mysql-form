<?php

function areaCircle(float $r): float {
   return pi() * (pow($r,2));
}

$result = areaCircle(5);
echo $result;

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