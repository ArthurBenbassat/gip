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

        $items .= "  
        </ul>
      </div>
    </aside>";
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
           
        $items .= "</ul></div></aside>";
        return $items;
    }
}