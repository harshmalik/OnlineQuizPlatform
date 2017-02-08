<?php
session_start();

error_reporting(0);
require("functions.php");

if (!isset($_SESSION["email"])) {
  header('Location: http://cryptex2017.ml/vide/examples/fb.php ');
}
else{
  //scheckaccesstoken();
}

if (!isset($_SESSION["email"])) {
  add_user();
}

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
    <style>

    </style>
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

          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="https://cryptex2017.ml/index.php">Home</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" target="_blank" href="https://www.facebook.com/phoenix.cryptex/app/202980683107053/">Forum</a>

            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/cryptex-small.png">
          </span>


        </div>
      </div>
<?php
  require('sider2.php');
?>


           <div class="android-content mdl-layout__content">
                  <a name="top"></a>
                  <div class="mdl-grid">

                          <div class="android-customized-section-text">
                              <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">Web Development Team</div>
                          </div>


                    <div class="mdl-cell mdl-cell--11-col mdl-cell--12-col-phone mdl-cell--1-offset-desktop mdl-cell--1-offset-table">

                              <div class="demo-card-image1 mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col mdl-cell--10-col-phone">
                                <div class="mdl-card__title mdl-card--expand"></div>
                                <div class="mdl-card__actions">
                                  <span class="demo-card-image__filename">Harsh Kumar</span>
                                </div>
                              </div>


                            </div>
                      </div>


                          <div class="android-customized-section-text">
                              <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">Content Team</div>
                               <h5 style="text-align: center;">Kushagra Jain</h5>
                              <h5 style="text-align: center;">Sachin Kadyan</h5>
                              <h5 style="text-align: center;">Shubham Jana</h5>

                          </div>





                  </div>

 <?php

    require("footer.php");

 ?>
           </div><!-- android layout content end here -->
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
