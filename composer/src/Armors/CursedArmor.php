<?php 

namespace Daniel\Armors;

use Daniel\Armor;
use Daniel\Attack;

class CursedArmor extends Armor
{
    
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() * 2;
    }
}
