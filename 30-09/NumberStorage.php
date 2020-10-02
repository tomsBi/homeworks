<?php

class NumberStorage
{
    public function load(): array
    {
        return (array)explode(' ', file_get_contents('./newFile.txt'));
    }

    public function store(array $numbers): void
    {
        file_put_contents('./newFile.txt', implode(' ', $numbers));
    }
}