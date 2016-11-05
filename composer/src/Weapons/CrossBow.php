<?php 

namespace Daniel\Weapons;

use Daniel\Weapon;
use Daniel\Unit;

class CrossBow extends Weapon
{
    protected $damge = 40;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} dispara una flecha a {$opponent->getName()}";
    }

}
