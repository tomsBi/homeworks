<?php

class PhoneRegister
{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;

    }

    public function load(): array
    {
        $content = file_get_contents('database.csv');
        $data = explode(PHP_EOL, $content);
        $persons = [];
        foreach ($data as $person) {
            $personData = (array)explode(',', $person);
            $persons[] = $personData;
        }
        return $persons;
    }

    public function search(): string
    {
        foreach ($this->load() as $person) {
            if (in_array($_POST['phoneNumber'], $person)) {
                return $person[1] . ' ' . $person[2];
            }
        }
        return 'Person not found!';
    }

}