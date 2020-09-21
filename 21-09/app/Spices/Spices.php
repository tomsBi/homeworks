<?php declare(strict_types=1);

namespace App\Spices;

abstract class Spices
{
    public abstract function getName(): string;

}

class Salt extends Spices
{

    public function getName(): string
    {
        return 'Salt';
    }
}

class Basil extends Spices
{

    public function getName(): string
    {
        return 'Basil';
    }
}

class Oregano extends Spices
{

    public function getName(): string
    {
        return 'Oregano';
    }
}


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
