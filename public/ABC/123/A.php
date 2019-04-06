<?php

fscanf(STDIN, '%d', $A);
fscanf(STDIN, '%d', $B);
fscanf(STDIN, '%d', $C);
fscanf(STDIN, '%d', $D);
fscanf(STDIN, '%d', $E);
fscanf(STDIN, '%d', $k);

if($E - $A > $k){
    echo ':('.PHP_EOL;
}else{
    echo 'Yay!'.PHP_EOL;
}