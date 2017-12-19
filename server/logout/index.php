<?php

//logoutsuccesful <- Logout is succesful ¯\_(ツ)_/¯

header('Content-Type: text/plain');

session_start();
session_destroy();

echo "logoutsuccesful"

?>
