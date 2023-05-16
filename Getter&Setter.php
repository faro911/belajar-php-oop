<?php
    require_once "data/Category.php";

    use Data\Category;

    $category = new Category();
    $category->setName("Mobil Porce");
    $category->setExpensive(true);
    $category->setName("   "); // maka jjika diberi validasi dan kita rubah nilai sebelumnya denang string kosong maka tetap akan mengambil data sebelumnya yaitu mobil porce
    $category->setExpensive(true);

    echo "Name Product : {$category->getName()}" . PHP_EOL;
    echo "it is Expenisve : {$category->isExpensive()}" . PHP_EOL;
?>