<?php

fscanf(STDIN, '%d %d %d', $N, $M, $C);
$bArray = explode(' ', trim(fgets(STDIN)));

$ans = 0;
for ($i = 0; $i < $N; $i++) {
    $aArray = explode(' ', trim(fgets(STDIN)));

    $sum = 0;
    for ($j = 0; $j < $M; $j++) {
        $sum += $aArray[$j] * $bArray[$j];
    }

    if (($sum + $C) > 0) {
        $ans++;
    }
}

echo $ans . PHP_EOL;