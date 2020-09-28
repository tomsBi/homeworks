<?php


require_once __DIR__ . '/app/Spice.php';
require_once __DIR__ . '/app/SpicesCollection.php';

foreach (glob('app/Spices/*.php') as $filename) {
    require_once $filename;
}

use App\Spice;
use App\SpicesCollection;
use App\Spices\{Salt, Basil, Oregano, Curry};


$spices = new SpicesCollection();

$spices->add(new Salt());
$spices->add(new Basil());
$spices->add(new Oregano());
$spices->add(new Curry());

foreach ($spices->all() as $spice) {
    /** @var Spice $spice */
    echo $spice->getName() . PHP_EOL;
}

