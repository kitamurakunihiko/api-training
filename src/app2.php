<?php

require __DIR__.'/../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$api_key = 'AIzaSyCuSE_5G-NPRqyKvckGxbsc2Moogg2MAbg';
$url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&key='.$api_key.'&type=channel&q=php';

$response = $client->request('GET', $url);

var_dump($response->getBody()->getContents());