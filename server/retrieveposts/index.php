<?php

session_start();
require $_SERVER['DOCUMENT_ROOT']."\db.php";

header('Content-Type: application/json');
$usernamelookup = $db->prepare('SELECT userName FROM users WHERE id=?');
$usernamelookup->bind_param("s",$userid);

$sql = "SELECT title,content,userid FROM posts";

if(!empty($_SESSION['userid'])){
  $result = $db->query($sql);
  $array = array();

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      $userid = $row['userid'];
      $usernamelookup->execute();
      $username = $usernamelookup->get_result()->fetch_assoc();
      array_push($array,array("title" => $row['title'],"content" => $row['content'],"userid"=>$username['userName']));
      //echo $userid;
    }
    echo json_encode($array);
  }
  else {
    echo json_encode(array("error" => "noposts"));
  }
}
else{
  echo json_encode(array("error" => "notloggedin"));
}

?>
