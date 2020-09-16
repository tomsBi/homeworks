<?php

class Auto
{
protected string $name;
protected int $fuelCapacity;

public function __construct($name, $fuelCapacity)
{
    $this->name = $name;
    $this->fuelCapacity = $fuelCapacity;
}

public function getName(){
    return $this->name;
}

public function getFuelCapacity(){
    return $this->fuelCapacity;
}

}

class Audi extends Auto
{
public function uniqueFeature()
{
    return "has spoiler";
}
}

class Volvo extends Auto
{
    public function uniqueFeature()
    {
        return "is unbreakable";
    }
}

$audi = new Audi("Audi TT", 100);
$volvo = new Volvo("Volvo V70", 60);

echo $audi->getName() . " has " . $audi->getFuelCapacity() . "l fuel capacity and " . $audi->uniqueFeature() . "!";
echo PHP_EOL;
echo $volvo->getName() . " has " . $volvo->getFuelCapacity() . "l fuel capacity and " . $volvo->uniqueFeature() . "!";