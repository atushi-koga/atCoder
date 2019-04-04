<?php

fscanf(STDIN, '%d %d', $a, $b);

if(($a % 2 === 1) && ($b % 2 === 1)){
    $result = 'Odd';
}else{
    $result = 'Even';
}

echo $result.PHP_EOL;