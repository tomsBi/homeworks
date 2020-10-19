<?php

class Rock extends AbstractElement implements ElementInterface
{
    protected array $beatable = [
        Scissors::class,
        Lizard::class
    ];

    public function getName(): string
    {
        return 'Rock';
    }
}