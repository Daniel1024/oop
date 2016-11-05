<?php

class Person
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    
    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$person1 = new Person('Daniel', 'López');

$person2 = new Person('Marbella', 'Soto');

echo "{$person1->fullName()} es novio de {$person2->fullName()}";