<?php

namespace Daniel;

require 'src/helpers.php';

spl_autoload_register(function ($className) {
    if (strpos($className, 'Daniel\\') === 0) {
        $file = "src/$className.php";

        $file = str_replace('Daniel\\', '', $file);

        if (file_exists($file)) {
            require $file;
        }
    }
});

$armor = new BronzeArmor();

$ramm = new Soldier('Ramm');

$silence = new Archer('Silence');
//$silence->move('el sur');
$silence->attack($ramm);

$ramm->setArmor(new CursedArmor);

$silence->attack($ramm);

$ramm->attack($silence);
