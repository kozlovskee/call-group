<?php

$a = 'ABCD';
$b = 'CDBA';

function comparison(string $a, string $b) {
  $firstArray = str_split($a);
  $secondArray = str_split($b);

  if (array_diff($firstArray, $secondArray) == null 
    && array_diff($secondArray, $firstArray) == null 
    && count($firstArray) == count($secondArray)) {
    echo 'Данные одинаковые';
  }
  else {
    echo 'Данные разные';
  }
}

comparison($a, $b);