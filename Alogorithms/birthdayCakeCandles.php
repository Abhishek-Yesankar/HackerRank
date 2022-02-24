<?php 

$candles = [1,3,4,4,2,4];
$candles_count = count( $candles );
function birthdayCakeCandles($candles) {
    $init = $candles[0];
    $max_values = [];
    foreach( $candles as $candle )  {
        if( $candle == $init )  {
            $max_values[] = $candle;
        } elseif( $candle > $max_values[0] )  {
            $max_values = [];
            $max_values[] = $candle;
            $init = $candle;
        }
    }
    return count( $max_values );
}
echo birthdayCakeCandles( $candles );