<?php

require_once __DIR__ . '/app/Spices/Spices.php';

use App\Spices\Salt;
use App\Spices\Spices;
use App\Spices\SpicesCollection;


$spices = new SpicesCollection();

$spices->add(new Salt());



foreach ($spices->all() as $spice) {
    /** @var Spices $spice */
    echo $spice->getName() . PHP_EOL;
}

