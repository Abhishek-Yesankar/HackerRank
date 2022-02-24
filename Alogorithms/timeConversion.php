<?php
$str = '12:05:39AM';
function timeConversion( $s ) {
   $s = preg_match( '/(.{2}):(.{2}):(.{2})(AM|PM)/', $s, $match );
   $hour = $match[1];
   $minute = $match[2];
   $second = $match[3];
   $timeZone = $match[4];
   if( $timeZone == "PM" )  {
       if( $hour < 12 ) {
        $hour+= 12;
        if( $hour == 24 )  {
            $hour = '00';
        } 
       }
   }
   if( $timeZone == "AM" )  {
       if( $hour == 12 )  {
           $hour = '00';
       }
   }
   return "$hour:$minute:$second";
}
echo timeConversion( $str );