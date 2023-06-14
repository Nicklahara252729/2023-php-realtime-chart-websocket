<?php

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Chart;

require dirname(__DIR__) . '/vendor/autoload.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chart() // Nama class php yang sudah kita buat tadi
        )
    ),
    8080
);

$server->run();
