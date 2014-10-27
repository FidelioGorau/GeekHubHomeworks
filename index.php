<?php

require_once "Autoloader.php";

use Core\Bmw;
use Core\Audi;
use Core\Plains;

echo Bmw::carBrand();
echo Bmw::movementMethod();
echo Audi::carBrand();

$airbus = new Plains;
$airbus->name = 'A330';
echo $airbus->name;
echo $airbus::movementMethod();
