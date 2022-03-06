<?php

function base10Convert( int $int )  {
    $base2 = [];
    $remain = '';
    while( $int != 1 )  {
        for( $i = 1; $i > - 1; $i++ )  {
            if( ( 2 * $i ) == $int )  {
               $remain = 0;
               $base2[] = $remain;
               $int = $i;
               break;
            } elseif( ( 2 * $i ) > $int )  {
                $remain = 1;
                $base2[] = $remain;
                $int = $i - 1;
                break;
            }
        }
    }
    //last value should always be 1
    $base2[] = 1;
    //reverse the binary to complete it
    $base2 = array_reverse( $base2 );
    return $base2;
}

function findCons( $bi )  {
   $count = count( $bi );
   $consistance = 0;
   $current_cons = 0;
   for( $i = 0; $i < $count; $i++ )  { 
    if( $bi[$i] == 1 )  {
        $current_cons++;
        if( ( $i + 1 ) == $count && $current_cons > $consistance )  {
            $consistance = $current_cons;
        }
        continue;
    } 
    if( $bi[$i] != 1  )  {
        if( $consistance == 0 )  {
            $consistance = $current_cons;
        }
        $current_cons = 0;
    }
   }
   echo $consistance;
}

$bi3 = base10Convert( 524275 );
foreach( $bi3 as $binary )  {
    echo $binary . " ";
}
echo "<br>";
findCons( $bi3 );