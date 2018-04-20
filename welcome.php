<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <script src="modal.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <meta charset="utf-8">
    <title>Photo Contest Gallery</title>
  </head>
  <body>

<!--mySQL database tutorial https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php -->
    <div id="left">
      <div class="container">
        <img src="https://i.imgur.com/EMTNGLh.jpg" alt="Ocean Breze">
      </div>
    </div>

    <div id="center">
      <div class="container">
        <img id="theOne" src="https://i.imgur.com/symF4eW.jpg" alt="Ron Swanson">
      </div>
    </div>

    <div id="right">
      <div class="container">
        <img src="https://i.imgur.com/XKVRWMo.jpg" alt="Cold Morning">
      </div>
    </div>

    <div id="footer">
    <div class="controll">
        <div class="currentPicTitle">
          <h4>"Ron F***ing Swanson"</h4>
          <h4 id="rawnSwnson">Ron Swanson </h4>
        </div>
        <!-- <div class="divider"></div> -->
        <div class="currentPicVotes"></div>
        <div class="divider"></div>
        <div class="controllPanel">
          <button id="previous"><i class="fas fa-chevron-left"></i></button>
          <button id="fullScreen"><i class="fas fa-expand"></i></button>
          <button id="vote"><i class="fas fa-check"></i></button>
          <button id="info"><i class="fas fa-info"></i></button>
          <button id="next"><i class="fas fa-chevron-right"></i></button>
        </div>
        <!--add a fullscreen modal mode and use this button to close it posistioned on one of the top corners
        <i class="far fa-times-circle"></i>
        -->
    </div>
    <button><a href="logout.php" class="btn btn-danger"><i class="fas fa-power-off"></i></a></button>
    </div>



  </body>
</html>
