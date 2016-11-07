<?php

namespace Daniel\Armors;

use Daniel\Armor;
use Daniel\Attack;

class SilverArmor extends Armor
{
    
    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage() / 3;        
    }

}
