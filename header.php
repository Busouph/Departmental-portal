<?php 

// session_start();
session_start();
// include('includes/config.php');
// error_reporting(0);
// if(strlen($_SESSION['Logedin'])==0)
//     {   
// header('location:index.php');
// }
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/news.css">
  <title>Nacoss Zamsut</title>


</head>
<body>
  <div class="main-container">
    <div class="header">
      <img src="./img/zamsut.png" alt="" style="width:120px; height:120px; margin-left:5px;">
      <h1 style="margin-left:20%; margin-top:-9%; margin-bottom: 5%;">COMPUTER SCIENCE DEPARTMENT - ZAMSUT</h1>
      <div id="nav" class="nav-ber">
      <?php 
      error_reporting(0);
      // if(strlen($_SESSION['login'])==0)
        if(strlen($_SESSION['Logedin'])==0){
          echo'
          <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="login.php">Login</a></li>
     </ul>
          ';
        // }elseif($_SESSION['logedin']==true){
        }elseif(strlen($_SESSION['Logedin'])==true){
        // }elseif($_SESSION['logedin']==true){
          echo'
          <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="logout.php">Logout</a></li>
          </ul>';
        }

      ?>
      </div>
      <img src="./img/zamsut.png" alt="" style="width:120px; height:120px;float:right; margin-top:-9%; margin-right:10px;">
    </div>