<?php

namespace Data;
require_once "Animal.php";

    interface AnimalShelter
    {
        function adopt(string $name): Animal;
    }

    class CatShelter implements AnimalShelter
    {
        public function adopt(string $name): Cat // ini disebut covarian tidk menggunakan animal lagi langusng cat yang lebih spesifik
        {
            $cat = new Cat();
            $cat->name = $name;
            return $cat;
        }
    }
    class DogShelter implements AnimalShelter
    {
        public function adopt(string $name): Dog // ini disebut covarian tidk menggunakan animal lagi langusng cat yang lebih spesifik
        {
            $dog = new Dog();
            $dog->name = $name;
            return $dog;
        }
    }
?>