<?php
class Calculator {
    function power( int $n, int $p )  {
      if( $n < 0 || $p < 0 )  {
          throw new Exception('n and p should be non-negative');
          return;
        }
       return pow( $n, $p );
    }
}
$mycl = new Calculator;
try{
    echo $mycl->power( 3, -5 );
}catch( Exception $e )  {
    echo $e->getMessage();
}