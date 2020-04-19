<?php
require_once '../settings/settings.php';
require_once '../vendor/autoload.php';
$mollie = new \Mollie\Api\MollieApiClient();
$setting = new Settings();
$mollie->setApiKey($setting->getMollieKey);
$payment = $mollie->payments->get($_POST["id"]);
$orderId = $payment->metadata;
$status = $payment->status;
