<?php

class PinEntry
{
    public function load(): array
    {
        $content = file_get_contents('pinDatabase.csv');
        $data = explode(PHP_EOL, $content);
        $persons=[];
        foreach ($data as $person) {
            $personData = (array)explode(',', $person);
            $persons[] = $personData;
        }
        return $persons;
    }

    public function search()
    {
        foreach ($this->load() as $person) {
            if (in_array($_POST['pin'], $person)) {
                $_SESSION['name'] = $person[0];
            }
        }
    }
}
