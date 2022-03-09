<?php

abstract class Book  {
    
    protected $title;
    protected  $author;
    
     function __construct($t,$a){
        $this->title=$t;
        $this->author=$a;
    }
    abstract protected function display();
}

class MyBook extends Book  {
    public $price;

    function __construct( string $title, string $author, float $price )  {
        parent::__construct( $title, $author );
        $this->price = $price;
    }

    function display()  {
      echo "Title: $this->title" . PHP_EOL;
      echo "Author: $this->author" . PHP_EOL;
      echo "Price: $this->price" . PHP_EOL;
    }
}