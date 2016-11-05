<?php 

namespace Daniel\Weapons;

use Daniel\Weapon;
use Daniel\Unit;

class BasicBow extends Weapon
{
    protected $damge = 20;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} dispara una flecha a {$opponent->getName()}";
    }

}
