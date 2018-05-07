<?php

$x = rand(0,100);
echo $x;

$first = 1;
$second = 1;

while ($first >= $second) {
    if ($first > $x) {
        echo ' - Задуманное число НЕ входит в числовой ряд';
        break;
    } elseif ($first == $x) {
        echo ' - Задуманное число входит в числовой ряд';
        break;
    } else {
        $third = $first;
        $first = $first + $second;
        $second = $third;
    }
}