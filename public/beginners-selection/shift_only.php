<?php

fscanf(STDIN, '%d', $length);
$string = trim(fgets(STDIN));

$charArray = explode(' ', $string);

$numArray = array_map(function($char){
    return intval($char);
}, $charArray);

$resultCount = searchEven(0, $numArray);

echo $resultCount.PHP_EOL;

function searchEven($count, $numArray){
    // 奇数が含まれている場合は終了
    foreach($numArray as $num){
        if($num % 2 === 1){
            return $count;
        }
    }

    // 除算カウントアップ
    $count++;

    // 2で除算
    $divided = array_map(function($num){
        return $num / 2;
    }, $numArray);

    return searchEven($count, $divided);
}