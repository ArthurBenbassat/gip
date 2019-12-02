<?php

class ShopAPI {
    private $baseURL = 'http://localhost/api/api.php/';

    public function getProduct($id) {
        $type = 'GET';
        $url = "products";
        $params = [$id];
        $data = [];
        return $this->execute($type, $url, $params, $data);
        
    }

    private function execute($type, $url, $params, $data) {
        $fullURL = $this->baseURL . $url;

        if ($params) {
            $fullURL .= '/' . implode('/', $params);
        }

        if ($type == 'GET') {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $fullURL);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            return json_decode($output);
        }
    }
}