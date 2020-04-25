<?php
require_once 'classes/shopAPI.php';
require_once 'classes/mail.php';
require_once 'checkout/invoice.php';
require_once '../translate.php';
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
$subject = _('Aankoop bij Benbassat: Koekenshop');

$body = _('Beste') ." $clientName,<br><br><table border='1'><tr>
<th>" . _('Productnaam') .  '</th>
<th>' . _('Eenheidsprijs') . '</th>
<th>' . _('Aantal') . '</th>
<th>' . _('Subtotaal') . '</th>
</tr>';

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
$body .= '</table><br><b>' . _('Totaal: ') . "€$total</b><br>" . _('Uw orderID is: ')  . "<b>{$_COOKIE['guid']}</b><br>" . _('Bedankt voor je aankoop bij Benbassat: Koekenshop!') . "<br><br>" . _('Arthur Benbassat van Benbassat: Koekenshop') . "<br><br>" . _('Als je niet hebt besteld: ') . "<a href='https://benbassat.art/gip/contact.php'>" . _('Klik hier') . "</a>";

//creating a pdf for the order
$pdf = new Invoice();
$pdf->makeInvoice($cart, $clientName);
$mail->sendMailWithAttachment($cart->delivery_email, $body, $subject, $clientName,'invoice.pdf');

//deleting the pdf and cookie
unlink('invoice.pdf');
setcookie('guid', '', time() - (3600*24*8), '/gip');

