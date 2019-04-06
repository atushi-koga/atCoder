<?php

fscanf(STDIN, '%d %d', $row, $column);
fscanf(STDIN, '%d %d', $inputRow, $inputColumn);

$cells = $row * $column;

$blackCells = $inputRow * $column + $inputColumn * $row - $inputRow * $inputColumn;

$whiteCells = $cells - $blackCells;

echo $whiteCells . PHP_EOL;