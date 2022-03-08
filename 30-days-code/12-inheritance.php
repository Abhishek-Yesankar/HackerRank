<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}

class Student extends person {
    public $scores;
    /*    
    *   Class Constructor
    *   
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */

    function __construct( string $first_name, string $last_name, int $identification, array $scores )  {
        parent::__construct( $first_name, $last_name, $identification );
        $this->scores = $scores;
    }
  
    /*    
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    public function calculate()  {
      $grade = '';
      $total = array_sum( $this->scores ) / count($this->scores);
      if( $total >= 90 )  {
          $grade = 'O';
      } elseif( $total >= 80 && $total < 90 )  {
          $grade = 'E';
      } elseif( $total >= 70 && $total < 80 )  {
          $grade = 'A';
      } elseif( $total >= 55 && $total < 70 )  {
          $grade = 'P';
      } elseif( $total >= 40 && $total < 55 )  {
          $grade = 'D';
      } elseif( $total < 40 )  {
          $grade = 'T';
      }
     return $grade;
    }

}

$me = new Student( 'Memelli', 'Heraldo', 8135627, array( 80, 100 ) );

echo $me->calculate();