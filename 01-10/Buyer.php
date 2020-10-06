<?php

class Buyer
{
    private string $name;
    private array $boughtProducts;

    public function __construct(string $name, array $boughtProducts = [])
    {
        $this->name = $name;
        $this->boughtProducts = $boughtProducts;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFunds(): int
    {
        $funds = file_get_contents('./funds.txt');
        $arr = explode(" ", $funds);
        return $arr[0];

    }

    public function removeFunds(int $amount): int
    {
        return $this->getFunds() - $amount;
    }

    public function saveFunds($newFunds): void
    {
        file_put_contents('./funds.txt', $newFunds);
    }

    public function addProducts($product): void
    {
        $this->boughtProducts[] = $product . ' ';

    }

    public function getAllBoughtProducts(): array
    {
        return $this->boughtProducts;
    }

    public function saveProducts(array $boughtProducts): void
    {
        file_put_contents('./buyerProducts.txt', implode(' ', (array)$boughtProducts), FILE_APPEND);
    }


}