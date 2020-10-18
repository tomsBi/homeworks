<?php

class Photos
{
    public function load(): array
    {
        $content = file_get_contents('photos.csv');
        $data = array_filter(explode(PHP_EOL, $content));
        $photos = [];
        foreach ($data as $person) {
            $photosData = (array)explode(',', $person);
            $photos[] = $photosData;
        }
        return $photos;
    }

}