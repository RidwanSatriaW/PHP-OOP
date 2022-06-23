<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

//cara import group dengan kurung kurawal

use Data\One\{Conflict as Conflict1, Dummy, Sample};
use function Helper\{helpMe};

$conflict = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();