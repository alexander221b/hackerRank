<?php

//$s = [[5, 3, 4], [1, 5, 8], [6, 4, 2]];
//echo formingMagicSquare($s);
function formingMagicSquare($s) {
    $allMagicSquares = [ 
        [[8, 1, 6], [3, 5, 7], [4, 9, 2]],
        [[6, 7, 2], [1, 5, 9], [8, 3, 4]],
        [[2, 9, 4], [7, 5, 3], [6, 1, 8]],
        [[4, 3, 8], [9, 5, 1], [2, 7, 6]],
        [[6, 1, 8], [7, 5, 3], [2, 9, 4]],
        [[2, 7, 6], [9, 5, 1], [4, 3, 8]],
        [[4, 9, 2], [3, 5, 7], [8, 1, 6]],
        [[8, 3, 4], [1, 5, 9], [6, 7, 2]]
    ];
    $minCost = PHP_INT_MAX;
    for ($i=0; $i < count($allMagicSquares); $i++) { 
      $cost = getCost($s, $allMagicSquares[$i]);
      $minCost = min($cost, $minCost);
    }
    return $minCost;
}

function getCost($s,  $magic){
  $cost = 0;
  for ($i=0; $i < 3 ; $i++) { 
    for ($j=0; $j < 3; $j++) { 
      $cost += abs($s[$i][$j] - $magic[$i][$j]);
    } 
  }
  return $cost;
}

?>

