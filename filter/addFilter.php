<?php 
$query = "";
$returning = false;
for ($i=0; $i < 14; $i++) {
    if (array_key_exists("brand_$i", $_GET)) {
        if ($query ==  "") {
            $query = "?brand_id=$i";
        } else {
            $query .= ",$i";
        }
    }
}
for ($i=0; $i < 8; $i++) {
    if (array_key_exists("category_$i", $_GET)) {
        if ($query ==  "") {
            $query = "?cat_id=$i";
            $returning = true;
        } elseif($returning == false) {
            $query .= "&cat_id=$i";
            $returning = true;
        } else {
            $query .= ",$i";
        }
    }
}
if (array_key_exists("sorting", $_GET)) {
    if ($query ==  "") {
        $query = "?sorting={$_GET['sorting']}";
    } else {
        $query .= "&sorting={$_GET['sorting']}";
    }
}
if (array_key_exists("order", $_GET)) {
    if ($query == "") {
        $query = "?order={$_GET['order']}";
    } else {
        $query .= "&order={$_GET['order']}";
    }
}

header("Location: ../shop.php$query");