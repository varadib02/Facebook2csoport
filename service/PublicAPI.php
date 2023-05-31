<?php 

/*
header('content-type: application/json');

$langT = array('en', 'de');
$lang = $langT[rand(0, 1)];

$url = 'https://uselessfacts.jsph.pl/api/v2/facts/random?language=' . $lang;

$result = file_get_contents($url);
echo $result;
*/ 

/*
header('content-type: application/json');

$count = 10;

$url = 'https://meowfacts.herokuapp.com/?count=' . $count;

$result = file_get_contents($url);
echo $result;
*/

/*
header('content-type: application/json');

$url = 'https://arbeitnow.com/api/job-board-api';
$result = file_get_contents($url);

echo $result;
*/

function getAPIData() {
    // Előző kérés Service rétegből GET az API-ra
  
    // Például, itt hívhatod meg az API-t és elmentheted a választ egy változóba
    $apiResponse = file_get_contents('https://arbeitnow.com/api/job-board-api');
    // Kód az API hívásához és válasz elmentéséhez
    
    // Visszatérési érték JSON formátumban
    return json_encode($apiResponse);
}

// A csoport tagjai: Kéri Bence, Tóth Milán, Váradi Barnabás
?>
