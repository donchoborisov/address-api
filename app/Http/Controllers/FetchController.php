<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;



class FetchController extends Controller
{
    public function fetch() {

        $client = new Client();
        $url = "https://api.getAddress.io/find/tw134gt";

       

        $headers = [
            'api-key' => 'Q4Jeaz7hLU-bYllIusQd_w34028'
        ];

        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'verify'  => false,
        ]);

        return $responseBody = json_decode($response->getBody());


      
    }
}
