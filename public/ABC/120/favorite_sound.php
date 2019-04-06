<?php

fscanf(STDIN, '%d %d %d', $A, $B, $C);

$maxCount = intval(floor($B / $A));

if ($maxCount > $C) {
    echo $C . PHP_EOL;
} else {
    echo $maxCount . PHP_EOL;
}
