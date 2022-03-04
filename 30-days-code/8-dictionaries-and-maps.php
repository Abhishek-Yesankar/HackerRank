<?php
$_fp = fopen( './eg.txt', 'r' );
$all_contact = [];
for ( $i = 0; $i > -1; $i++) { 
    if( !( $line = fgets( $_fp ) ) ) break;
    if( $i == 0 ) {
        $total_contact = $line;
        continue;
    }
    if( $i <= $total_contact )  {
       $contact = explode( ' ', $line );
       $all_contact[trim($contact[0])] = trim($contact[1]);
       continue;
    }
    $line = trim( $line );
    if( array_key_exists( $line , $all_contact ) )  {
        echo  $line . '=' . $all_contact[$line] . PHP_EOL;
    } else {
        echo "Not found" . PHP_EOL;
    }
}
