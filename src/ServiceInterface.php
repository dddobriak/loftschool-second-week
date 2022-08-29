<?php

namespace Interfaces;

interface ServiceInterface
{
    public function apply(TariffInterface $tariff, &$price);
}
