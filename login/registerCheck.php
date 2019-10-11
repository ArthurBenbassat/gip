<?php
include('../sql/db arthur.php');
 echo '<pre>';
var_dump($_GET);
echo '</pre>';


if ($_GET["company"] == ""){
   $customers_type = 1;
}
else{
    $customers_type = 2;
}

$sql = "insert into customers (customer_type_id,email,first_name,last_name,address_line1,address_line2,postal_code,city,country,phone_number,organization_name,vat_number) values (
    " . $customers_type . ",
    '" . $_GET["email"] . "',
    '" . $_GET["first_name"] . "',
    '" . $_GET["last_name"] . "',
    '" . $_GET["address1"] . "',
    '" . $_GET["address2"] . "',
    '" . $_GET["postal_code"] . "',
    '" . $_GET["city"] . "',
    '" . $_GET["country"] . "',
    '" . $_GET["phone"] . "',
    '" . $_GET["company"] . "',
    '')";
var_dump($sql)   ;  
$gelukt = mysqli_query($connection,$sql) or die("Error: " .mysqli_error($connection)); 
?>
<script>
    window.location.replace("../my-account.php");
</script>

