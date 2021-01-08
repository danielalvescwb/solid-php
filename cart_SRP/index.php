<?php

require __DIR__."/vendor/autoload.php";

use src\Cart;
use src\EmailService;
use src\Item;
use src\Order;

echo "<h1>Com SRP</h1>";

$order = new Order();

$item1 = new Item();
$item2 = new Item();
$item3 = new Item();

$item1->setDescription('Bicicleta');
$item1->setValue(750.10);

$item2->setDescription('Galadeira');
$item2->setValue(1950.15);

$item3->setDescription('Tapete');
$item3->setValue(350.20);

$order->getCart()->addItem($item1);
$order->getCart()->addItem($item2);
$order->getCart()->addItem($item3);

$Subtotal = 0;
echo "<table>";
foreach ($order->getCart()->getItens() as $key => $item) {
    echo "<tr>";
    echo "<td>" . $item->getDescription() . "</td>";
    echo "<td>" . $item->getValue() . "</td>";
    echo "</tr>";
    $Subtotal += $item->getValue();
}
echo "</table>";
echo "<b>Valor total do pedido:</b> " . $Subtotal;
echo "<br />";
echo "<b>Status:</b> " . $order->getStatus();

echo "<hr />";

echo "<b>Adicionando mais um item ao carrinho:</b>";

$item4 = new Item();

$item4->setDescription('Televisão 65"');
$item4->setValue(3570.25);

$order->getCart()->addItem($item4);

$Total = 0;
echo "<table>";
foreach ($order->getCart()->getItens() as $key => $item) {
    echo "<tr>";
    echo "<td>" . $item->getDescription() . "</td>";
    echo "<td>" . $item->getValue() . "</td>";
    echo "</tr>";
    $Total += $item->getValue();
}
echo "</table>";
echo "<b>Valor total do pedido:</b> " . $Total;
echo "<br />";
echo "<b>Status:</b> " . $order->getStatus();

echo "<hr />";

echo "<b>Confirmando o pedido:</b>";
echo "<br />";

if($order->confirmOrder()) {
    echo 'Pedido realizado com sucesso!';
} else {
    echo 'Erro na confirmação do pedido. Carrinho não possui itens';
}
echo "<br />";
echo "<b>Status:</b> " . $order->getStatus();

echo "<hr />";

echo "<b>Disparando E-mail:</b>";
echo "<br />";
if($order->getStatus() == 'confirmado'){
    echo EmailService::sendEmail();
}