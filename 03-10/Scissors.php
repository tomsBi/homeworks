<?php

class Scissors extends AbstractElement implements ElementInterface
{
    protected array $beatable = [
        Paper::class,
        Lizard::class
    ];

    public function getName(): string
    {
       return 'Scissors';
    }

}