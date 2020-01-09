<?php

function isPalindrome($quasiStr) {
    $str = (string) $quasiStr;
    if(strlen($str) % 2 !== 0) {
        return false;
    }
    if($str !== strrev($str)) {
        return false;
    }
    return true;
}

$pals = [];

for($i = 1; $i < 1000; $i ++) {
    for($j = 1; $j < 1000; $j++) {
        $result = $i * $j;
        if(isPalindrome($result)) {
            $pals[] = $result;
        }
    }
}

echo max($pals);