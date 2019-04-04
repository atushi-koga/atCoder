<?php

fscanf(STDIN, '%d %d %d', $n, $a, $b);

$result = 0;
for($i = 1; $i <= $n; $i++){
    // 整数を各桁にバラし、各桁の和を算出
    $array = str_split($i);
    $sum = 0;
    foreach($array as $num){
        $sum += $num;
    }

    if(($sum >= $a) && ($sum <= $b)){
        $result += $i;
    }
}

echo $result.PHP_EOL;
