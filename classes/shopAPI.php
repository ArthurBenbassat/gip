<?php

class ShopAPI
{
    
    private $baseURL;
    
    public function __construct() {
        if (DIRECTORY_SEPARATOR == '/') {
            $this->baseURL = 'https://benbassat.art/api/api.php/';
        }
        else {
            $this->baseURL = 'http://localhost/api/api.php/';
        }
    }
    
    public function getProduct($id) {
        $type = 'POST';
        $url = "products";
        $params = [$id];

        $data['language'] = $this->getLanguage();
        
        return $this->execute($type, $url, $params, $data);
    }

    public function updateDelivery($guid, $first_name, $last_name, $address_line1, $address_line2, $postal_code, $city, $country, $phone, $email) {
        $type = 'PUT';
        $url = 'cart';
        $params = [];
        $params[] = $guid;
        $data = [];
        $data['delivery_first_name'] =  $first_name;
        $data['delivery_last_name'] =  $last_name;
        $data['delivery_address_line1'] =  $address_line1;
        $data['delivery_address_line2'] = $address_line2; 
        $data['delivery_postal_code'] =  $postal_code;
        $data['delivery_city'] =  $city;
        $data['delivery_country'] =  $country;
        $data['delivery_phone'] =  $phone;
        $data['delivery_email'] =  $email;
        $data['language'] = $this->getLanguage();

        return $this->execute($type, $url, $params, $data);
    }

    public function getAllProducts($get = NULL) {
        $type = 'POST';
        $url = "products";
        $params = [];
        $data['language'] = $this->getLanguage();
        $data['filter'] = $get;
        return $this->execute($type, $url, $params, $data);
    }

    public function updateQuantity($quantity, $guid, $lineId) {
        $type = 'PUT';
        $url = 'cart';
        $params = [];
        $params[] = $guid;
        $params[] = 'line';
        $params[] = $lineId;
        $data['language'] = $this->getLanguage();
        $data['quantity'] = $quantity;

        return $this->execute($type, $url, $params, $data);
    }

    public function order($userId = 0, $cart) {
        $type = 'POST';
        $url = 'order';
        $params = [];
        $data['userId'] = $userId;
        $data['cart'] = $cart;
        $data['language'] = $this->getLanguage();
        return $this->execute($type, $url, $params, $data);
    }

    public function createWishList($productId, $userId, $guid) {
        $type = 'POST';
        $url = 'cart';
        $data['user_id'] = $userId;
        $data['quantity'] = 1;
        $data['product_id'] = $productId;
        $params = [];
        if (!empty($guid)) {
            $params[] = $guid;
            $params[] = 'line';
        }
        return $this->execute($type, $url, $params, $data);

    }

    public function deleteLine($lineId, $guid) {
        $type = 'DELETE';
        $url = 'cart';
        $params = [];
        $params[] = $guid;
        $params[] = 'line';
        $params[] = $lineId;
        $data['language'] = $this->getLanguage();
        return $this->execute($type, $url, $params, $data);
    }

    public function getBrands() {
        $type = 'GET';
        $url = 'brands';
        $params = [];
        $data = [];
        return $this->execute($type, $url, $params, $data);
    }

    public function updateCustomer($userId, $guid) {
        $type = 'PUT';
        $url = 'cart';
        $params = [];
        $params[] = $guid;
        $data = [];
        $data[] = $userId;
        return $this->execute($type, $url, $params, $data);
    }

    public function createCart($productId, $userId, $guid, $quantity = 1) {
        $type = 'POST';
        $url = 'cart';
        $data['user_id'] = $userId;
        $data['quantity'] = $quantity;
        $data['product_id'] = $productId;
        $params = [];
        if (!empty($guid)) {
            $params[] = $guid;
            $params[] = 'line';
        }
        $data['language'] = $this->getLanguage();
        return $this->execute($type, $url, $params, $data);
    }

    public function getCart($guid) {
        $type = 'POST';
        $url = 'cart';
        $params = [$guid];
        $data['language'] = $this->getLanguage();
        return $this->execute($type, $url, $params, $data);
    }    

    public function register($email, $first_name, $last_name, $address_line1, $address_line2, $postal_code, $city, $country, $phone_number, $organization_name, $vat_number, $password, $password2) {
        $type = 'POST';
        $url = 'register';
        $params = [];
        $data['email'] = $email;
        $data['first_name'] = $first_name;
        $data['last_name'] = $last_name;
        $data['address_line1'] = $address_line1;
        $data['address_line2'] = $address_line2;
        $data['postal_code'] = $postal_code;
        $data['city'] = $city;
        $data['country'] = $country;
        $data['phone_number'] = $phone_number;
        $data['organization_name'] = $organization_name;
        $data['vat_number'] = $vat_number;
        $data['password'] = $password;
        $data['password2'] = $password2;

        return $this->execute($type, $url, $params, $data);
    }

    public function getCustomer($id) {
        $type = 'GET';
        $url = "customer";
        $params = [$id];
        $data = [];
        return $this->execute($type, $url, $params, $data);
    }

    public function checkLogin($email, $password) {
        $type = 'PUT';
        $url = 'login';
        $params = [];
        $data['email'] = $email;
        $data['password'] = $password;
        return $this->execute($type, $url, $params, $data);
    }

    public function verify($id, $token) {
        $type = 'PUT';
        $url = 'verify';
        $params = [];
        $data['id'] = $id;
        $data['token'] = $token;
        return $this->execute($type, $url, $params, $data);
    }

    public function getCategory() {
        $type = 'POST';
        $url = "categories";
        $params = [];
        $data['language'] = $this->getLanguage();
        return $this->execute($type, $url, $params, $data);
    }

    private function execute($type, $url, $params, $data) {
        $fullURL = $this->baseURL . $url;

        if ($params) {
            $fullURL .= '/' . implode('/', $params);
        }

        $ch = curl_init($fullURL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        
        if ($type == 'PUT' || $type == 'POST' || $type == 'DELETE') {      
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); 
        }

        $output = curl_exec($ch);
        if (curl_getinfo($ch, CURLINFO_HTTP_CODE) != 200) {
            
            $error = json_decode($output);
            throw new Exception($error->errorMessage);
        }
        curl_close($ch);
        return json_decode($output) ;

    }

    private function getLanguage() {
        if (array_key_exists('language', $_COOKIE)) {
            return $_COOKIE['language'];
        } else {
           return 'nl_BE';
        }
    }
}
