<?php 

namespace Daniel\Armors;

use Daniel\Armor;
use Daniel\Attack;

class MissingArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}