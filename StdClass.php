<?php
    
    $array = [
        "firstName" => "Fathur",
        "lastName" => "Rochman",
        "id" => "M01"
    ];

    //mengkonversi array ke objek bisajuga sebaliknya
    $object = (object)$array;

    var_dump($object);

    echo "firstname nya adalah $object->firstName" . PHP_EOL;
    echo "lastname nya adalah $object->lastName" . PHP_EOL;
    echo "id nya adalah $object->id" . PHP_EOL;
?>