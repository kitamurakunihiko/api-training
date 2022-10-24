<?php

require __DIR__.'/../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$url = 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m';

$response = $client->request('GET', $url);

var_dump($response->getBody()->getContents());
