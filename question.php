<?php
//session_start();
require_once("core.php");
require_once("functions.php");
ob_start();

if (!isset($_SESSION["access_token"])) {

  header('Location: http://localhost/downloadedcryptexsite/vide/examples/fb.php');
}


if (!isset($_SESSION["email"])) {
  add_user();
}
$answer = strtolower(trim($_POST["answer"]));
print_r($answer);
$answer = str_replace(' ','',$answer);
echo "$answer";
$answer=sha1($answer);
//echo "$answer";
print_r($answer);
if (checkans($answer,getlevel($_SESSION["fb_id"]))) {
//flush();
     updateUser($_SESSION["fb_id"]);
     header('Location: http://localhost/downloadedcryptexsite/index.php');
}
else{
//flush();
    header('Location: http://localhost/downloadedcryptexsite/index.php?msg=2');
}
?>
