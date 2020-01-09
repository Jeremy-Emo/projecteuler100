<?php

function isDivisible($x) {
    for($i = 2; $i <= 20; $i++) {
        if($x % $i !== 0) {
            return false;
        }
    }
    return true;
}

$init = 20;

while(true) {
    if(isDivisible($init)) {
        break;
    }
    $init++;
}

echo $init;