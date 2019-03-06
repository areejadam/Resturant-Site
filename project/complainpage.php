
<?php
include_once 'delman.php';

?>
<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> compliment </title>
<?php  if ($_SESSION["pre_url"]=="home1.php"){ ?>

</head>
<div id="content">
    <h1>Make complain</h1>


<form action="complainpage.php" method="POST" >
  reason of your complain:<br>
  <input type="text" name="reason" required>
  <br>
  subject:<br>
  <input type="text" name="subject" required>
  <br><br>
  your complain :<br>
  <textarea rows="7" cols="30" name = details ></textarea> 
  <br><br>
  <p class="indication"></p>
        <input type="submit" name="btn" value=" Send " />
</form>
</div>
</body>


<?php 
if ($_SESSION["type"]=="user"){
  ?> <form action="home1.php">
    <input type="submit" name="" value="<< Back">
  </form> <?php
}
if ($_SESSION["type"]=="delivery"){
  ?> <form action="deliveryMan_home.php">
    <input type="submit" name="" value="<< Back">
  </form> <?php
}

if(isset($_POST["btn"])){
if ($_SESSION["type"]=="user"){

 $com = new user ();
 $com-> make_complain();}

 if($_SESSION["type"]=="delivery"){
   $comm = new delivery_man ();
 $comm-> make_complain();
 }}}
 else {
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