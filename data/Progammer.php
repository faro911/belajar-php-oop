<?php

class Programmer{
    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer{}
class FrontendProgrammer extends Programmer{}

class Company {
    public Programmer $programmer;
}

//instanceof untuk melakukan type check and cast pada objek, untuk tipe lain misal string di if bisa kita pakai is_string, is_int dll
function sayHelloProgrammer(programmer $programmer){
    

    if($programmer instanceof BackendProgrammer)
    {
        echo "Hello Programer BackEnd $programmer->name " . PHP_EOL;
    }
    else if($programmer instanceof FrontendProgrammer)
    {
        echo "Hello Programer Frontend $programmer->name " . PHP_EOL;
    }
    else if($programmer instanceof Programmer)
    {
        echo "Hallo programer $programmer->name" . PHP_EOL;
    }
}