<?php

use Service\ServiceDriver;
use Service\ServiceGPS;
use Tariff\TariffBasic;

require_once "./src/TariffInterface.php";
require_once "./src/ServiceInterface.php";
require_once "./src/TariffAbstract.php";
require_once "./src/TariffBasic.php";
require_once "./src/ServiceGPS.php";
require_once "./src/ServiceDriver.php";

$tariff = new TariffBasic(5, 60);
$tariff->addService(new ServiceGPS(15));
$tariff->addService(new ServiceDriver(100));
echo $tariff->countPrice();
