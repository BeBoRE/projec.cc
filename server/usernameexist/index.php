<?php
//true   <-  if username exists
//false  <-
header('Content-Type: text/plain');
require $_SERVER['DOCUMENT_ROOT'].'\db.php';

//Preparation for if username is already in database
$alreadyexist = $db->prepare("SELECT * FROM users WHERE userName=?");
$alreadyexist->bind_param("s",$username);

if(!empty($_POST['username'])){
  $username = trim($_POST['username']);
  if(!preg_match("/[^\x21-\x7E]/",$username)){
    $alreadyexist->execute();
    if($alreadyexist->get_result()->fetch_assoc()){
      echo "1";
    }
    else{
      echo "0";
    }
  }
}

 ?>
