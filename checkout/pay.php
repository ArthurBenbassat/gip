<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../vendor/autoload.php';
require_once '../settings/settings.php';
$setting = new Settings();
$bedrag = $_POST['bedrag'];

$orderID = $_COOKIE['guid'];
$mollie = new \Mollie\Api\MollieApiClient();

$mollie->setApiKey($setting->getMollieKey());

$payment = $mollie->payments->create([
    "amount" => [
        "currency" => "EUR",
        "value" => $bedrag,
    ],
    "metadata" => $orderID,
    "description" => "My first API payment",
    "redirectUrl" => "https://benbassat.art/gip/checkout.php?guid=$orderID",
    "webhookUrl"  => "https://benbassat.art/gip/checkout/webhook.php",
]);

header("Location: " . $payment->getCheckoutUrl(), true, 303);

