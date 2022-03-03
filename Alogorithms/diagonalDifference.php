<?php
/**
 * Given a square matrix, calculate the absolute difference between the sums of its diagonals.
 * For example, the square matrix array is shown below:
 * 1 2 3
 * 4 5 6
 * 9 8 9
 * The left-to-right diagonal = 1 + 5 + 9 = 15
 * The right to left diagonal = 3 + 5 + 9 = 17
 * Their absolute difference is 15 - 17 = 2
 */

 /**
  * @param array $arr an array of integers
  */
function diagonalDifference($arr) {
    $base = count( $arr );
    $left_digonal = [];
    $right_digonal = [];
    $prev_val = 0;
    for( $i = 1; $i < ($base + 1); $i++ )  {
        if( empty( $left_digonal ) )  {
            $left_digonal[] = $i;
            $prev_val = $i;
            continue;
        }
        $left_digonal[] = $prev_val + 1 + $base;
        $prev_val = $left_digonal[count( $left_digonal) - 1];
    }
    for( $i = 1; $i < ($base + 1); $i++ )  {
        if( empty( $right_digonal ) )  {
            $right_digonal[] = $base;
            $prev_val = $base;
            continue;
        }
        $right_digonal[] = $prev_val - 1 + $base;
        $prev_val = $right_digonal[count( $right_digonal) - 1];
    }
    $eg_arr = [];
    $left_digonal_value = [];
    $right_digonal_value = [];
    foreach( $arr as $item )  {
        foreach( $item as $j )  {
            $eg_arr[] = $j;
        }
    }
    foreach( $left_digonal as $digonal )  {
        $left_digonal_value[] = $eg_arr[($digonal - 1)];
    }
    foreach( $right_digonal as $digonal )  {
        $right_digonal_value[] = $eg_arr[($digonal - 1)];
    }
    if( array_sum( $right_digonal_value ) > array_sum( $left_digonal_value ) )  {
        return  array_sum( $right_digonal_value ) - array_sum( $left_digonal_value );
    } else {
        return  array_sum( $left_digonal_value ) - array_sum( $right_digonal_value );
    }
}
$arr = [
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12],
];

print_r(diagonalDifference( $arr ));