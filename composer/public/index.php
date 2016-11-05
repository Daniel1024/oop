<?php

namespace Daniel;

use Daniel\Armors\BronzeArmor;
use Daniel\Armors\CursedArmor;

require '../vendor/autoload.php';

$armor = new BronzeArmor();

$ramm = new Soldier('Ramm');

$silence = new Archer('Silence');
//$silence->move('el sur');
$silence->attack($ramm);

$ramm->setArmor(new CursedArmor);

$silence->attack($ramm);

$ramm->attack($silence);
