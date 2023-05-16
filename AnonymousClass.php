<?php
use Data\Traits\SayHello;
    
    interface HelloWorld
    {
        function sayHello(): void;
    }

    // class SampleHW implements HelloWorld
    // {
    //     public function sayHello() : void
    //     {
    //         echo "Hello WOrld" . PHP_EOL;
    //     }
    // } // ini implementasi secara normal, tp karena ini class simple kita bisa rubah menggunakan anyomus class
    // $helloworld = new SampleHW();
    // $helloworld->sayHello();

    $helloworld = new class implements HelloWorld {
        function sayHello(): void
        {
            echo "Hello WOrld" . PHP_EOL;
        }
    };

    $helloworld->sayHello();

    //anynonymous class juga mendukung constructor contoh sbg berikut

    $halo = new class("Anonymous Class") implements HelloWorld {
        private string $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        function sayHello(): void{
            echo "Hello $this->name" . PHP_EOL;
        }
    };

    $halo->sayHello()
    

?>