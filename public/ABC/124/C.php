<?php

fscanf(STDIN, '%s', $S);

$charArray = [];
foreach (str_split($S) as $val) {
    if ($val === '0') {
        $charArray[] = false;
    } else {
        $charArray[] = true;
    }
}

$count = 0;
$checkedChar = [];
for ($i = 0; $i < count($charArray); $i++) {
    if ($i === 0) {
        $checkedChar[] = $charArray[$i];
    } else {
        if ($charArray[$i] === $checkedChar[$i - 1]) {
            $count++;
            $checkedChar[] = !$charArray[$i];
        } else {
            $checkedChar[] = $charArray[$i];
        }
    }
}

echo $count . PHP_EOL;