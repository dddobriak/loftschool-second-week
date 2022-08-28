<?php
require_once 'BurgerSingleton.php';
require_once 'BurgerCrud.php';
require_once 'config.php';

$serverUri = explode('/', $_SERVER['REQUEST_URI']);
$order = $serverUri[1] === 'order' && empty($serverUri[2]) ?? null;

if ($order) {
    placeOrder();
}

function getPostData()
{
    if ($_POST['phone'] && $_POST['email']) {
        return $_POST;
    }

    throw new Exception('empty post');
}

function placeOrder()
{
    $postData = getPostData();
    $burgerCrud = new BurgerCrud();

    $orderInfo = $burgerCrud->read($postData['email']);

    if ($orderInfo) {
        $orderInfo['order']++;
        orderMessage($orderInfo);
        return $burgerCrud->update($orderInfo['order'], $orderInfo['id']);
    }

    $orderInfo = $burgerCrud->create($postData);
    return orderMessage($orderInfo);
}

function orderMessage($order)
{
    echo "Спасибо, ваш заказ будет доставлен по адресу: {$order['street']}<br>
        Номер вашего заказа: #{$order['id']}<br>
        Это ваш {$order['order']} заказ!";
}