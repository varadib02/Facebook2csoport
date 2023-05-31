<?php 

//require_once('../modell/User.php');
require_once('../service/PublicAPI.php');

//header('content-type: application/json');
//$user = new User('alma@korte.hu', '1234', 'JakAb', 'gipsz', 33);

//print 'A user neve: ' . $user->getName() . '<br />';
//print 'A user joga: ' . $user->getLevel() . '<br />';
// print '{"name": "' . $user->getName() . '", "level": "' . $user->getLevel() . '"}';


$data = getAPIData();
$file = 'api_data.json';
file_put_contents($file, $data);

// A csoport tagjai: Kéri Bence, Tóth Milán, Váradi Barnabás
?>
