<?php

require_once __DIR__ . '/app/Spices/Spices.php';

use App\Spices\Salt;
use App\Spices\Spices;
use App\Spices\SpicesCollection;
use App\Spices\Basil;
use App\Spices\Oregano;


$spices = new SpicesCollection();

$spices->add(new Salt());
$spices->add(new Basil());
$spices->add(new Oregano());

foreach ($spices->all() as $spice) {
    /** @var Spices $spice */
    echo $spice->getName() . PHP_EOL;
}

