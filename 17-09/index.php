<?php declare(strict_types=1);

class Car
{
    private string $name;
    private string $licensePlate;
    private int $fuelTankCapacity;
    private int $password;
    private float $fuelUsage;

    public function __construct(
        string $name,
        string $licensePlate,
        int $fuelTankCapacity,
        int $password,
    float $fuelUsage
    )
    {
        $this->name = $name;
        $this->licensePlate = $licensePlate;
        $this->fuelTankCapacity = $fuelTankCapacity;
        $this->password = $password;
        $this->fuelUsage = $fuelUsage;
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

    public function getPassword(): int
    {
        return $this->password;
    }

    public function getFuelUsage(): float
    {
        return $this->fuelUsage;
    }

}


$audi = new Car("Audi", "JK 5561", 80, 111, 5.5);
$volvo = new Car("Volvo", "OL 1141", 100, 222, 7.4);
$bmw = new Car("BMW", "ET 1234", 60, 333, 6.3);


$usersInput = (integer)readline("Chose car (1/2/3): ");
$usersPassword = (integer)readline("Enter password: ");

if($usersInput === 1 && $usersPassword === 111) {
    $fuel = $audi->getFuelTankCapacity();
    $distance = 0;
    while ($fuel >= 0) {
        echo 'Distance :' . $distance . 'km ';
        echo 'Brand: ' . $audi->getName() . ' ';
        echo 'License plate: ' . $audi->getLicensePlate() . ' ';
        echo 'Fuel: ' . $fuel . PHP_EOL;
        $distance += 10;
        $fuel -= ($audi->getFuelUsage() / 100) * 10;
        sleep(1);
    }
} elseif($usersInput === 2 && $usersPassword === 222) {
    $fuel = $volvo->getFuelTankCapacity();
    $distance = 0;
    while ($fuel >= 0) {
        echo 'Distance :' . $distance . 'km ';
        echo 'Brand: ' . $volvo->getName() . ' ';
        echo 'License plate: ' . $volvo->getLicensePlate() . ' ';
        echo 'Fuel: ' . $fuel . PHP_EOL;
        $distance += 10;
        $fuel -= ($volvo->getFuelUsage() / 100) * 10;
        sleep(1);
    }
} elseif($usersInput === 3 &&$usersPassword === 333) {
    $fuel = $bmw->getFuelTankCapacity();
    $distance = 0;
    while ($fuel >= 0) {
        echo 'Distance :' . $distance . 'km ';
        echo 'Brand: ' . $bmw->getName() . ' ';
        echo 'License plate: ' . $bmw->getLicensePlate() . ' ';
        echo 'Fuel: ' . $fuel . PHP_EOL;
        $distance += 10;
        $fuel -= ($bmw->getFuelUsage() / 100) * 10;
        sleep(1);
    }
}else{
    echo "error" . PHP_EOL;
}