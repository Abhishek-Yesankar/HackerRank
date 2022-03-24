<?php

function print_int( int $i ) {
    echo $i;
}
$s = 'fafa';

try{
    print_int($s);
} catch( TypeError $t )  {
    echo "Bad String";
}
