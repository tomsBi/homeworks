<?php declare(strict_types=1);

namespace App\Spices;

abstract class Spices
{
 public abstract function getName(): string;

}

Class Salt extends Spices{

    public function getName(): string
    {
        return 'Salt';
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
