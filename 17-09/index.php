<?php declare(strict_types=1);

class Car
{
    private string $name;
    private string $licensePlate;
    private int $fuelTankCapacity;

    public function __construct(string $name, string $licensePlate, int $fuelTankCapacity)
    {
        $this->name = $name;
        $this->licensePlate = $licensePlate;
        $this->fuelTankCapacity = $fuelTankCapacity;
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function getLicensePlate(): string
    {
        return $this->licensePlate;
    }


    public function getFuelTankCapacity(): int
    {
        return $this->fuelTankCapacity;
    }

}


$audi = new Car("Audi", "JK 5561", 80);
$volvo = new Car("Volvo", "OL 1141", 100);
$bmw = new Car("BMW", "ET 1234", 60);

$usersInput = (integer)readline("Chose car (1/2/3): ");
$usersPassword = (integer)readline("Enter password: ");

$attempts = 1;
while ($attempts < 3 || $usersPassword === 1111) {
    if ($usersPassword === 1111) {

        $litersPerKmAudi = (5 / 100) * 10;
        $distance = 1;
        $fuelAudi = $audi->getFuelTankCapacity();

        while ($distance <= 10) {
            echo $audi->getName() . ", " . "License plate: " . $audi->getLicensePlate() . PHP_EOL;
            echo "Fuel left in tank: " . number_format($fuelAudi - $litersPerKmAudi, 2) . ", Distance: " . $distance . "km" . PHP_EOL;
            $fuelAudi = $fuelAudi - $litersPerKmAudi;
            $distance++;
        }
        break;
    } else {
        readline("Try again! ");

    }
    $attempts++;
}

while ($attempts < 3 || $usersPassword === 2222) {
    if ($usersPassword === 2222) {
        $litersPerKmVolvo = (7 / 100) * 10;
        $distance = 1;
        $fuelVolvo = $volvo->getFuelTankCapacity();

        while ($distance <= 10) {

            echo $volvo->getName() . ", " . "License plate: " . $volvo->getLicensePlate() . PHP_EOL;
            echo "Fuel left in tank: " . number_format($fuelVolvo - $litersPerKmVolvo, 2) . ", Distance: " . $distance . "km" . PHP_EOL;
            $fuelVolvo = $fuelVolvo - $litersPerKmVolvo;
            $distance++;
        }
    } else {
        readline("Try again! ");
    }
    $attempts++;
}

while ($attempts < 3 || $usersPassword === 3333) {
    if ($usersPassword === 3333) {
        $litersPerKmBmw = (10 / 100) * 10;
        $distance = 1;
        $fuelBmw = $bmw->getFuelTankCapacity();


        while ($distance <= 10) {

            echo $bmw->getName() . ", " . "License plate: " . $bmw->getLicensePlate() . PHP_EOL;
            echo "Fuel left in tank: " . number_format($fuelBmw - $litersPerKmBmw, 2) . ", Distance: " . $distance . "km" . PHP_EOL;
            $fuelBmw = $fuelBmw - $litersPerKmBmw;
            $distance++;
        }
    } else {
        readline("Try again! ");
    }
    $attempts++;
}