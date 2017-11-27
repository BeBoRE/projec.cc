<?php

session_start();
header('Content-Type: text/plain');
require $_SERVER['DOCUMENT_ROOT'].'\db.php';

//Preparation for inserting user+pass into database
$insert = $db->prepare("INSERT INTO users (userName,password) VALUES (?,?)");
$insert->bind_param("ss",$username,$password);

//Preparation for if username is already in database
$alreadyexist = $db->prepare("SELECT * FROM users WHERE userName=?");
$alreadyexist->bind_param("s",$username);

if(!empty($_POST['username']) && !empty($_POST['password'])){
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  if(!preg_match("/[^\x21-\x7E]/",$password.$username)){
    $alreadyexist->execute();
    if(!$alreadyexist->get_result()->fetch_assoc()){
      $password = hash("SHA256",$password);
      $insert->execute();
      echo "accregsuccesful";
    }
    else{
      echo "accalreadyexist";
    }
  }
  else{
    echo "unsafechar";
  }
}
else{
  echo "nopassuserset";
}

?>
