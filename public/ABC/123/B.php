<?php

fscanf(STDIN, '%d', $A);
fscanf(STDIN, '%d', $B);
fscanf(STDIN, '%d', $C);
fscanf(STDIN, '%d', $D);
fscanf(STDIN, '%d', $E);


$amariLast = 10;
$last = $A;
foreach ([$A, $B, $C, $D, $E] as $val) {
    $amari = $val % 10;
    if ($amari < $amariLast && $amari !== 0) {
        $last = $val;
        $amariLast = $amari;
    }
}

$ans = 0;
foreach ([$A, $B, $C, $D, $E] as $val) {
    if ($val < 10) {
        $ans += 10;
    } else {
        $ans += (ceil($val / 10) * 10);
    }
}
$ans -= (10 - $amariLast);

echo intval($ans) . PHP_EOL;