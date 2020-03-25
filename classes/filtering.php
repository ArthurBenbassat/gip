<?php
require_once 'shopAPI.php';

class Filter {
    public function getBrands($get) {
        $api = new ShopAPI();
        $brand = $api->getBrands();
        if ($_COOKIE['language'] == 'fr_FR') {
            $title = 'Marque';
        } elseif($_COOKIE['language'] == 'en_US') {
            $title = 'Brand';
        } else {
            $title = 'Merk';
        }
        $items = "<aside class='left_widgets p_filter_widgets'>
        <div class='l_w_title'>
          <h3>$title</h3>
        </div>
        <div class='widgets_inner'>
          <ul class='list'>
          ";

        if (array_key_exists('brand_id', $get)) {
          $checkedTemp = [];
          $checkedTemp = explode(',', $get['brand_id']);
        }
        $checked = [];
        if (isset($checkedTemp)) {
          for ($i=0; $i < Count($checkedTemp); $i++) {
            $checked[$checkedTemp[$i]] = $checkedTemp[$i];
          }
        }
        for ($i=0; $i < Count($brand); $i++) {
            $name = $brand[$i]->name;
            $id = $brand[$i]->id;
            if (isset($checked[$id])) {
              $items.= "<li><div class='custom-control custom-checkbox mb-3'>
            <input type='checkbox' class='custom-control-input' id='brand_$id' name='brand_$id' checked>
            <label class='custom-control-label' for='brand_$id'>$name</label>
            </div></li>";
            } else {
              $items.= "<li><div class='custom-control custom-checkbox mb-3'>
            <input type='checkbox' class='custom-control-input' id='brand_$id' name='brand_$id'>
            <label class='custom-control-label' for='brand_$id'>$name</label>
            </div></li>";
            }
            
        }

        $items .= '  
        </ul>
      </div>
    </aside>';
    return $items;
    }

    public function getCategories($get) {
        $api = new ShopAPI();
        $categories = $api->getCategory();
        if ($_COOKIE['language'] == 'fr_FR') {
            $title = 'Catégorie';
        } elseif($_COOKIE['language'] == 'en_US') {
            $title = 'Category';
        } else {
            $title = 'Categorie';
        }
        $items = "<aside class='left_widgets p_filter_widgets'>
        <div class='l_w_title'>
          <h3>$title</h3>
        </div>
        <div class='widgets_inner'>
          <ul class='list'>";
          if (array_key_exists('cat_id', $get)) {
            $checkedTemp = [];
            $checkedTemp = explode(',', $get['cat_id']);
          }
          $checked = [];
          if (isset($checkedTemp)) {
            for ($i=0; $i < Count($checkedTemp); $i++) {
              $checked[$checkedTemp[$i]] = $checkedTemp[$i];
            }
          }
        for ($i=0; $i < Count($categories);$i++) {
            $name = $categories[$i]->name;
            $id = $categories[$i]->id;
            
            if (isset($checked[$id])) {
              $items.= "<li><div class='custom-control custom-checkbox mb-3'>
              <input type='checkbox' class='custom-control-input' id='category_$id' name='category_$id' checked>
              <label class='custom-control-label' for='category_$id'>$name</label>
              </div></li>";
            } else {
              $items .= "<li><div class='custom-control custom-checkbox mb-3'>
              <input type='checkbox' class='custom-control-input' id='category_$id' name='category_$id'>
              <label class='custom-control-label' for='category_$id'>$name</label>
              </div></li>";
            }
        }
           
        $items .= '</ul></div></aside>';
        return $items;
    }

    public function getPricing($get) {
      if ($_COOKIE['language'] == 'fr_FR') {
        $title = 'Prix';
      } elseif($_COOKIE['language'] == 'en_US') {
          $title = 'Price';
      } else {
          $title = 'Prijs';
      }
      $api = new ShopAPI();
      $products = $api->getAllProducts($get);
      $mostExpensive = 0;
      $cheapest = 1000;
      for ($i=0; $i < Count($products); $i++) {
        if ($products[$i]->price > $mostExpensive) {
          $mostExpensive = $products[$i]->price;
        }
        if ($products[$i]->price < $cheapest) {
          $cheapest = $products[$i]->price;
        }
      }
      $step = round(($mostExpensive - $cheapest) / 10, 2);

      return "<aside class='left_widgets p_filter_widgets'>
      <div class='l_w_title'>
        <h3>$title</h3>
      </div>
      <div class='widgets_inner'>
        <div class='range_item'>
          <div id='slider-range' ></div>
          <div class=''>
            <label for='pricing'>$title : </label>
            <input type='text' id='amount' name='price' data-min='$cheapest' data-max='$mostExpensive' data-step='$step' readonly />
          </div>
        </div>
      </div>
    </aside>";

    }

    public function sorting($get) {
      if ($_COOKIE['language'] == 'en_US') {
        $orderDESC  = 'Descending';
        $orderASC = 'Ascending';
        $sortName = 'Sort by name';
        $sortPrice = 'Sort by price';
        $sortReview = 'Sort by rating';
      } elseif ($_COOKIE['language'] == 'fr_FR') {
        $orderDESC  = 'Décroissant';
        $orderASC = 'En augmentation';
        $sortName = 'Trier par nom';
        $sortPrice = 'Trier par prix';
        $sortReview = 'Trier par note';
      } else {
        $orderDESC  = 'Aflopend';
        $orderASC = 'Oplopend';
        $sortName = 'Sorteer volgens naam';
        $sortPrice = 'Sorteer volgens prijs';
        $sortReview = 'Sorteer volgens beoordeling';
      }
      if (array_key_exists('sorting', $get)) {
        if ($get['sorting'] == 'price') {
          $items = "<select class='show' name='sorting'>
            <option value='price' >$sortPrice</option>
            <option value='name' >$sortName</option>
            <option value='review'>$sortReview</option>
          </select>";
        } elseif ($get['sorting'] == 'review') {
          $items = "<select class='show' name='sorting'>
          <option value='review'>$sortReview</option>
          <option value='name' >$sortName</option>
          <option value='price' >$sortPrice</option>
          </select>";
        } else {
          $items = "<select class='show' name='sorting'>
          <option value='name' >$sortName</option>
          <option value='price' >$sortPrice</option>
            <option value='review'>$sortReview</option>
          </select>";
        }
      } else {
        $items = "<select class='show' name='sorting'>
          <option value='name' >$sortName</option>
          <option value='price' >$sortPrice</option>
            <option value='review'>$sortReview</option>
          </select>";
      }
      if (array_key_exists('order', $get)) {
        if ($get['order'] == 'descending') {
          $items .= "
          <select class='sorting' name='order'>
            <option value='descending'>$orderDESC</option>;
            <option value='ascending'>$orderASC</option>;
          </select>";
          } else {
            $items .= "
            <select class='sorting' name='order'>
              <option value='ascending'>$orderASC</option>;
              <option value='descending'>$orderDESC</option>;
            </select>";
          }
      } else {
        $items .=  "
        <select class='sorting' name='order'>
              <option value='ascending'>$orderASC</option>;
              <option value='descending'>$orderDESC</option>;
            </select>";
      }

      return $items;
    }
}