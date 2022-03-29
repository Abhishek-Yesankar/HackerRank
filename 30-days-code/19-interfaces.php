<?php

interface AdvancedArithmetic{
    public function divisorSum($n);
}

class Calculator implements AdvancedArithmetic {
    function divisorSum( $n ) {
        $divisor = [];
        for( $i = 1; $i <= $n; $i++)  {
            if( !is_float(  $n / $i ) )  {
                $divisor[] = $i;
            }
        }        
        return array_sum( $divisor );
    }
}

$cal = new Calculator; 
echo $cal->divisorSum( 20 );