<?php

class SafePin
{
    private int $pin;

    public function __construct(int $pin)
    {
        $this->pin = $pin;
    }

    public function getPin(): int
    {
        return $this->pin;
    }

    public function save($name): void
    {
        $_SESSION[$name] .= $_POST[$name];
    }

    public function symbols($pin): string
    {
        return str_repeat('*', strlen($pin));
    }

}