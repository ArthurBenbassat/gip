<?php 
$query = "";
$returning = false;
for ($i=0; $i < 13; $i++) {
    if (array_key_exists("brand_$i", $_GET)) {
        if ($query ==  "") {
            $query = "?brand_id=$i";
        } else {
            $query .= ",$i";
        }
    }
}
for ($i=0; $i < 7; $i++) {
    if (array_key_exists("category_$i", $_GET)) {
        if ($query ==  "") {
            $query = "?cat_id=$i";
        } elseif($returning == false) {
            $query .= "&cat_id=$i";
            $returning = true;
        } else {
            $query .= ",$i";
        }
    }
}
header("Location: ../shop.php$query");