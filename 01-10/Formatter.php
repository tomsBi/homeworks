<?php

class Formatter
{
    public static function moneyFormatter(int $money): string
    {
        return '$' . number_format($money / 100, 2);
    }
}
