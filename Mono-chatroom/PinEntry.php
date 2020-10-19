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

    public function search($array)
    {
        foreach ($array as $person) {
            if (in_array($_POST['pin'], $person)) {
                $_SESSION['id'] = $person[0];
            }
        }
    }

    public function getName($array)
    {
        foreach ($array as $person) {
            if (in_array($_SESSION['id'], $person)) {
                return $person[1];
            }
        }
    }

    public function getMessages(): array
    {
        $content = file_get_contents('messages.csv');
        $data = array_filter(explode(PHP_EOL, $content));
        $messages=[];
        foreach ($data as $message) {
            $messageData = (array)explode(',', $message);
            $messages[] = $messageData;
        }
        return $messages;

    }


}