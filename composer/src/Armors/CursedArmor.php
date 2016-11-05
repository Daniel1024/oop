<?php 

namespace Daniel\Armors;

use Daniel\Armor;

class CursedArmor implements Armor
{
    
    public function absorbDamage($damage)
    {
        return $damage * 2;
    }
}
