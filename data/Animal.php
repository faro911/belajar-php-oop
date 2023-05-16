<?php

namespace Data;

require_once "Food.php";

abstract class Animal {
    public string $name;
    public abstract function run(): void;// ini public abstrac function, tidak bisa dipanggil secara langsung oleh child nya, harus di overide dengan function dengan nama yangsama

    abstract public function eat(AnimalFood $animalFood) : void;

}

class Cat extends Animal {
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
    public function eat(AnimalFood $animalFood) : void{
        echo "Cat is Eating" . PHP_EOL;
    }
    
}
class Dog extends Animal {
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }
    public function eat(Food $animalFood) : void{ // ini adalah contravaricance 
        echo "Dog is Eating" . PHP_EOL;
    }
}