<?php
    
    require_once "helper/MathHelper.php";

    use  Helper\{MathHelper};

    echo MathHelper::$name . PHP_EOL; //begini cara memanggil staticnya
    
    //untuk merubah valuenya yang bisa dengan
    MathHelper::$name = "Fathur ROchman";
    
    echo MathHelper::$name . PHP_EOL;

    //untuk memanggil static  function
    $result = MathHelper::sum(10,10,10,10,10);
    echo "Result : $result" . PHP_EOL;
    ?>