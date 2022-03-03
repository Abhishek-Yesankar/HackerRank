<?php
//print array values in reverse order

$arr = [1, 4, 3, 2];
for( $i = ( count( $arr ) - 1); $i >= 0; $i-- )  {
    echo  $arr[$i] . " ";
}