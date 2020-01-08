<?php

class ShopAPI
{
    private $baseURL = 'http://localhost/api/api.php/';

    public function getProduct($id) {
        $type = 'GET';
        $url = "products";
        $params = [$id];
        $data = [];
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
        $type = 'GET';
        $url = "categories";
        $params = [];
        $data = [];
        return $this->execute($type, $url, $params, $data);
    }

    private function execute($type, $url, $params, $data) {
        $fullURL = $this->baseURL . $url;

        if ($params) {
            $fullURL .= '/' . implode('/', $params);
        }

        $ch = curl_init($fullURL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        
        if ($type == 'PUT' || $type == 'POST') {      
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
}
