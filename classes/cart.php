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
            $prices = [];
            for ($i = 0; $i < count($cart->lines); $i++) {
                $productId = $cart->lines[$i]->product->id;
                $id = $cart->lines[$i]->id;
                $name = $cart->lines[$i]->product->name;
                $price = $cart->lines[$i]->product->price;
                $prices [] = $price;
                $items .= "<tr id='line$id'>
            <td>
              <div class='media'>
              <a href='product.php?id=$productId'>
                <div class='d-flex'>
                  <img
                    src='img/product/$name.jpg'
                    alt=''
                  />
                </div>
                </a>
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
            <td>
            <button class='btn'><i class='fa fa-trash' data-line_id='$id'></i></button>
            </td>
          </tr>";
          
            }
            $total = 0;
            for ($i= 0; $i < Count($prices); $i++) {
              $total += $prices[$i];
            }
            
            $items .= "<tr class='bottom_button'>
            <td>
              <a class='gray_btn' href='#'>Update Cart</a>
            </td>
            <td></td>
            <td></td>
            <td>
              <div class='cupon_text'>
                <input type='text' placeholder='Coupon Code' />
                <a class='main_btn' href='#'>Apply</a>
                <a class='gray_btn' href='#'>Close Coupon</a>
              </div>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>
              <h5>Subtotal</h5>
            </td>
            <td>
              <h5>€$total</h5>
            </td>
          </tr>
          <!--<tr class='shipping_area'>
            <td></td>
            <td></td>
            <td>
              <h5>Shipping</h5>
            </td>
            <td>
              <div class='shipping_box'>
                <ul class='list'>
                  <li>
                    <a href='#'>Flat Rate: $5.00</a>
                  </li>
                  <li>
                    <a href='#'>Free Shipping</a>
                  </li>
                  <li>
                    <a href='#'>Flat Rate: $10.00</a>
                  </li>
                  <li class='active'>
                    <a href='#'>Local Delivery: $2.00</a>
                  </li>
                </ul>
                <h6>
                  Calculate Shipping
                  <i class='fa fa-caret-down' aria-hidden='true'></i>
                </h6>
                <select class='shipping_select'>
                  <option value='1'>Bangladesh</option>
                  <option value='2'>India</option>
                  <option value='4'>Pakistan</option>
                </select>
                <select class='shipping_select'>
                  <option value='1'>Select a State</option>
                  <option value='2'>Select a State</option>
                  <option value='4'>Select a State</option>
                </select>
                <input type='text' placeholder='Postcode/Zipcode' />
                <a class='gray_btn' href='#'>Update Details</a>
              </div>
            </td>
          </tr>-->
          <tr class='out_button_area'>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <div class='checkout_btn_inner'>
                <a class='gray_btn' href='#'>Continue Shopping</a>
                <a class='main_btn' href='#'>Proceed to checkout</a>
              </div>
            </td>
          </tr>";

            return $items;
        }
    }
}
