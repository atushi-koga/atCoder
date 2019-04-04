<?php

fscanf(STDIN, '%d', $n);

$input = [];
for($i = 0; $i < $n; $i++){
    fscanf(STDIN, '%d', $d);
    $input[] = $d;
}

$array = array_unique($input);

echo count($array).PHP_EOL;