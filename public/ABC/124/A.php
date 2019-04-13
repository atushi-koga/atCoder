<?php

fscanf(STDIN, '%d %d', $A, $B);

$ans = 0;
if ($A >= $B) {
    $ans += $A;
    $A--;
} else {
    $ans += $B;
    $B--;
}

if ($A >= $B) {
    $ans += $A;
    $A--;
} else {
    $ans += $B;
    $B--;
}

echo $ans . PHP_EOL;

// 別解
fscanf(STDIN, '%d %d', $A, $B);

$answer = 0;
if ($A > $B) {
    $answer = ($A + ($A - 1));
} elseif ($A < $B) {
    $answer = ($B + ($B - 1));
} elseif ($A === $B) {
    $answer = $A + $B;
}

echo $ans . PHP_EOL;