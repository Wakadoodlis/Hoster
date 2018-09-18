<?php

require '../../../vendor/autoload.php';
// require_once($_SERVER['DOCUMENT_ROOT'] . 'vendor/autoload.php');

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

$client = new Client;
$crawler = $client->request('GET', 'https://hosting.review/best-web-hosting/');
$oldPrice = $crawler->filter('.old-price')->first()->text();
$salePrice = $crawler->filter('.sale-price')->first()->text();
echo "Old price: " . " " . $oldPrice . PHP_EOL . "<br>";
echo "Sale price: " . " " . $salePrice . PHP_EOL;

