<?php
require_once("core.php");
require_once("functions.php");


if (!isset($_SESSION["access_token"])) {

  header('Location: http://cryptex2017.ml/vide/examples/fb.php');
}


if (!isset($_SESSION["email"])) {
  add_user();
}



$link=connect();
$i=1;
?>
<!doctype html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cryptex</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/cry.png">

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.css">
    <link rel="stylesheet" href="css/styles.css">

  </head>
  <body>
    <div class="mdl-layout mdl-js-layout  mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
                <div class="mdl-layout__header-row">
                  <span class="android-title mdl-layout-title">
                    <img class="android-logo-image" src="images/cryptex-small.png">
                  </span>
                  <!-- Add spacer, to align navigation to the right in desktop -->
                  <div class="android-header-spacer mdl-layout-spacer"></div>
                  <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                       <!-- <i class="material-icons">search</i> -->
                    </label>

                  </div>
                  <!-- Navigation -->
                  <div class="android-navigation-container">
                    <nav class="android-navigation mdl-navigation">
                      <a class="mdl-navigation__link mdl-typography--text-uppercase" href="http://cryptex.csidtu.co.in/index.php">Home</a>
                      <a class="mdl-navigation__link mdl-typography--text-uppercase" target="_blank" href="https://www.facebook.com/phoenix.cryptex/app/202980683107053/">Forum</a>


                    </nav>
                  </div>
                  <span class="android-mobile-title mdl-layout-title">
                    <img class="android-logo-image" src="images/cryptex-small.png">
                  </span>

                </div>
              </div>

     <?php
  require('siderleader.php');
?>

      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="mdl-grid">
              <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop mdl-cell--1-offset-tablet">
                    <div class="mdl-card__title">
                      <h2 class="mdl-card__title-text">  </h2>
                    </div>

                   <center><font color = "red" size = "180%"> Leaderboard </font></center>

                   <!--  <div class="mdl-card__menu">
                      <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                        <i class="material-icons">share</i>
                      </button>
                    </div> -->
                    <!-- <img src="images/more-from-3.png" alt="">
                    <img src="images/more-from-4.png" alt="">
                    <img src="images/nexus6-on.jpg" alt=""> -->

                    <p id = 'board'>
                      <table cellspacing="2" cellpadding="2" align="center" width="100%" style="font-family: arial ;">
                        <tr style="text-align:center; font-color:red ">

                          <th>Rank</th>
                          <th>User</th>
                          <th>Name</th>
                          <th>Level</th>
                          <th>Lifelines-Left</th>
                        </tr>
                        <?php $sql_query2="Select fb_id , level,username,levelskip,firstlast,anslen,profilepic from register   order by level  desc , registertime asc";
                      //  $_SESSION['varname'] = '12';

                         //echo $sql_query2;
                         $r2=mysqli_query($link,$sql_query2);
                         //print_r($r2);
                         //$row2=mysqli_fetch_array($r2,MYSQLI_BOTH);
                        // print_r($row2);
                         while($row2=mysqli_fetch_row($r2))
                         {
                           if($row2['1']==60) continue;
                           ?>
                           <tr>
                             <td><center><?php echo $i++.'        '; ?></center></td>
                                                         <td><img src="
           <?php

           if($row2[0]==$_SESSION["fb_id"])
           $_SESSION['varname'] = $i-1;


           echo $row2["6"];

           ?>" class="demo-avatar"><center></td>
                             <td><center><?php echo $row2['2'].'        '; ?></center></td>
                             <td><center><?php echo $row2['1'].'        ';?> </center></td>

                             <td><center><?php


                             $value =0;
                             if($row2['3']==-1){
                               $value++;
                             }

                             if($row2['4']==-1){
                               $value++;
                             }

                             if($row2['5']==-1){
                               $value++;
                             }

                             echo $value ;

                              ?></center></td>

                           </tr><?php } ?>
                                                  </table>

       <?php

    require("footer2.php");

 ?>
    <script src="js/material.js"></script>
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
