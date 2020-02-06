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
              $api =  new ShopAPI();
              $cart = $api->getCart($_COOKIE['guid']);
              $items = "<ul class='list'>
              <li>
                <a href='#'
                  >Product
                  <span>Total</span>
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
                    <a href='#'
                      >Subtotal
                      <span>€$total</span>
                    </a>
                  </li>
                  <li>
                    <a href='#'
                      >Shipping
                      <span>FREE</span>
                    </a>
                  </li>
                  <li>
                    <a href='#'
                      >Total
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
