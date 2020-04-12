<?php
require_once '../vendor/autoload.php';
require_once '../settings/settings.php';
$setting = new Settings();
$bedrag = $_POST['bedrag'];

$orderID = $_COOKIE['guid'];
$mollie = new \Mollie\Api\MollieApiClient();
<<<<<<< HEAD
$mollie->setApiKey($setting->getMollieKey);
=======
$mollie->setApiKey("");
>>>>>>> 90149bc00ac36923c45bb264d2f374a6bbd7debb
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
<<<<<<< HEAD
header("Location: " . $payment->getCheckoutUrl(), true, 303);

=======
echo "ok";
>>>>>>> 90149bc00ac36923c45bb264d2f374a6bbd7debb
