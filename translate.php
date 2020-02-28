<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// language switch

// get the language
if (array_key_exists('language', $_COOKIE)) {
    $lang = $_COOKIE['language'];

    // make translations work
    $locale = $lang . ".UTF-8";
    putenv("LANG=$locale");
    putenv("LANGUAGE=$lang");
    //setlocale(LC_MESSAGES, $locale);
  
    $domain = 'messages';
    bindtextdomain($domain, __DIR__ . DIRECTORY_SEPARATOR . 'locale');
    bind_textdomain_codeset($domain, 'UTF-8');
    textdomain($domain);
  }