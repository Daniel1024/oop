<?php 

namespace Daniel\Armors;

use Daniel\Armor;
use Daniel\Attack;

class BronzeArmor extends Armor
{
    
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }
}
