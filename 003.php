<?php

$value = 600851475143;

$dividers = [];

for($i = 2; ($i * $i) <= $value; $i++) {
    if($value % $i === 0) {
        $dividers[] = $i;
        $value /= $i;
    }
}
if($value !== 1) {
    $dividers[] = $value;
}

echo max($dividers);