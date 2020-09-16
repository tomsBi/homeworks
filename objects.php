<?php


class Person{
    private string $name;
    private ?string $middleName;
    private string $surname;

    public function __construct(string $name, $middleName =  null, string $surname){
        $this->name = $name;
        $this->middleName = $middleName;
        $this->surname = $surname;
    }

    public function getName() {
        return $this->name;
    }

    public function getMiddleName() {
        return $this->middleName;
    }
    public function getSurname() {
        return $this->surname;
    }
}

$janis  = new Person("Jānis", null, "Gitendorfs");
$ilze = new Person ("Ilze", "Sandra", "Bērziņa");
$toms = new Person ("Toms", null, "Bičkovskis");

echo $janis->getName() . " " . $janis ->getMiddleName() . " " . $janis->getSurname();
echo PHP_EOL;
echo $ilze->getName() . " " . $ilze ->getMiddleName() . " " . $ilze->getSurname();
echo PHP_EOL;
echo $toms->getName() . " " . $toms ->getMiddleName() . " " . $toms->getSurname();
echo PHP_EOL;
