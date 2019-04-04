<?php

fscanf(STDIN, '%d', $n);
$numArray = explode(' ', trim(fgets(STDIN)));

rsort($numArray, SORT_NUMERIC);

$aliceSum = 0;
$bobSum = 0;

foreach($numArray as $index => $num){
    if($index % 2 === 0){
        $aliceSum += $num;
    }else{
        $bobSum += $num;
    }
}

echo ($aliceSum - $bobSum).PHP_EOL;