<?php

namespace Daniel;

class Archer extends Unit
{
    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        show("{$this->name} dispara un flecha a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);

    }

}
