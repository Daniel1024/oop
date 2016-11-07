<?php 

namespace Daniel\Weapons;

use Daniel\Weapon;
//use Daniel\Unit;

class FireBow extends Weapon
{
    protected $damage = 30;
    protected $magical = true;
    protected $description = ':unit dispara una flecha de fuego a :opponent';

}
