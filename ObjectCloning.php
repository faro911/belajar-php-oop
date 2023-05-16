<?php
    require_once "data/Student.php";

    $student1 = new Student();
    $student1->id = "1";
    $student1->name = "Bejo";
    $student1->value = "100";
    $student1->setSamplee("bagus"); // bahkan dengan clone property private masih bisa di copy/clone

    $student2 = clone $student1;

    var_dump($student1);
    var_dump($student2); // karenaa ada fungsi clone maka sample akan menghasil kan kosong karena di unset pada function __clone nya


?>