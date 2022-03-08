<?php

/**
 * Given a 6 x 6 2D Array, A:
 * 1 1 1 0 0 0
 * 0 1 0 0 0 0
 * 1 1 1 0 0 0
 * 0 0 0 0 0 0
 * 0 0 0 0 0 0
 * 0 0 0 0 0 0
 * 
 * We define an hourglass in A to be a subset of values with indices falling in this pattern in A's
 *  graphical representation:
 * 
 * a b c
 *   d
 * e f g
 * 
 * There are 16 hourglasses in A, and an hourglass sum is the sum of an hourglass' values.
 * 
 * Calculate the hourglass sum for every hourglass in A, then print the maximum hourglass sum.
 * 
 */

$arr = [
    [1, 1, 1, 0, 0, 0],
    [0, 1, 0, 0, 0, 0],
    [1, 1, 1, 0, 0, 0],
    [0, 0, 2, 4, 4, 0],
    [0, 0, 0, 2, 0, 0],
    [0, 0, 1, 2, 4, 0],
];

$arr2 = [
    [-1, -1, 0, -9, -2, -2],
    [-2, -1, -6, -8, -2, -5],
    [-1, -1, -1, -2, -3, -4],
    [-1, -9, -2, -4, -4, -5],
    [-7, -3, -3, -2, -9, -9],
    [-1, -3, -1, -2, -4, -5],
];

$arr3 = [
    [-1, 1, -1, 0, 0, 0],
    [0, -1, 0, 0, 0, 0],
    [-1, -1, -1, 0, 0, 0],
    [0, -9, 2, -4, -4, 0],
    [-7, 0, 0, -2, 0, 0],
    [0, 0, -1, -2, -4, 0],
];

function array2dMaxSum( array $arr )  {
  $per_row = 3;
  $current_row = [];
  $max_value = '';
  for( $i = 0; $i <= $per_row; $i++ )  {
      $j = 0;
      while( $j < $per_row )  {
          $current_row[] = $arr[$i + $j];
          $j++;
      }
      for( $k = 0; $k <= $per_row; $k++ )  {
         $val1 = $current_row[0][$k] + $current_row[0][$k + 1] + $current_row[0][$k + 2];
         $val2 = $current_row[1][$k + 1];
         $val3 = $current_row[2][$k] + $current_row[2][$k + 1] + $current_row[2][$k + 2];
         $total =  $val1 + $val2 + $val3;
         if( $max_value === '' || $total > $max_value ) {
            $max_value = $total;
         }
      }
      $current_row = [];
    } 
    echo $max_value;
}

array2dMaxSum( $arr3 );