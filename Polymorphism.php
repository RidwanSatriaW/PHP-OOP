<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Ridwan");
var_dump($company);

$company->programmer = new BackendProgrammer("Ridwan");
var_dump($company);

$company->programmer = new FrontendProgrammer("Ridwan");
var_dump($company);

sayHelloProgrammer(new Programmer("Ridwan"));
sayHelloProgrammer(new BackendProgrammer("Ridwan"));
sayHelloProgrammer(new FrontendProgrammer("Ridwan"));