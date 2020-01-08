<?php

$sum = 0;
$i = 1;
$prev = 1;
$tmp = 0;

while($i < 4000000) {
    $sum += ($i % 2 === 0) ? $i : 0;

    $tmp = $i;
    $i += $prev;
    $prev = $tmp;
}

echo $sum;