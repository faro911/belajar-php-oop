<?php

require_once "data/Produk.php";

$prodaku = new Product("Mangga", 15000);
// echo $prodaku->name . PHP_EOL; // tidak bisa diambil karenaa dalam lingkup private

echo $prodaku->getName() . PHP_EOL;
echo $prodaku->getPrice() . PHP_EOL;

$dummy = new ProductDummy("dummy", 1000);
echo $dummy->info() . PHP_EOL;