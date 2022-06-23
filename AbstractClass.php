<?php

require_once "data/Location.php";

use Data\{Location, City, Province, Country};

//tidak bisa instance ke abstrak kelas
// $location = new Location(); ERROR

// bisanya ke class turunan
$city = new City();
$province = new Province();
$country = new Country();
