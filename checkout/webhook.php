<?php

require_once '../vendor/autoload.php';
$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey('test_qJ478jJwAPytcWz388Rs5yTBmgn6ub');
$payment = $mollie->payments->get($_POST["id"]);
$orderId = $payment->metadata;
$status = $payment->status;

file_put_contents($orderId . '.txt', $status);
