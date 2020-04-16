<?php
require_once 'classes/shopAPI.php';

class Checkout
{
    function getProducts()
    {
      try {
          if (!isset($_COOKIE['guid'])) {
              return 'No products in the cart';
          } else {
            if ($_COOKIE['language'] == 'en_US') {
              $productLang = 'product';
              $totalLang = 'total';
              $subtotalLang = 'subtotal';
              $shippingLang = 'shipping';
              $freeLang = 'FREE';
            } elseif($_COOKIE['language'] == 'fr_FR') {
              $productLang = 'produit';
              $totalLang = 'total';
              $subtotalLang = 'Sous-total';
              $shippingLang = 'livraison';
              $freeLang = 'GRATUITE';
            } else {
              $productLang = 'product';
              $totalLang = 'totaal';
              $subtotalLang = 'subtotaal';
              $shippingLang = 'verzending';
              $freeLang = 'GRATIS';
            }
              $api =  new ShopAPI();
              $cart = $api->getCart($_COOKIE['guid']);
              $items = "<ul class='list'>
              <li>
                <a
                  >$productLang
                  <span>$totalLang</span>
                </a>
              </li>";

              if (count($cart->lines) == 0) {
                  return 'No products in the cart';
              } else {
                  for ($i = 0; $i < count($cart->lines); $i++) {
                      $productId = $cart->lines[$i]->product->id;
                      $quantity = $cart->lines[$i]->quantity;
                      $name = $cart->lines[$i]->product->name;
                      $total = number_format((float)$cart->totalPrice, 2, '.', '');
                      $linePrice = number_format((float)$cart->lines[$i]->linePrice, 2, '.', '');
                      
                      $items .= "
                      <li>
                        <a href='product.php?id=$productId'
                          >$name
                          <span class='middle'>x $quantity</span>
                          <span class='last'>€$linePrice</span>
                        </a>
                      </li>
                    ";
                  }
                  $items .= "</ul><ul class='list list_2'>
                  <li>
                    <a
                      >$subtotalLang
                      <span>€$total</span>
                    </a>
                  </li>
                  <li>
                    <a 
                      >$shippingLang
                      <span>$freeLang</span>
                    </a>
                  </li>
                  <li>
                    <a href='#'
                      >$totalLang
                      <span>€$total</span>
                    </a>
                  </li>
                </ul>";
                  return $items;
                  
              }
          }
        } catch (Exception $e) {
          return 'No products in the cart';
        }
    }
}
