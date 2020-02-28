<?php
$returnPage = $_GET['page'];
$language = $_GET['language'];
setcookie('language', $language, time() + (86400 * 30));
header("Location: $returnPage");