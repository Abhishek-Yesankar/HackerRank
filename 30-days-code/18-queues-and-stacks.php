<?php
/**
 * A palindrome is a word, phrase, number, or other sequence of characters which reads the same backwards and forwards. 
 * Can you determine if a given string, $s, is a palindrome?
 * To solve this challenge, we must first take each character in $s, enqueue it in a queue, and also push that same character
 * onto a stack. Once that's done, we must dequeue the first character from the queue and pop the top character off the stack,
 * then compare the two characters to see if they are the same; as long as the characters match, we continue dequeueing, popping, 
 * and comparing each character until our containers are empty (a non-match means $s isn't a palindrome).
 * 
 * Write the following declarations and implementations:
 * 1. Two instance variables: one for your $stack, and one for your $queue.
 * 2. A void pushCharacter(char ch) method that pushes a character onto a stack.
 * 3. A void enqueueCharacter(char ch) method that enqueues a character in the $queue instance variable.
 * 4. A char popCharacter() method that pops and returns the character at the top of the $stack instance variable.
 * 5. A char dequeueCharacter() method that dequeues and returns the first character in the $queue instance variable.
 * 
 * Input Format
 * You do not need to read anything from stdin. The locked stub code in your editor reads a single line containing string $s. 
 * It then calls the methods specified above to pass each character to your instance variables.
 * 
 * Constraints
 * $s is composed of lowercase English letters.
 */


class Solution {
    public $stack;
    public $queue;
    
    function pushCharacter( $stack )  {
        $this->stack.= $stack;
    }
    
    function enqueueCharacter( $queue )  {
        $this->queue.= $queue;
    }

    function popCharacter()  {
        $char = str_split( $this->stack );
        $count = count( $char );
        $this->stack = '';
        if( $count === 0 )  {
            return false;
        }elseif( $count > 1 )  {
            for( $i = 0; $i < ($count - 1); $i++ )  {
               $this->stack.= $char[$i];
            }
        }
        return $char[$count - 1];
    }

    function dequeueCharacter()  {
        $char = str_split( $this->queue );
        $count = count( $char );
        $this->queue = '';
        if( $count === 0 )  {
            return false;
        } elseif( $count > 1 )  {
            for( $i = 1; $i < $count; $i++ )  {
                $this->queue.= $char[$i];
             }
        }
        return $char[0];
    }
}

$char = 'racecar';
$obj = new Solution;
$obj->pushCharacter( $char );
$obj->enqueueCharacter( $char );

$count = count( str_split( $char ) );

$isPalindrome = true;

for( $i = 0; $i < $count; $i++ )  {
    if( $obj->dequeueCharacter() != $obj->popCharacter() )  {
        $isPalindrome = false;
        break;
    }
}

//finally print whether $char is palindrome or not.
if( $isPalindrome )
    echo "The word, ". $char .", is a palindrome.";
else
    echo "The word, ". $char .", is not a palindrome.";
