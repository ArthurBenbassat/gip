<?php
echo "<pre>";
var_dump($_SERVER);
$base_path = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


echo '<br>';
echo str_replace(basename(__FILE__, '.php'), '../verify', $base_path); 
echo "</pre>";