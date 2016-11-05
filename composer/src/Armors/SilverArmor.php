<?php

namespace Daniel\Armors;

use Daniel\Armor;

class SilverArmor implements Armor
{
    
    public function absorbDamage($damage)
    {
        return $damage / 3;
    }
}
