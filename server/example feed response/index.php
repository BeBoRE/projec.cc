<?php

require __DIR__."\db.php";

header('Content-Type: application/json');
$array = array(array('timePosted' => time(),'title' => 'Lorem Ipsum','thumbnail' => 'http://howtorecordpodcasts.com/wp-content/uploads/2012/10/YouTube-Background-Pop-4.jpg','user' => 'Jason'),array('timePosted' => time() - (3 * 24 * 60 * 60),'title' => 'Who this? new phone','thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/Michael_Jackson_Cannescropped.jpg/170px-Michael_Jackson_Cannescropped.jpg','user' => 'Some dumbass rick and morty fan'),"error" => "");
echo json_encode($array);


?>
