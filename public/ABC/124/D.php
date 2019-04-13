<?php


fscanf(STDIN, '%d %d', $N, $K);
fscanf(STDIN, '%s', $S);

$array = str_split($S);

$count = 0;
$checkedArray = [];
$toggle = false;
$toggleCount = 0;
$simulateCount = [];
for ($i = 0; $i < count($array); $i++) {
    // 文字が0の時
    if ($array[$i] == 0) {
        if ($toggle) {
            // 反転状態の時
            // 連続カウントをアップ
        } else {
            // 反転状態でない時
            if ($toggleCount > $K) {
                break;
            }
            $toggleCount++;
            simulate(array_slice($array, $i), $i, $K);
        }
    } else {
        // 文字が1の時
        $count = simulate(array_slice($array, $i), $i, $K);;


        $toggle = false;
    }
}

function simulate($simuArray, $index, $maxCount)
{
    $count = 0;
    $toggle = false;
    $toggleCount = 0;
    $breakIndex = 0;
    for ($i = $index; $i < count($simuArray); $i++) {
        if ($simuArray[$i] == 0) {
            if($toggle){
                $breakIndex++;
            }else{
                if ($toggleCount > $maxCount) {
                    break;
                }
                $toggleCount++;
            }
        } else {
            // 1の時
        }
    }

    return $count;
}