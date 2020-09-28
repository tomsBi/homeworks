<?php

namespace App;

class SpicesCollection
{
    private array $spices = [];

    public function add(Spice $spices): void
    {
        $this->spices[] = $spices;
    }

    public function all(): array
    {
        return $this->spices;
    }
}