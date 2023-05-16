<?php
    
    require_once "data/Student.php";

    $student1 = new Student();
    $student1->id = "1";
    $student1->name = "Bejo";
    $student1->value = "100";

    $student1("bunga",1,true); //invoke bejalan karena ada magic function invoke


?>