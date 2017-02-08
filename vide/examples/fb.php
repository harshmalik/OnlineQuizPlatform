<?php
session_start();
error_reporting(0);
include  dirname(dirname(dirname(__FILE__))).'/functions.php' ;
include  dirname(dirname(dirname(__FILE__))).'/fbapi.php' ;

?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Cryptex'17</title>
  <!--  <style>
      html, body {
        margin: 0;
        width: 100%;
        height: 100%;
      }
      img.responsive-img,

      .positioning{
        margin-top: -20%;

      }

      @media (min-width: 480px) and (max-width: 839px){
            .positioning{
        margin-top: -25%;
      }
      }

      @media (max-width: 479px) {
            .positioning{
        margin-top: -60%;
      }
      }



    </style>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <link rel="stylesheet" href="css/style.css">
		      <link rel="stylesheet" href="css/styleaudio.css">


</head>
<body data-vide-bg="video/ocean">
</div>
   <div style="height:90%;">
  <!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="../dist/jquery.min.js"><\/script>')</script>
    <script src="../src/jquery.vide.js"></script>


  <?php
session_start();
include  dirname(dirname(dirname(__FILE__))).'/fbcode.php' ;

?>
<svg viewBox="0 0 800 600">
 <symbol id="s-text">
   <text text-anchor="middle"
         x="50%"
         y="25%"
         class="text--line"
         >
     CRYPTEX
   </text>
   <text text-anchor="middle"
         x="50%"
         y="68%"
         class="text--line2"
         >
     2017
   </text>

 </symbol>

 <g class="g-ants">
   <use xlink:href="#s-text"
     class="text-copy"></use>
   <use xlink:href="#s-text"
     class="text-copy"></use>
   <use xlink:href="#s-text"
     class="text-copy"></use>
   <use xlink:href="#s-text"
     class="text-copy"></use>
   <use xlink:href="#s-text"
     class="text-copy"></use>
 </g>


</svg>



    <!--<div class="positioning">
      <img src="cryptex.png" class="responsive-img" >
    </div>
-->


  <center>
<br />
  <div class="fb-login-button" scope="public_profile,email,user_friends"
  onlogin="checkLoginState();" data-size="large" data-show-faces="false"
  data-auto-logout-link="true" value="LOGIN"></div>
  </center>
</div>


  <!-- <div id='status'></div>
   -->
   <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

     ga('create', 'UA-80262297-2', 'auto');
     ga('send', 'pageview');

   </script>
  </body>
</html>

<?php

 if(isset($_SESSION['userID']) && isset($_SESSION['access_token']))
    {

    //  header('Location: http://www.google.com');
//add_user();
      header('Location: http://cryptex2017.ml/index.php');


     }

if(!isset($_SESSION['access_token'])) {


   }

 ?>
