<?php
require_once 'dbconnection.php';
$id = $_GET['id'];
if ($_GET['FR_name'] == '' && $_GET['EN_name'] == '') {
    $sql = "SELECT * FROM shop_products WHERE id = $id";
    $result = mysqli_query($connection, $sql);
    if ($row = $result->fetch_assoc()) {
        $nameEN = $row['name'];
        $nameFR = $nameEN;
    }
    
} else {
    $nameEN = $_GET['EN_name'];
    $nameFR = $_GET['FR_name'];
}
$ingredientsEN = $_GET['EN_ingredients'];
$ingredientsFR =  $_GET['FR_ingredients'];



$txt = "INSERT INTO shop_products_lang (product_id, language, name, ingredients) VALUES ($id, 'fr_FR', '$nameFR', '$ingredientsFR')\n";
$txt .= "INSERT INTO shop_products_lang (product_id, language, name, ingredients) VALUES ($id, 'en_US', '$nameEN', '$ingredientsEN')";

$myfile = file_put_contents('newfile.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);

$id ++;
header("Location: test.php?id=$id");