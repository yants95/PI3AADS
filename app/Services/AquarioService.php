<?php

namespace App\Services;

use GuzzleHttp\Client;

class AquarioService {
    
    public function all() {
        $client = new Client([
            'base_uri' => 'https://jsonplaceholder.typicode.com/comments',
        ]);

        $response = $client->request('GET');

        return json_decode($response->getBody()->getContents());
    } 
}