<?php
// session_start();
require_once("core.php");
require("functions.php");

if (!isset($_SESSION["access_token"])) {
  header('Location: http://cryptex2017.ml/vide/examples/fb.php ');
}


if (!isset($_SESSION["email"])) {
  add_user();
}

 $life = $_POST['name'];

 if ($life=="levelskip") {
 	echo levelskip();
 }

 if ($life=="firstlast") {
 	echo firstlast();
 }

if ($life=="anslen") {
 	echo anslen();
 }
?>
