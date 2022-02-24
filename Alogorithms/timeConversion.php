<?php
/**
 * Given a time in 12-hour AM/PM format, convert it to military (24-hour) time.
 * Note: - 12:00:00AM on a 12-hour clock is 00:00:00 on a 24-hour clock.
 *  12:00:00PM on a 12-hour clock is 12:00:00 on a 24-hour clock.
 */

//example string
$str = '12:05:39AM';
/**
 * Complete the timeConversion function in the editor below. 
 * It should return a new string representing the input time in 24 hour format.
 */
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