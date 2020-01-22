<?php
require_once 'classes/shopAPI.php';

class Cart
{
    function getCart($guid)
    {
        if (!isset($guid)) {
            echo 'No products in the cart';
        } else {
            $api =  new ShopAPI();
            $cart = $api->getCart($guid);
            $items = '';
            for ($i = 0; $i < count($cart->lines); $i++) {
                $id = $cart->lines[$i]->product->id;
                $name = $cart->lines[$i]->product->name;
                $price = $cart->lines[$i]->product->price;
                $items .= "<tr>
            <td>
              <div class='media'>
                <div class='d-flex'>
                  <img
                    src='img/product/$name.jpg'
                    alt=''
                  />
                </div>
                <div class='media-body'>
                  <p>$name</p>
                </div>
              </div>
            </td>
            <td>
              <h5>€$price</h5>
            </td>
            <td>
              <div class='product_count'>
                <input
                  type='text'
                  name='qty'
                  id='sst'
                  maxlength='12'
                  value='1'
                  title='Quantity:'
                  class='input-text qty'
                />
                <button
                  onclick=''
                  class='increase items-count'
                  type='button'
                >
                  <i class='lnr lnr-chevron-up'></i>
                </button>
                <button
                  onclick=''
                  class='reduced items-count'
                  type='button'
                >
                  <i class='lnr lnr-chevron-down'></i>
                </button>
              </div>
            </td>
            <td>
              <h5>€$price</h5>
            </td>
          </tr>";
          
            }
            return $items;
        }
    }
}
