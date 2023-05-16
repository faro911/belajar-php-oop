<?php
    
    namespace Data\Traits;

    trait sayGoodBye
    {
        public function goodBye(?string $name): void 
        {
            if(is_null($name)){
                echo "Good bye" . PHP_EOL;
            } else {
                echo "Good bye $name" . PHP_EOL;
            }
        }
    }
    trait SayHello
    {
        public function hello(?string $name): void 
        {
            if(is_null($name)){
                echo "Hello" . PHP_EOL;
            } else {
                echo "Hello $name" . PHP_EOL;
            }
        }
    }

    //trait property
    trait HasName
    {
        public string $name;
    }

    //abstract trait, wajib di override function abstract nya
    trait CanRun
    {
        public abstract function run(): void;
    }

    trait All{
        use sayGoodBye, SayHello, HasName, CanRun; //untuk implementasi trait inherit trait all bisa di panggil didalam class
    }
    class Person 
    {
        // use sayGoodBye, SayHello, HasName, CanRun{ // untuk menggunakan trait dari class menggunakan use kemudian nama trait nya
        //     // bisa di overide visibilitynya
        //     // hello as private;
        //     //goodBye as private;
        // } 

        use All;

        public function run(): void
        {
            echo "Person $this->name is Running" . PHP_EOL;
        }

        public function goodBye(?string $name): void //ini adalah prioritas overide pertama, urutanya > class utama di overide trait, trait dioveride class child
        {
            echo "Good bye in Person" . PHP_EOL;
        }
        public function hello(?string $name): void 
        {
            echo "Hello in Person" . PHP_EOL;
        }
    }
?>