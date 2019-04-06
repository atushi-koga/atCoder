<?php

fscanf(STDIN, '%d %d %d', $A, $B, $K);

$minAB = min($A, $B);

$count = 0;
$ans = null;
for ($i = $minAB; $i > 0; $i--) {
    if (($A % $i === 0) && ($B % $i === 0)) {
        $count++;
        if ($count === $K) {
            $ans = $i;
            break;
        }
    }
}

echo $ans . PHP_EOL;

// 別解

//$aArray = [];
//for($i = $A; $i > 0; $i--){
//    if($A % $i === 0){
//        $aArray[] = $i;
//    }
//}
//
//$bArray = [];
//for($i = $B; $i > 0; $i--){
//    if($B % $i === 0){
//        $bArray[] = $i;
//    }
//}
//
//$array = array_intersect($aArray, $bArray);
//$array = array_values($array);
//
//$ans = $array[$K - 1];
//
//echo $ans.PHP_EOL;
