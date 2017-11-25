<?php

session_start();
header('Content-Type: application/json');
require $_SERVER['DOCUMENT_ROOT'].'\db.php';

$stmt = $db->prepare("SELECT * FROM users WHERE userName=? LIMIT 1");
$stmt->bind_param("s",$username);

if(!empty($_POST['username']) && !empty($_POST['password'])){
  $username = $_POST['username'];
  //Password to SHA256
  $password = hash("SHA256",$_POST['password']);

  $stmt->execute();
  $result = $stmt->get_result()->fetch_assoc();

  if($result['password'] == $password){
    header("Content-Type: application/json");
    echo 'succesful';
  }
  else{
    echo json_encode(array("error" => "Username and/or password is incorrect"));
  }
}
else{
  header('Content-Type: application/json');
  echo json_encode(array("error" => "Username and/or password not set"));
}

?>
