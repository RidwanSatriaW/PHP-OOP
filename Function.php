<?php

require_once "data/Person.php";

$Ridwan = new Person("Ridwan", "Semarang");
$Ridwan->name = "Ridwan";
$Ridwan->sayHello("Budi");

$joko = new Person("Joko", "Cirebon");
$joko->name = "Joko";
$joko->sayHello(null);

$Ridwan->info();
$joko->info();