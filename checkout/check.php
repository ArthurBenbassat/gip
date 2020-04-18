<?php
require_once 'classes/shopAPI.php';
require_once 'classes/mail.php';
require_once 'checkout/invoice.php';

$api = new ShopAPI();
//get cart
$cart = $api->getCart($_COOKIE['guid']);

//change  cart to order
if (array_key_exists('userId', $_SESSION)) {
    $orderId = $api->order($_SESSION['userId'], $cart);
} else {
    $orderId = $api->order(0, $cart);
}

//sending a mail
$clientName = $cart->delivery_first_name .' ' . $cart->delivery_last_name;

$mail = new Mail();
$subject = 'Order at Benbassat: Koekenshop';

$body = "Hello $clientName,<br><br><table border='1'><tr>
<th>Productnaam</th>
<th>Unit price</th>
<th>Quantity</th>
<th>lineTotal</th>
</tr>";

for ($i = 0; $i < count($cart->lines); $i++) {
    $name = $cart->lines[$i]->product->name;
    $unitPrice = $cart->lines[$i]->product->price;
    $quantity = $cart->lines[$i]->quantity;
    $lineTotal = $cart->lines[$i]->linePrice;
    $total = $cart->totalPrice;
    $body .= "
            <tr>
            <td>$name</td>
            <td>€$unitPrice</td>
            <td>$quantity</td>
            <td>€$lineTotal</td>
            </tr>";
}
$body .= "</table><br><b>Total: €$total</b><br>Your orderID is: {$_COOKIE['guid']}<br>Thanks for your purchase from Benbassat: Koekenshop!<br>, <br>Arthur Benbassat from Benbassat: Koekenshop<br><br>if you have not ordered something <a href='https://arthur.6tib.be/GIP'>click here</a>";

//creating a pdf for the order
$pdf = new Invoice();
$pdf->makeInvoice($cart, $clientName);
$mail->sendMailWithAttachment($cart->delivery_email, $body, $subject, $clientName,'invoice.pdf');

//deleting the pdf and cookie
unlink('invoice.pdf');
setcookie('guid', '', time() - (3600*24*8), '/gip');

