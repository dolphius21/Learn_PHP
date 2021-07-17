<?php

// What is class and instance

require_once './Person.php';
require_once './Student.php';

// $p = new Person('Brad', 'Traversy');
// $p->setAge(30);
// echo '<pre>';
// var_dump($p);
// echo '</pre>';
// echo $p->getAge() . '<br>';

// echo Person::$counter;

// $p2 = new Person('John', 'Smith');
// echo '<pre>';
// var_dump($p2);
// echo '</pre>';

// echo Person::$counter;

$student = new Student("Jeff", "Winger", 21);

echo '<pre>';
var_dump($student);
echo '</pre>';
