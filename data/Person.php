<?php

//default
// class Person {
//     var $name;
//     var $address;
//     var $country;
// };

// with type data and default value
// class Person {
//     var string $name;
//     var string $address = "Unlocated Address";
//     var string $country = "UnLocated Country";
// };

// hal yang boleh bernilai null harus diberi tanda tanya
// class Person {
//     var string $name;
//     var ?string $address = null;
//     var string $country = "UnLocated Country";
// };

class Person {
    const AUTHOR = "Power by PHPnextGen (c)";
    var string $name;
    var ?string $address = "Unlocated address";
    var ?string $country = "UnLocated Country";

    //function pertama dibwah ini adalah constructor, saat memanggil nnti new Person wajib disi value name dan alamat
    function __construct(string $name, string $address){
        $this->name = $name;
        $this->address = $address;
    }



    function info()
    {
        echo " AUTHOR by : " . self::AUTHOR . PHP_EOL;
    }

    function sayHallo(?string $name){

        if(is_null($name)){
            echo  "Hai, nama saya $this->name" . PHP_EOL;
        } else {
            echo "Woy ! $name , kenalin gw $this->name" . PHP_EOL;
        }
    }

        //function destructor
        function __destruct(){
            echo "Objek Person $this->name is destroyed" . PHP_EOL;
        }
};