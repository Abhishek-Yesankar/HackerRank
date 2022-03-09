<?php

class Difference  {

    private $elements = array();
    public $maximumDifference;

    function __construct($arr)  {
        $this->elements = $arr;
        $this->maximumDifference = '';
    }

    public function ComputeDifference()  {
        for( $i = 0; $i < count( $this->elements ); $i++ )  {
            for( $j = 0; $j < count( $this->elements ); $j++ )  {
               if( $i == $j ) continue;
               $diff = $this->elements[$i] - $this->elements[$j];
               if( $diff > $this->maximumDifference || $this->maximumDifference === '' )  {
                   $this->maximumDifference  = $diff;
               }
            }
        }
    }
}

$a = [1,2,5];
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);