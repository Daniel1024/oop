<?php 

namespace Daniel;

class BronzeArmor implements Armor
{
    
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}
