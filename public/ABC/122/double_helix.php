<?php

fscanf(STDIN, '%s', $b);

switch ($b) {
    case 'A':
        $ans = 'T';
        break;
    case 'C':
        $ans = 'G';
        break;
    case 'G':
        $ans = 'C';
        break;
    case 'T':
        $ans = 'A';
        break;
}

echo $ans . PHP_EOL;