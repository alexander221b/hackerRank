<?php

//$matrix = [[1, 2, 3, 4], [12, 1, 2, 5], [11, 4, 3, 6], [10, 9, 8, 7]];
//matrixRotation($matrix, 2);
function matrixRotation($matrix, $r) {
   $m = count($matrix);
	$n = count($matrix[0]); 
	$mat = []; 
	$min = min($m, $n); 
	$layers = intdiv($min, 2); 
	for ($i=0; $i < $layers ; $i++) { 
		$temp = [];
		for ($j=$i; $j < $n-1-$i; $j++) { 
			array_push($temp, $matrix[$i][$j]);
		}
		for ($j=$i; $j < $m-1-$i; $j++) { 
			array_push($temp, $matrix[$j][$n-1-$i]);
		}
		for ($j=$n-1-$i; $j > $i; $j--) { 
			array_push($temp, $matrix[$m-1-$i][$j]);
		}
		for ($j=$m-1-$i; $j > $i; $j--) { 
			array_push($temp, $matrix[$j][$i]);
		}
		array_push($mat, $temp);
	}
	for ($i=0; $i < $layers ; $i++) { 
		$row = $mat[$i];
		$idx = $r % count($row);
		for ($j=$i; $j < $n-1-$i; $j++) { 
			$matrix[$i][$j] = $row[$idx];
			$idx = inc($idx, $row);
		}
		for ($j=$i; $j < $m-1-$i; $j++) { 
			$matrix[$j][$n-1-$i] = $row[$idx];
			$idx = inc($idx, $row);
		}
		for ($j=($n-1-$i); $j > $i; $j--) { 
			$matrix[$m-1-$i][$j] = $row[$idx];
			$idx = inc($idx, $row);
		}
		for ($j=($m-1-$i); $j > $i; $j--) { 
			$matrix[$j][$i] = $row[$idx];
			$idx = inc($idx, $row);
		}
	} 
	for ($i=0; $i < $m; $i++) { 
		for ($j=0; $j < $n; $j++) { 
			print_r($matrix[$i][$j].' ');
		}
      print_r("\n");
	}
}

function inc($idx, $row){
   return  ($idx + 1) % count($row);
}

?>