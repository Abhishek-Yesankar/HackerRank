<?php
//HackerLand University has the following grading policy:
//Every student receives a  in the inclusive range from 0 to 100.
//Any grade less than 40 is a failing grade.

//Sam is a professor at the university and likes to round each student's 
//grade according to these rules:

//1.   If the difference between the grade and the next multiple of 5 is less than 3, 
//     round grade up to the next multiple of 5.
//2.   If the value of grade is less than 38, no rounding occurs as the result will 
//     still be a failing grade.

//Example:
// grade = 57 do not round ( 60 - 57 is 3 or higher )

/**
 * @param array $grades of the students
 * @return array final $grades of all the students
 * first array value is the students numbers
 */

function gradingStudents( $grades ) {
    $arr = [];
    for( $i = 0; $i < count( $grades ); $i++ ) {
        if( $grades[$i] < 38 ) {
            $arr[] = $grades[$i];
            continue;
        }

        if( ( $grades[$i] % 5 ) != 0 ) {
            $diff = 5 - ( $grades[$i] % 5 );
            if( $diff < 3 ) $grades[$i] += $diff;
        }

        $arr[] = $grades[$i];
    }
    return $arr;
}
$arr = [73,67,38,33];

print_r( gradingStudents( $arr ) );
