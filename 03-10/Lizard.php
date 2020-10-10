<?php

class Lizard extends AbstractElement implements ElementInterface{

    protected array $beatable = [
        Spock::class,
        Paper::class
    ];

    public function getName(): string
    {
        return 'Lizard';
    }
}