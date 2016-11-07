<?php 

namespace Daniel;

abstract class Weapon
{
    protected $damage = 0;
    protected $magical = false;

    public function createAttack()
    {
        return new Attack(
            $this->damage,
            $this->magical,
            $this->getDescriptionKey()
        );
    }

    public function getDescriptionKey()
    {
        return str_replace('Daniel\Weapons\\', '', get_class($this)).'Attack';
    }

}
