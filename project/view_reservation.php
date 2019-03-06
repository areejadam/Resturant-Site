<?php 
include_once 'chief_class.php';
?>

<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> view reservation </title>
<?php  if ($_SESSION["pre_url"]=="home_chief.php" ){ ?>

</head>
<div id="content">
    <h1>Reservation</h1>
 <?php 
$ch = new chief ();
$ch->view_reservation();
 ?>
 

 </div>
 
 <form method="POST" action="home_chief.php">
 <input type="submit" value="<< Back" name="back">
  

</form>
<?php 
} else {
  ?>
  <img src="images/warning.png" alt="HTML5 Icon" style="width:128px;height:128" > <?php
  echo "<h1>Sorry u can't access this page ..</h1>";
  ?>
  <form action ="myhome.php">
    <input type="submit" class="btn btn-primary btn-lg" value="Go To Home Page" name="home">
  </form>
  <?php
}
?>