<?php

require_once "data/Location.php";

use Data\{Location, City, Province, Country};

// $location = new Location(); // ini error karena abstract class yangbisa hanya turunanya yang bisa pakai objeknya
$city = new City();
$city->name = "Semarang";

echo "anda berada di $city->name" . PHP_EOL;