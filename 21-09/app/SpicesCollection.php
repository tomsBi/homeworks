<?php

namespace App;

class SpicesCollection
{
    private array $spices = [];

    public function add(Spices $spices): void
    {
        $this->spices[] = $spices;
    }

    public function all(): array
    {
        return $this->spices;
    }
}