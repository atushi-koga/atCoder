<?php

fscanf(STDIN, '%s', $s);
$array = str_split($s);

$count = 0;
foreach($array as $char){
    if($char === '1'){
        $count++;
    }
}

echo $count.PHP_EOL;