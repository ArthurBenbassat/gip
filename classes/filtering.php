<?php
require_once 'shopAPI.php';

class Filter {
    public function getBrands() {
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

        for ($i=0; $i < Count($brand); $i++) {
            $name = $brand[$i]->name;
            $id = $brand[$i]->id;
            $items.= "<li>
                    <a href='shop.php?brand=$id'>$name</a>
                  </li>";
        }

        $items .= "  
        </ul>
      </div>
    </aside>";
    return $items;
    }

    public function getCategories() {
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
        for ($i=0; $i < Count($categories);$i++) {
            $name = $categories[$i]->name;
            $id = $categories[$i]->id;

            $items .= " <li>
            <a href='?cat_id=$id'>$name</a>
          </li>";
        }
           
        $items .= "</ul></div></aside>";
        return $items;
    }
}