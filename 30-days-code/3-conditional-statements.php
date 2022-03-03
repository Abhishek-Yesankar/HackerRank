<?php
//Given an integer, n , perform the following conditional actions:
// If n is odd, print Weird
// If n is even and in the inclusive range of 2 to 5, print Not Weird
// If n is even and in the inclusive range of 6 to 20, print Weird
// If n is even and greater than 20, print Not Weird
//Complete the stub code provided in your editor to print whether or not n is weird.

//sample input
$N = 22;
$is_even = $N % 2;
if( $is_even != 0 )  {
    echo "Weird";
} elseif( $is_even == 0 )  {
  if( $N <= 2 || $N <= 5 || $N > 20)  {
      echo "Not Weird";
  } elseif( $N <= 6 || $N <= 20 )  {
      echo "Weird";
  }
}