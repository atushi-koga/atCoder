<?php

fscanf(STDIN, '%s', $s);

$array = str_split($s);

$ans = 0;
$count = 0;
foreach ($array as $char) {
    if (in_array($char, ['A', 'C', 'G', 'T'])) {
        $count++;
        if ($ans < $count) {
            $ans = $count;
        }
    } else {
        $count = 0;
    }
}

echo $ans . PHP_EOL;