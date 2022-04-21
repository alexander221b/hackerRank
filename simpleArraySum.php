<?php

//$ar = array(1, 2, 3, 4, 5, 6); 
// echo simpleArraySum($ar);
function simpleArraySum($ar) {
    $sum = 0;
    for($i=0; $i<count($ar); $i++){
      $sum = $sum + $ar[$i];
    }
    return $sum;
}

?>

