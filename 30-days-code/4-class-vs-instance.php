<?php
/**
 * Write a Person class with an instance variable, age, and a constructor that takes an
 * integer, initialAge, as a parameter. The constructor must assign initialAge to age
 * after confirming the argument passed as initialAge is not negative; if a negative
 * argument is passed as initialAge, the constructor should set age to 0 and print Age
 * is not valid, setting age to 0.. In addition, you must write the following instance methods:
 * 1. yearPasses() should increase the age instance variable by 1
 * 2. amIOld() should perform the following conditional actions:
 *    If age < 13, print You are young..
 *    If age > 13 and age < 18, print You are a teenager..
 *    Otherwise, print You are old..
 * 
 */

class Person{
   public $age;
   
   public function __construct($initialAge){
        if( $initialAge < 0 )  {
            echo "Age is not valid, setting age to 0." . PHP_EOL;
            $this->age = 0;
        } else {
            $this->age = $initialAge;
        }
    }
    
   public  function amIOld(){
      if( $this->age < 13 )  {
          echo "You are young." . PHP_EOL;
      } elseif( $this->age >= 13 && $this->age < 18 )  {
          echo "You are a teenager." . PHP_EOL;
      } elseif( $this->age >= 18 ){
          echo "You are old." . PHP_EOL;
      }
    }
    
   public  function yearPasses(){
       $this->age++;
    }
   
}

//sample output
$abhi = new Person( 17 );
$abhi->amIOld();
$abhi->yearPasses();
$abhi->amIOld();