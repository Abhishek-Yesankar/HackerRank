<?php
/**
 * A Node class is provided for you in the editor. A Node object has an integer data field, $data, and a Node instance pointer, $next, 
 * pointing to another node (i.e.: the next node in the list).
 * A Node insert function is also declared in your editor. It has two parameters: a pointer, $head, pointing to the first node 
 * of a linked list, and an integer, $data, that must be added to the end of the list as a new Node object.
 * 
 * Complete the insert function in your editor so that it creates a new Node (pass $data as the Node constructor argument) and 
 * inserts it at the tail of the linked list referenced by the $head parameter. Once the new node is added, return the 
 * reference to the $head node.
 * Note: The  argument is null for an empty list.
 */


class Node{
    public $data;
    public $next;
    function __construct($d)
    {
        $this->data = $d;
        $this->next = NULL;
    }
}
class Solution{
    public $head;
    
    function insert($head,$data){
     if( $this->head == null )  {
         $this->head = new Node( $data );
         return $this->head;
     }
     
     $current = $this->head;
     while( $current->next != null )  {
        $current = $current->next;
     }
     $current->next = new Node( $data );
     return $this->head;
    }

function display($head){
        $start=$head;
        while($start){
            echo $start->data,' ';
            $start=$start->next;
        }
    }
}
$T=intval(fgets(STDIN));
$head=null;
$mylist=new Solution();
while($T-->0){
    $data=intval(fgets(STDIN));
    $head=$mylist->insert($head,$data);
}
$mylist->display($head);
