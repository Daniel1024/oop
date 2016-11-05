<?php 

namespace Daniel\Armors;

use Daniel\Armor;

class BronzeArmor implements Armor
{
    
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}
