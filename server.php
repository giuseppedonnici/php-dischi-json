<?php 

$dischi = file_get_contents("dischi.json"); // prendo il file json e lo salto in una variabile

$dischi_array = json_decode($dischi, true); // trasformo il json in un array associativo

// prepato la risposta
$response = [
    "results" => $dischi_array
];
header('Content-Type: application/json');
echo json_encode($response); // ritrasformo la risposta in un file json