<?php

class ProductStorage
{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;

    }

    public function load(): array
    {
        $content = file_get_contents($this->path);
        $rows = array_filter((array)explode('|', $content));
        $products = [];

        foreach ($rows as $row) {
            $productData = (array)explode(',', $row);

            $products [] = new Product(
                trim($productData[0]),
                (int)$productData[1],
                (int)$productData[2]
            );
        }
        return $products;
    }

    public function countProducts(): string
    {
        $countWater = 0;
        $countHotdog = 0;
        $countSnickers = 0;
        $countApple = 0;
        $countOrange = 0;
        $content = file_get_contents('./buyerProducts.txt');
        $array = array_filter((array)explode(' ', $content));
        foreach ($array as $word) {
            if ($word === 'Water') {
                $countWater++;
            } elseif ($word === 'Hotdog') {
                $countHotdog++;
            } elseif ($word === 'Snickers') {
                $countSnickers++;
            } elseif ($word === 'Apple') {
                $countApple++;
            } elseif ($word === 'Orange') {
                $countOrange++;
            }
        }
        return 'Water: ' . $countWater . PHP_EOL .
            'Hotdog: ' . $countHotdog . PHP_EOL .
            'Snickers: ' . $countSnickers . PHP_EOL .
            'Apple: ' . $countApple . PHP_EOL .
            'Orange: ' . $countOrange . PHP_EOL;
    }

}