<?php

class Header {
    public function getFirstName() {        
        if (array_key_exists('first_name', $_SESSION)) {
            return $_SESSION['first_name'];
        }else {
            return '';
        }
        
    }
}