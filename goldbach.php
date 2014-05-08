<?php

/** 
 * @file
 * Martina Radeva
 * Goldbach Conjecture
 */

function goldbach($n) {
  $primes = array();
  $result = array();
  
  if ($n % 2 !== 0 || $n <= 2) {
    echo "The number is not even or is greater than 2.";
  }
  
  for ($i=0; $i<$n; $i++) {
    if (is_prime($i)) {
      $primes[] = $i;
    }
  }
  
  for ($i=0; $i<count($primes); $i++) {
    for ($j=$i; $j<count($primes); $j++) {
      if ($primes[$i] + $primes[$j] === $n) {
        $result[] = "($primes[$i], $primes[$j])";
      }
    }
  }
  
  print '[' . implode(', ', $result) . ']';
}

function is_prime($number) {
  if ($number === 1) {
    return FALSE;
  }
  if ($number === 2) {
    return TRUE;
  }
  if ($number % 2 === 0) {
    return FALSE;
  }
  
  for ($i=3; $i <= ceil(sqrt($number)); $i = $i + 2) {
    if ($number % $i === 0) {
      return FALSE;
    }
  }
  return TRUE;
}

print goldbach(4);
print '<br />';
print goldbach(6);
print '<br />';
print goldbach(8);
print '<br />';
print goldbach(10);
print '<br />';
print goldbach(12);
print '<br />';
print goldbach(100);