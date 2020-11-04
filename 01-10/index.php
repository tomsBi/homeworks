<?php
declare(strict_types=1);

require_once 'Product.php';
require_once 'Store.php';
require_once 'Formatter.php';
require_once 'ProductStorage.php';
require_once 'Buyer.php';

$buyer = new Buyer('Toms');
$storage = new ProductStorage('./products.txt');
$storage->load();

echo $buyer->getName() . ' has ' . Formatter::moneyFormatter($buyer->getFunds()) . ' in wallet!' . PHP_EOL;
echo PHP_EOL;

$store = new Store('Narvesen', $storage->load());

foreach ($store->getAllProducts() as $product) {
    /** @var Product $product */
    echo $product->name() . ' ';
    echo 'Price: ' . Formatter::moneyFormatter($product->price()) . ' ';
    echo 'Amount: ' . $product->amount() . ' ';
    echo PHP_EOL;
}
$productChoice = readline('Which product you want to buy?(0/1/2/3/4)');
echo PHP_EOL;
$product = $store->getAllProducts()[$productChoice];
if ($product->amount() > 0 && $buyer->getFunds() >= $product->price()) {
    echo $newAmount = $product->amount() - 1 . ' ';
} else {
    echo 'No funds or product out of stock!' . PHP_EOL;
    exit;
}
echo $product->name() . 's left in ' . $store->name();
echo PHP_EOL;
echo $buyer->getName() . ' has left ' . Formatter::moneyFormatter($buyer->removeFunds($product->price()));
echo PHP_EOL;

$buyer->saveFunds($buyer->removeFunds($product->price()));

$buyer->addProducts($product->name());

$allBoughtProducts = $buyer->getAllBoughtProducts();

$buyer->saveProducts($allBoughtProducts);

$usersInput = readline('Do you want to see your products?(y/n)');
echo PHP_EOL;
if ($usersInput === 'y') {
    echo $storage->countProducts();
};






