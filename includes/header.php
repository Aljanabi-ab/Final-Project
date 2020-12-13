<?php include 'avalanche-config.php'?>
<!DOCTYPE html>
<html lang=''>
<head>

<title>Avalanche Solutions</title>
<title><?=$title?></title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex,nofollow" />

<link rel="stylesheet" type="text/css" href="css/stylesheet1.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" type="text/css" href="css/nav.css">
<link rel="stylesheet" type="text/css" href="css/gallery.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body>


<!-- START WRAPPER -->
<main class="wrapper">
<div class="bg-img">

  <div class="container">

  <nav id='menu'>
  <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="ourteam.php">Our Team</a></li>
    <li><a class='dropdown-arrow' href="services.php">Services</a>
      <ul class='sub-menus'>
        <li><a href="securitysolutions.php">Security Solutions</a></li>
        <li><a href="digitalfabrication.php">Digital Fabrication</a></li>
        <li><a href="automation.php">Automation Solutions</a></li>
        <li><a href="technicalins.php">Technical Installation </a></li>
        <li><a href="productdesign.php">Product Design and Prototyping</a></li>
      </ul>
    </li>
    
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="contact.php">Contact Us</a></li>
  </ul>
</nav>
<div class="h2"> <?=$title?></div>
</div>

</div>