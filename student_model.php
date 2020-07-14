<?php

class Student {

  public $name ;
  public $index;
  public $rating;
  public $city;

  function __construct($name, $index, $rating, $city){
    $this->name = $name;
    $this->index = $index;
    $this->rating = $rating;
    $this->city = $city;
  }
}

?>
