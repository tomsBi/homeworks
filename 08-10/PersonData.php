<?php

class PersonData

{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }


    public
    function saveData($name, $surname, $personId, $address): void
    {
        file_put_contents('./personRegister.csv',
            $name . ',' .
            $surname . ',' .
            $personId . ',' .
            $address . PHP_EOL,
            FILE_APPEND
        );
    }

    public function load(): array
    {
        $content = file_get_contents($this->path);
        $data = explode(PHP_EOL, $content);
        $persons = [];
        foreach ($data as $person) {
            $personData = array_filter((array)explode(',', $person));
            $persons[] = $personData;
        }
        return $persons;

    }

    public function search()
    {
        foreach ($this->load() as $person) {
            if (in_array($_POST['personIdSearch'], $person)) {
                return $person[0] . ' ' . $person[1] . ', ' . $person[2] . ', ' . $person[3];
            }
        }
    }

}