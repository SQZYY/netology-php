<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: ./search.php');
    die();
}

require __DIR__ . '/vendor/autoload.php';

$api = new \Yandex\Geo\Api();

$api->setQuery($_POST['address']);

$api
    ->setLimit(50)
    ->setLang(\Yandex\Geo\Api::LANG_RU)
    ->load();

$response = $api->getResponse();
$response->getFoundCount();
$response->getQuery();
$response->getLatitude();
$response->getLongitude();

$collection = $response->getList();
foreach ($collection as $item) {
    echo '<strong>Адрес: </strong>' . $item->getAddress() . '</br>';
    echo '<strong>Широта: </strong>' . $item->getLatitude() . '</br>';
    echo '<strong>Долгота: </strong>' . $item->getLongitude() . '</br> <hr>';
}