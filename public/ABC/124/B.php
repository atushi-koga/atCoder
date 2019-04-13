<?php

fscanf(STDIN, '%d', $N);
$harray = explode(' ', trim(fgets(STDIN)));

$canLookSeaMtHeight = [];
for ($i = 0; $i < $N; $i++) {
    if ($i === 0) {
        $canLookSeaMtHeight[] = $harray[$i];
    } elseif ($harray[$i] >= max($canLookSeaMtHeight)) {
        // 前の山よりも高ければ海が見える
        $canLookSeaMtHeight[] = $harray[$i];
    }
}

echo count($canLookSeaMtHeight) . PHP_EOL;