<?php

require_once './Person.php';

class Student extends Person
{
  public int $stId;
  public function __construct($name, $surname, $stId)
  {
    $this->age = 18;
    $this->stId = $stId;
    parent::__construct($name, $surname, null);
  }
}
