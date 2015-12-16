<?php
namespace fub;
include "f1.php";
use kucing as Kc;
use anjing as dg;
use binatang;

echo Kc\Cat::says(), "<br />\n";
echo dg\Dog::says(), "<br />\n";
echo \binatang\Animal::breathes(), "<br />\n";