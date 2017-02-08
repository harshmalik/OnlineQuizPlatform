<?php
session_start();
include("core.php");
error_reporting(0);
require("functions.php");

if (!isset($_SESSION["access_token"])) {
  //add_user();
  header('Location: http://cryptex2017.ml/vide/examples/fb.php');
}

if (!isset($_SESSION["email"])){
 add_user();

}
//add_user();
//print_r($_SESSION["email"]);

?>


<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Cryptex online quizzing game">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cryptex</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/cry.png">

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material.css">
    <link rel="stylesheet" href="css/styles.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="http://cryptex2017.ml/index.php">Home</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" target="_blank" href="https://www.facebook.com/cryptex2017/app/202980683107053/">Forum</a>


            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/cryptex-small.png">
          </span>

        </div>
      </div>

<?php
  require('sider.php');
?>

<script>
'use strict';

    $("#ls").click(function() {
      alert("You have clicked Levelskip Lifeline ");
        var levelname = "levelskip";

        $.post( "zqlifeline.php", { name: levelname } ,

           function( data ) {
              var c = '"-1"';
              data=JSON.stringify(data);

                if(data === c  ){
                    $.post( "../zqgetlifeline.php", { name: levelname } ,
                    function( data ) {
                      console.log(data);
                        //  $("#reshu").html=data;
                          location.reload();
                      //    window.location.href = "http://localhost/downloadedcryptexsite/index.php";
                        //  window.location.href = "http://www.google.com";


                    }

                    );


                }
                else{
                  var stringq = "You have already used this lifeline on level ";
                  stringq = stringq.concat(data);
                   $("#reshu").text(stringq);
                }


            }

         );

    });

  $("#fl").click(function() {
    alert("You have clicked on  First-last Lifeline");
     var levelname = "firstlast";
       $.post( "zqlifeline.php", { name: levelname } ,
          function( data ) {
              var c = '"-1"';
              data=JSON.stringify(data);
                if(data === c  ){
                    $.post( "zqgetlifeline.php", { name: levelname } ,
                    function( datas ) {
                      console.log(datas);
                      window.alert(datas);
                      var stringq = "First and Last Lifeline: The First and Last Letters of your answer are ";
                      stringq = stringq.concat(datas.charAt(0));
                      stringq = stringq.concat(" and ");
                      stringq = stringq.concat(datas.charAt(1));
                      stringq = stringq.concat(" respectively ");

                      $("#reshu").text(stringq);
                    }

                    );


                }else{
                  var stringq = "You have already used this lifeline on level ";
                  stringq = stringq.concat(data);
                   $("#reshu").text(stringq);
                }


            }

         );

});

  $("#al").click(function() {
    alert("You have clicked on anslen lifeline");
    var levelname = "anslen";

        $.post( "zqlifeline.php", { name: levelname } ,
          function( data ) {
              var c = '"-1"';
              data=JSON.stringify(data);
                if(data === c  ){
                    $.post( "zqgetlifeline.php", { name: levelname } ,
                    function( data ) {
                      var stringq = "Answer Length Lifeline: The length of your string is ";
                      console.log(data);
                      stringq = stringq.concat(data);
                      $("#reshu").text(stringq);
                    }

                    );


                }else{
                  var stringq = "You have already used this lifeline on level ";
                  stringq = stringq.concat(data);
                   $("#reshu").text(stringq);
                }


            }

         );

});

</script>
<?php

//print_r("WOWOWOWOWOWOW");
session_start();
add_user();
require_once("functions.php");
    $level=getlevel($_SESSION["fb_id"]);
//print_r("THE LEVEL IS:");
    //print_r($level);
    $questionData=getQuestionData($level);

    $row=mysqli_fetch_array($questionData,MYSQLI_BOTH);
//print_r($row);


?>

        <div class="android-content mdl-layout__content">
                <a name="top"></a>
                <div class="mdl-grid">


                      <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--10-col mdl-cell--1-offset-desktop mdl-cell--1-offset-tablet">

                            <?php

                                if(isset($_GET["msg"])){

                                    if ($_GET["msg"]==2) {


                                    ?>
                                      <br><br>
                                   <div class="mdl-card__supporting-text"> Your answer is incorrect try again.</div>

                                    <?php
                                  }
                                }

                            ?>

                            <div class="mdl-card__title">
                              <h2 class="mdl-card__title-text">Question Number : <?php echo $row['qno'];?></h2>
                            </div>

                            <div class="mdl-card__supporting-text">
                              <?php echo $row['ques'];?>
                            </div>

                           <div class="mdl-card__supporting-text" id="reshu"></div>

                        <?php
                          if (isset($row["image1"])) {

                            $src= 'images/questions/' . $row['image1'] ;

                            $source='<div class="mdl-grid">
                                  <div class="demo-card-image mdl-card mdl-shadow--2dp  mdl-cell mdl-cell--8-col mdl-cell--12-col-phone">
                                    <img src="'.$src.'" class="responsive-img">
                                  </div>
                            </div>';

                            echo $source;

                          }

                          if (isset($row["image2"])) {

                            $src= 'images/questions/' . $row['image2'] ;

                            $source='<div class="mdl-grid">
                                  <div class="demo-card-image mdl-card mdl-shadow--2dp  mdl-cell mdl-cell--8-col mdl-cell--12-col-phone">
                                    <img src="'.$src.'" class="responsive-img">
                                  </div>
                            </div>';

                            echo $source;

                          }

                          if (isset($row["image3"])) {

                            $src= 'images/questions/' . $row['image3'] ;

                            $source='<div class="mdl-grid">
                                  <div class="demo-card-image mdl-card mdl-shadow--2dp  mdl-cell mdl-cell--8-col mdl-cell--12-col-phone">
                                    <img src="'.$src.'" class="responsive-img">
                                  </div>
                            </div>';

                            echo $source;

                          }

                          if (isset($row["video"])) {

                            $src = $row["video"] ;


                            $source = '<div class="video-container"><iframe title="YouTube video player" class="youtube-player" type="text/html"
width="640" height="390" src="'.$src.'"
frameborder="0" allowFullScreen></iframe></div>';

                          echo $source;
                          }
                          ?>

                        </div>


                       <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell-middle mdl-cell--10-col mdl-cell--1-offset-desktop mdl-cell--1-offset-tablet">

                          <div class="mdl-grid">
                          <div class="mdl-cell-middle mdl-cell--6-col mdl-cell--3-offset-desktop mdl-cell--3-offset-tablet">
                             <form action="question.php" id="submitForm" method="post">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                  <input class="mdl-textfield__input" type="text" name="answer" id="sample3">
                                  <label class="mdl-textfield__label" for="sample3">Type your answer</label>
                                </div>
                                <!-- Colored raised button -->

                                   <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" name="submit">

                              </form>
                          </div>

                          </div>
                        </div>




                      </div><!-- mdl grid -->
 <?php

    require("footer.php");

 ?>


                 </div><!--android content -->

    </div>

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
