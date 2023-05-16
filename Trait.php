<?php
    
    require_once "data/sayGoodBye.php";

    use Data\Traits\{Person, SayHello, sayGoodBye};

    $person = new Person();
    $person->goodBye("Joko");
    $person->hello("Budi");
    $person->name = "faro";
    var_dump($person);
    $person->run();

?>