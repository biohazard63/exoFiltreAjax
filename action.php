<?php
$house = isset($_GET['house']) ? $_GET['house'] : 'all';
$gender = isset($_GET['gender']) ? $_GET['gender'] : 'all';
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'asc';
$birthStart = isset($_GET['birthStart']) ? $_GET['birthStart'] : '';
$birthEnd = isset($_GET['birthEnd']) ? $_GET['birthEnd'] : '';
$search = isset($_GET['search']) ? $_GET['search'] : '';


$jsonData = file_get_contents('filtres-ajax.json');
$data = json_decode($jsonData, true);

usort($data, function($a, $b) use ($sort) {
    return $sort == 'asc' ? strcmp($a['name'], $b['name']) : strcmp($b['name'], $a['name']);
});
function createCharacterCard($image, $name, $house, $actor, $gender, $dateOfBirth) {
    $card = '
    <div class="card">
        <img src="' . $image . '" alt="Image du personnage">
        <h2>' . $name . '</h2>
        <p>' . $house . '</p>
        <p>'. $actor.' </p>
        <p>'. $gender.'</p>
        <p>'. $dateOfBirth.'</p>
    </div>
    ';
    return $card;
}

foreach ($data as $character) {
    $characterBirthDate = DateTime::createFromFormat('d-m-Y', $character['dateOfBirth']);
    $birthStartDate = DateTime::createFromFormat('Y-m-d', $birthStart);
    $birthEndDate = DateTime::createFromFormat('Y-m-d', $birthEnd);

    if (($house == 'all' || $character['house'] == $house) &&
        ($gender == 'all' || $character['gender'] == $gender) &&
        ($birthStart == '' || $characterBirthDate >= $birthStartDate) &&
        ($birthEnd == '' || $characterBirthDate <= $birthEndDate) &&
        ($search == '' ||
         strpos(strtolower($character['name']), strtolower($search)) !== false ||
         strpos(strtolower($character['house']), strtolower($search)) !== false ||
         strpos(strtolower($character['actor']), strtolower($search)) !== false ||
         strpos(strtolower($character['gender']), strtolower($search)) !== false)) {
        echo createCharacterCard($character['image'], $character['name'], $character['house'], $character['actor'], $character['gender'], $character['dateOfBirth']);
    }
}