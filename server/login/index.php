<?php

session_start();
require $_SERVER['DOCUMENT_ROOT'].'\db.php';

if(isset($_POST['username']) && isset($_POST['password'])){
  $username = strip_tags($_POST['username']);
  $password = strip_tags($_POST['password']);
}

?>
