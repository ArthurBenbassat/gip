<?php

echo '<h1>Enkelvoudige variabele</h1>';
$a = 'test';
echo json_encode($a);

echo '<h1>array van arrays</h1>';
$a = array
(
array(23,"Cake en gebak"),
array(6,"Droge koekjes"),
);
echo json_encode($a);

echo '<h1>array van objecten</h1>';
$a = [];
$obj = new stdClass();
$obj->id = 23;
$obj->name = 'Cake en gebak';
$a[] = $obj;
$obj = new stdClass();
$obj->id = 6;
$obj->name = 'Droge koekjes';
$a[] = $obj;
echo json_encode($a);

