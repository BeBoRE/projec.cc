<?php

//nopassuserset   <- No password or username given
//unsafechar      <- Character given not between 33 and 126 (All printable characters except space and DEL)
//accalreadyexist <- If username already exists in database
//accregsuccesful <- Account inserted into database

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

      //insert account into database
      $password = hash("SHA256",$password);
      $insert->execute();

      //logon user
      $alreadyexist->execute();
      $result = $alreadyexist->get_result()->fetch_assoc();
      $_SESSION['userid'] = $result['id'];

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
