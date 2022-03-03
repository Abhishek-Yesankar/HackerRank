<?php
//Given a string, S, of length N that is indexed from 0 to N - 1, print its even-indexed
//and odd-indexed characters as 2 space-separated strings on a single line 
//(see the Sample below for more detail). 
//Note: 0 is considered to be an even index.
//Example
//s = adbecf
//Print: abc def

//sample input
$str = 'adbecf';

function EvenOddString( string $str )  {
    $arr = str_split( $str );
    $even = '';
    $odd = '';

    for( $i = 0; $i < count( $arr ); $i++ )  {    
        if( ( $i % 2 ) == 0 )  {
           $even.= $arr[$i];
        } elseif( ( $i % 2 ) != 0 )  {
           $odd.= $arr[$i];
        }
    }

    return $even . ' ' . $odd . PHP_EOL;
}

echo EvenOddString( $str );