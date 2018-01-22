<?php

//notloggedin <- Session has no userid
//empty <- One or more of the fields are empty
//unsafechar <- unsafe character given
//postsucceful <- post inserted into database

session_start();
header('Content-Type: text/plain');
require $_SERVER['DOCUMENT_ROOT'].'\db.php';

if(!empty($_SESSION['userid'])){
  $userid = $_SESSION['userid'];
  $insert = $db->prepare("INSERT INTO posts (title,content,userid) VALUES (?,?,?)");
  $insert->bind_param("ssi",$title,$content,$userid);

  if(!empty($_POST['title']) && !empty($_POST['content'])){
    $title = $_POST['title'];
    $content = $_POST['content'];

    if(preg_match('/[^\x00-\x1f]/',$title.$content)){
      $insert->execute();

      echo "postsuccesful";
    }
    else{
      echo "unsafechar";
    }
  }
  else{
    echo "empty";
  }
}
else{
  echo "notloggedin";
}

?>
