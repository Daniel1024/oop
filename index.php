<?php

class Person
{
    protected $firstName;
    protected $lastName;
    protected $nickName;
    protected $changeNickName = 0;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setNickName($nickName)
    {
        if ($this->changeNickName >= 2) {
            throw new Exception("You can't change a nickname more than 2 times");
            
        }

        if (! empty(trim($nickName))) {
            $this->nickName = strtolower($nickName);
            $this->changeNickName++;
        }

    }

    public function getNickName()
    {
        return $this->nickName;
    }
    
    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$person1 = new Person('Daniel', 'López');

$person1->setNickName('Daniel1024');

echo "El nickname de {$person1->getFullName()} es: {$person1->getNickName()}";