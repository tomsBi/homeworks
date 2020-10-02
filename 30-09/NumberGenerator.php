<?php

class NumberGenerator
{
    private int $min;
    private int $max;
    private array $numbers;

    public function __construct(int $min, int $max, array $numbers = [])
    {
        $this->min = $min;
        $this->max = $max;
        $this->numbers = $numbers;
    }

    public function getNumber(): int
    {
        return rand($this->min, $this->max);
    }

    public function add(int $number): void
    {
        $this->numbers[] = $number;
    }

    public function getAllNumbers(): array
    {
        return array_filter($this->numbers);
    }

    public function getAvg(): float
    {
        return array_sum($this->getAllNumbers()) / count($this->getAllNumbers());
    }
}