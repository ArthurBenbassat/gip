<?php
require_once '../vendor/autoload.php';

$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey("");
$payment = $mollie->payments->create([
    "amount" => [
        "currency" => "EUR",
        "value" => "10.00"
    ],
    "description" => "My first API payment",
    "redirectUrl" => "https://webshop.example.org/order/12345/",
    "webhookUrl"  => "https://webshop.example.org/mollie-webhook/",
]);
echo "ok";
