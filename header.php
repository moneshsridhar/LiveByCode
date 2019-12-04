<?php
session_start();
?>
	<!DOCTYPE HTML>
		<html>
			<title>LBC | Blog</title>
			<meta name="viewport" content="width=device-width",initial-scale=1>
<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
<script src='tinymce/tinymce.min.js'></script>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">

            <a href="chatbot/chatbot.html" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> livebycode@googlegroups.com</a> 
          </div>
          
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="mainindex.php" class="d-block">
              <img src="images/logo.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="mainindex.php" class="nav-link text-left">Home</a>
                </li>
                  <a href="about.html" class="nav-link text-left">About Us</a>
                <li>
                  <a href="indexblog.php" class="nav-link text-left">Blog</a>
                </li>
                <li>
                  <a href="game.html" class="nav-link text-left">Game</a>
                </li>
                <li>
                  <a href="Compiler/frame.html" class="nav-link text-left">Compiler</a>
                </li>
                <li>
                    <a href="contact.html" class="nav-link text-left">Contact</a>
                  </li>
              </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="https://chat.whatsapp.com/BR3KAAwy7DI7ZCWoVvAPl6"><span class="icon-whatsapp"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>

          </div>
         
        </div>
      </div>

    </header>

<br><br><br><br>
<div class="w3-bar w3-border">
<a href="indexblog.php" class="w3-bar-item w3-button w3-pale-green">Home</a> 
<?php 
if($_SESSION['username' ]) {
echo "<a href='loginblog.php' class='w3-bar-item w3-btn'>New Post</a>";
//echo "<a href='admin.php' class='w3-bar-item w3-btn'>Admin Panel</a>";
} 
else {
echo "<a href='login.php' class='w3-bar-item w3-pale-red' >Login</a>";
} 
?>
</div>
<br>
	<form action="search.php" method ="GET" class="w3-container">
	<input type ="text" name="q" class="w3-input w3-border" placeholder="Search for anything" required>
		<input type="submit" class="w3-btn w3-green" value="Search">
			</form>