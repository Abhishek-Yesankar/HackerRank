<?php
/**
 * Given an array, $a, of size $n distinct elements, sort the array in ascending order using the Bubble Sort algorithm above.
 * Once sorted, print the following 3 lines:
 * 1. Array is sorted in numSwaps swaps (where numSwaps is the number of swaps that took place)
 * 2. First Element: firstElement (where firstElement is the first element in the sorted array)
 * 3. Last Element: lastElement (where lastElement is the last element in the sorted array)
 */

function swap( &$a, &$b )  {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$a = [3,2,1];
$n = count( $a );
$swap_count = 0;
for( $i = 0; $i < $n; $i++ )  {
   $element_swap = 0;
   for( $k = 0; $k < ( $n - 1 ); $k++ )  {
      if( $a[$k] > $a[$k + 1] )  {
          swap( $a[$k], $a[$k + 1] );
          $swap_count++;
          $element_swap++;
      }
   }
   if( $element_swap === 0 )  {
       echo "Array is sorted in $swap_count swaps.<br>";
       echo "First Element: {$a[0]}<br>";
       echo "Last Element: {$a[$n - 1]}<br>";
       break;
   }
}




