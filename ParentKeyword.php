<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rect = new Rectangle();
echo $rect->getCorner() . PHP_EOL;
echo $rect->getParentCorner() . PHP_EOL;