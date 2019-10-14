<?php
include('../sql/dbconnection.php');


if ($_POST["company"] == false){
   $customers_type = 1;
}
else{
    $customers_type = 2;
}

$sql = "insert into Customers (customer_type_id,email,first_name,last_name,address_line1,address_line2,postal_code,city,country,phone_number,organization_name,vat_number,password) values (
    " . $customers_type . ",
    '" . $_POST["email"] . "',
    '" . $_POST["first_name"] . "',
    '" . $_POST["last_name"] . "',
    '" . $_POST["address1"] . "',
    '" . $_POST["address2"] . "',
    '" . $_POST["postal_code"] . "',
    '" . $_POST["city"] . "',
    '" . $_POST["country"] . "',
    '" . $_POST["phone"] . "',
    '" . $_POST["company"] . "',
    '',
    '" . $_POST["password"] . "')";

$gelukt = mysqli_query($connection,$sql) or die("Error: " .mysqli_error($connection)); 

