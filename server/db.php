<?php

$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$nameDB = "projec.cc";

//connect to db
$db = new mysqli($servername,$usernameDB,$passwordDB,$nameDB);

//check connection
if ($db->connect_error){
  die("Connection failed: " . $db->connect_error);
}

?>
