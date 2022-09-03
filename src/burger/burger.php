<?php

require_once 'BurgerSingleton.php';
require_once 'BurgerCrud.php';
require_once 'config.php';
require_once 'app.php';

$serverUri = explode('/', $_SERVER['REQUEST_URI']);
$order = $serverUri[1] === 'order' && empty($serverUri[2]) ?? null;

if ($order) {
    placeOrder();
}

// $createTable = new BurgerCrud();
// $createTable->createTableIfNotExists();
