<?php

$x = rand(0,100);

$first = 1;
$second = 1;

while ($first >= $second) {
    if ($first > $x) {
        echo "$x - задуманное число НЕ входит в числовой ряд";
        break;
    } elseif ($first == $x) {
        echo "$x - задуманное число входит в числовой ряд";
        break;
    } else {
        $third = $first;
        $first = $first + $second;
        $second = $third;
    }
}