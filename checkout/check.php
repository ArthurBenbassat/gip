<?php
require_once '../classes/shopAPI.php';
require_once '../classes/mail.php';
require_once 'invoice.php';
//try {
    
    $api = new ShopAPI();
    if (array_key_exists('userId', $_POST)) {
        $api->order($_POST['userId'], $_POST['email'], $_POST['first_name'], $_POST['last_name'], $_POST['address1'], $_POST['address2'], $_POST['postal_code'], $_POST['city'], $_POST['country'], json_decode($_POST['cart']));
    } else {
        $api->order(0, $_POST['email'], $_POST['first_name'], $_POST['last_name'], $_POST['address1'], $_POST['address2'], $_POST['postal_code'], $_POST['city'], $_POST['country'], json_decode($_POST['cart']));
    }
    

    $clientName = $_POST['first_name'] .' ' . $_POST['last_name'];
 

    $mail = new Mail();
    $subject = 'Order at Benbassat: Koekenshop';

    $body = "Hello $clientName,<br><br><table border='1'><tr>
    <th>Productnaam</th>
    <th>Unit price</th>
    <th>Quantity</th>
    <th>lineTotal</th>
    </tr>";
    $cart = json_decode($_POST['cart']);

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
    $body .= "</table><br><b>Total: €$total</b><br>Thanks for your purchase at Benbassat: Koekenshop!<br><br>Greets, <br>Arthur Benbassat from Benbassat: Koekenshop<br><br>if you have not orded something <a href='https://arthur.6tib.be/GIP'>click here</a>";
    $pdf = new Invoice();
    $pdf->makeInvoice($cart, $clientName);
    $mail->sendMail($_POST['email'], $body, $subject, 'invoice.pdf');
    unlink('invoice.pdf');
    setcookie('guid', '', time() - (3600*24*8), '/gip');
    header('Location: ../order.php?succes=true');

    
/*} catch (Exception $e) {
    header('Location: ../order.php?succes=false');
}*/
