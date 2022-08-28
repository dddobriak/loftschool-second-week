<?php
const ORDERS = 'orders.json';

$serverUri = explode('/', $_SERVER['REQUEST_URI']);
$order = $serverUri[1] === 'order' && empty($serverUri[2]) ?? null;

if ($order) {
    placeOrder();
}

function getPostOrder()
{
    if ($_POST['phone'] && $_POST['email']) {
        return $_POST;
    }

    throw new Exception('empty post');
}

function getOrders()
{
    if (file_exists(ORDERS)) {
        return json_decode(file_get_contents(ORDERS), true);
    }

    return false;
}

function getOrderByEmail($email)
{
    $orders = getOrders();

    foreach ($orders as $index => $order) {
        if ($email === $order['email']) {
            return $index;
        }
    }

    return false;
}

function placeOrder()
{
    $orders = getOrders();
    $postOrder = getPostOrder();
    $foundOrderId = getOrderByEmail($postOrder['email']);

    if ($orders) {
        if (is_int($foundOrderId)) {
            $orders[$foundOrderId]['order']++;
            orderMessage($orders[$foundOrderId]);
        } else {
            var_dump('error?');
            $postOrder['order'] = 1;
            $postOrder['id'] = count($orders) + 1;
            $orders[] = $postOrder;
            orderMessage($orders[count($orders) - 1]);
        }

        return file_put_contents(ORDERS, json_encode($orders, JSON_PRETTY_PRINT));
    }

    $postOrder['order'] = 1;
    $postOrder['id'] = 1;

    orderMessage($postOrder);
    return file_put_contents(ORDERS, json_encode([$postOrder], JSON_PRETTY_PRINT));
}

function orderMessage($order)
{
    echo "Спасибо, ваш заказ будет доставлен по адресу: {$order['street']}<br>
        Номер вашего заказа: #{$order['id']}<br>
        Это ваш {$order['order']} заказ!";
}