<?php

namespace Service;

use Interfaces\ServiceInterface;
use Interfaces\TariffInterface;

class ServiceGPS implements ServiceInterface
{
    private $pricePerHour;

    public function __construct(int $pricePerHour)
    {
        $this->pricePerHour = $pricePerHour;
    }

    public function apply(TariffInterface $tariff, &$price)
    {
        $hours = ceil($tariff->getMinutes() / 60);
        $price += $this->pricePerHour * $hours;
    }
}
