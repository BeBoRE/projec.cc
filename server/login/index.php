<?php

//Log-in succesful ->                                loginsuccesful
//Incorrect creditials ->                            incorrectcreditials
//If password or username is not included in POST -> nopassuserset
//If user is already logged on ->                    alreadyloggedon

session_start();
header('Content-Type: text/plain');
require $_SERVER['DOCUMENT_ROOT'].'\db.php';

$stmt = $db->prepare("SELECT * FROM users WHERE userName=? LIMIT 1");
$stmt->bind_param("s",$username);

if(empty($_SESSION['userid'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
    $username = $_POST['username'];
    //Password to SHA256
    $password = hash("SHA256",$_POST['password']);

    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    if(!empty($result)){
      if($result['password'] == $password){
        $_SESSION['userid'] = $result['id'];
        echo 'loginsuccesful';
      }
      else{
        echo 'incorrectcreditials';
      }
    }
    else{
      echo "usernamenotexist";
    }
  }
  else{
    echo 'nopassuserset';
  }
}
else{
  echo 'alreadyloggedon';
}

?>
