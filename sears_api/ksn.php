<?php

function partial_ksn_2_full($partial) {
  // KSN Index: 9876543210
  //            XXXXXXXXXC
  // Check digit c is needed

  // pad partial into full ksn
  $unchecked_full = sprintf("%09d0",intval($partial));
  

  // sum the digits of each odd digit doubled
  // odds  8,6,4,2,0
  $odds = array(8,6,4,2,0);


  // evens 9,7,5,3,1
  $evens = array(9,7,5,3,1);

  // luhn checksum
  $checksum = 0;

  foreach ($odds as $x) {
    //$checksum +=  $unchecked_full[$x];

    $checksum += array_sum(
			   digits_of(
				     2*intval($unchecked_full[$x])
				     )
			   );
  }

  foreach ($evens as $x) {
    $checksum += intval($unchecked_full[$x]);
  }

  // determine check digit
  // calculate the amount needed to get to next number ending in zero
  $checkdigit = (10 - (intval($checksum) % 10)) %10 ;


  return sprintf("%09d%d",$partial,$checkdigit);


}


// returns an array of a sequence
function seq($first,$step,$last) {
  $s = array();
  $n = 0;
  for ($i = $first; $i <= $last;$i += $step) {
    $s[$n] = $i;
    $n++;
  }
 
  return $s;
}



function digits_of($n_str) {
  $digits = array();

  for ($i = 0; $i < strlen($n_str);$i++) {
    $digits[$i] = substr($n_str,$i,1);

  }
  

  return $digits;


}

?>