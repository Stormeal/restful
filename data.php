<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'POST',
    'http://grocerystorerest.azurewebsites.net/GroceryService.svc/vegetables',
    [
        'json' => [
            'Name' => "Test",
            'Price' => 1337,
            'Type' => "Flower",
        ],
    ]
);

var_dump($response);
echo $response->getBody();