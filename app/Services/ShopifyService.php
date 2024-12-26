<?php

namespace App\Services;

use GuzzleHttp\Client;

class ShopifyService {
    private $client;

    public function __construct() {
        $this->client = new Client([
            'base_uri' => "https://" . env('SHOPIFY_SHOP_URL') . "/admin/api/2024-01/",
            'headers' => [
                'X-Shopify-Access-Token' => env('SHOPIFY_ACCESS_TOKEN'),
                'Accept' => 'application/json'
            ]
        ]);
    }

    public function getProducts() {
        $response = $this->client->get('products.json');
        return json_decode($response->getBody(), true)['products'];
    }
}