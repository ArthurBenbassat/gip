<?php


$url = 'http://localhost/gip/api/customers.php';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$curlReturn = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$customers = json_decode($curlReturn);
echo "<ul>";
foreach ($customers as $customer) {
    echo "<li>";
    echo $customer->first_name . ' ' . $customer->last_name;
    echo "</li>";
}
echo "</ul>";

//$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

$shopApi = new $ShopApi();

$customers = $shopApi->getCustomers();

foreach ($customers as $customer) {
    echo "<li>";
    echo $customer->first_name . ' ' . $customer->last_name;
    echo "</li>";
}
echo "</ul>";




$customers = $shopApi->getPromotions();

$shopApi->getCustomer(6);

if ($shopApi->isValidCustomer($email, $password) === FALSE) {
    echo "ongeldige gebruiker of wachtwoord"
}
else {
    
}
