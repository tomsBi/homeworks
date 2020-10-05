<?php

require_once 'NumberGenerator.php';
require_once 'NumberStorage.php';

$numberStorage = new NumberStorage();
$numberGenerator = new NumberGenerator(1, 1000, $numberStorage->load());

$randomNumber = $numberGenerator->getNumber();

$numberGenerator->add($randomNumber);

$allNumbers = $numberGenerator->getAllNumbers();

$numberStorage->store($allNumbers);

echo 'Number: ' . $randomNumber . PHP_EOL;
echo 'AVG: ' . number_format($numberGenerator->getAvg(), 2) . PHP_EOL;
