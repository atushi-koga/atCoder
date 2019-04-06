<?php

fscanf(STDIN, '%d', $N);
fscanf(STDIN, '%d', $A);
fscanf(STDIN, '%d', $B);
fscanf(STDIN, '%d', $C);
fscanf(STDIN, '%d', $D);
fscanf(STDIN, '%d', $E);

$timer = intval(ceil($N / min($A, $B, $C, $D, $E))) + 4;

echo $timer . PHP_EOL;