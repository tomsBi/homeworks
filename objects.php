<?php


class Person{
    private string $name;
    private string $middleName;
    private string $surname;

    public function __construct(string $name, string $middleName, string $surname){
        $this->name=$name;
        $this->middleName=$middleName;
        $this->surname=$surname;
    }

    public function get_name(){
        return $this->name;
    }

    public function get_middleName(){
        return $this->middleName;
    }
    public function get_surname(){
        return $this->surname;
    }
}

$janis  = new Person("Jānis", "", "Gitendorfs");
$ilze = new Person ("Ilze", "Sandra", "Bērziņa");
$toms = new Person ("Toms", "", "Bičkovskis");

echo $janis->get_name() . " " . $janis ->get_middleName() . " " . $janis->get_surname();
echo PHP_EOL;
echo $ilze->get_name() . " " . $ilze ->get_middleName() . " " . $ilze->get_surname();
echo PHP_EOL;
echo $toms->get_name() . " " . $toms ->get_middleName() . " " . $toms->get_surname();
