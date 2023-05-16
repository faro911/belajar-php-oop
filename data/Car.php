<?php

namespace Data;


interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}


//interface mendukung banyak inheritance,, interface secara default abstract
interface Car extends HasBrand
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car, IsMaintenance // untuk implement bisa lebih dari 1 parent, kalau extend hanya satu
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }
    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}
?>