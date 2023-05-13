<?php

class Product
{
    // private string $name; // tidak bisa diakses oleh turunannya. jika ingin di akses turunan harus di ganti protected
    protected string $name; // ini bisa diakses turunanya
    // private int $price;
    protected int $price;

    public function __construct(string $name, string $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName():string{
        return $this->name;
    }
    public function getPrice():int{
        return $this->price;
    }
}

class ProductDummy extends Product {

    public function info(){
        echo "Name $this->name" . PHP_EOL; // ini error karena bersifat privite pada class utamma, kalo digani protected turunan bisa akses
        echo "Price $this->price" . PHP_EOL;
    }
}