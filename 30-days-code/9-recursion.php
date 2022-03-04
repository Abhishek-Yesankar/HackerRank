<?php

// Complete the factorial function
// Example if n = 3
//   factorial(3) x factorial(2) = 3 x 2 = 6
//   factorial(2) x factorial(1) = 2 x 1 = 2
//   factorial(1) = 1

function factorial( int $n )  {

    if( $n == 1 ){
      return 1;
    }

    return  $n * factorial( $n - 1 );
}

//sample input
$n = 3;
echo factorial( $n );