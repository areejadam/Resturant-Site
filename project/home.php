<?php
include_once "person.php";
$reg = new person ();

?>



<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> welcome </title>
</head>
<div id="content">
    <h1>WELCOME !</h1>

    <?php  if ($_SESSION["pre_url"]=='login.php'){ ?>
	<?php if ($reg->register()) :?>

		<p><h3> ur register is succ >>  </h3> </p>
		<p> <?php echo " WELCOME " .$_SESSION["username"] ?>
		
 <form action="http://localhost/dashboard/sw2/home1.php" method="POST" />
 <input type="submit" value="GO TO HOME PAGE >>" name="home" />

<?php else : ?>


  <p> <h3> u are registered before .. please login >> </h3></p>
 <form action="http://localhost/dashboard/SW2/login.php" method="POST" />
 <input type="submit" value="login " name="login" />

</form>

<?php  endif ; ?>

<?php } else {
  ?>
  <img src="images/warning.png" alt="HTML5 Icon" style="width:128px;height:128" > <?php
  echo "<h1>Sorry u can't access this page ..</h1>";
  ?>
  <form action ="myhome.php">
    <input type="submit" value="Go To Home Page" name="home">
  </form>
  <?php
} ?>

</body>