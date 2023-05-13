<?php

require_once "data/Progammer.php";
//materi agk bingung
$company = new Company();
$company->programmer = new Programmer("faro");
var_dump($company);

$company->programmer = new BackendProgrammer("faro");
var_dump($company);

$company->programmer = new FrontendProgrammer("faro");
var_dump($company);

sayHelloProgrammer(new Programmer("ulo"));
sayHelloProgrammer(new BackendProgrammer("boyo"));
sayHelloProgrammer(new FrontendProgrammer("joyo"));