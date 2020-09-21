<?php

require_once __DIR__ . '/app/Spice.php';
require_once __DIR__ . '/app/SpicesCollection.php';
require_once __DIR__ . '/app/Spices/Salt.php';
require_once __DIR__ . '/app/Spices/Oregano.php';
require_once __DIR__ . '/app/Spices/Basil.php';

use App\Spices\Salt;
use App\Spice;
use App\SpicesCollection;
use App\Spices\Basil;
use App\Spices\Oregano;


$spices = new SpicesCollection();

$spices->add(new Salt());
$spices->add(new Basil());
$spices->add(new Oregano());

foreach ($spices->all() as $spice) {
    /** @var Spice $spice */
    echo $spice->getName() . PHP_EOL;
}

