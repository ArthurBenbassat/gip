<?php
require_once '../vendor/autoload.php';
require_once '../settings/settings.php';
$setting = new Settings();
$bedrag = $_POST['bedrag'];

$orderID = $_COOKIE['guid'];
$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey($setting->getMollieKey);
$payment = $mollie->payments->create([
    "amount" => [
        "currency" => "EUR",
        "value" => $bedrag,
    ],
    "metadata" => $orderID,
    "description" => "My first API payment",
    "redirectUrl" => "https://benbassat.art/testmollie/redirect.php?orderID=$orderID&bedrag=$bedrag",
    "webhookUrl"  => "https://benbassat.art/testmollie/webhook.php",
]);
header("Location: " . $payment->getCheckoutUrl(), true, 303);

