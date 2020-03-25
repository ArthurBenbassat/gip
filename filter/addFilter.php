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
if (array_key_exists("price", $_GET)) {    
    $pricing = str_replace(' ', '', $_GET['price']);
    $minMax = explode('€', $pricing);
    
    $min =  $minMax[1];
    $max = $minMax[2];
    if ($query == "") {
        $query = "?price=$min-$max";
    } else {
        $query .= "&price=$min-$max";
    }
}


header("Location: ../shop.php$query");