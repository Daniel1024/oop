<?php

namespace Daniel\Armors;

use Daniel\Armor;
use Daniel\Attack;

class SilverArmor implements Armor
{
    
    public function absorbDamage(Attack $attack)
    {
        if ($attack->isPhysical()) {
            return $attack->getDamage() / 3;
        }

        return $attack->getDamage();
        
    }
}
