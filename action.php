<?php
$house = isset($_GET['house']) ? $_GET['house'] : 'all';

$jsonData = file_get_contents('filtres-ajax.json');
$data = json_decode($jsonData, true);

function createCharacterCard($image, $name, $house, $actor) {
    $card = '
    <div class="card">
        <img src="' . $image . '" alt="Image du personnage">
        <h2>' . $name . '</h2>
        <p>' . $house . '</p>
        <p>'. $actor.' </p>
    </div>
    ';
    return $card;
}

foreach ($data as $character) {
    if ($house == 'all' || $character['house'] == $house) {
        echo createCharacterCard($character['image'], $character['name'], $character['house'], $character['actor']);
    }
}