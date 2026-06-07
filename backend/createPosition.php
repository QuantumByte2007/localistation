<?php

include_once 'service/PositionService.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Méthode non autorisée');
}

enregistrerPosition();

function enregistrerPosition() {
    $lat      = $_POST['latitude'];
    $lng      = $_POST['longitude'];
    $date     = $_POST['date_position'];
    $imei     = $_POST['imei'];

    $pos      = new Position(null, $lat, $lng, $date, $imei);
    $service  = new PositionService();
    $service->create($pos);

    echo "Position enregistrée avec succès";
}
