<?php
include_once "person.php";
include_once "connection.php";

?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Food &amp; my account </title>
	
</head>
<body>
<h1> Personal information </h1>
<h1>________________________________</h1>




<h3><?php echo " username :  ".$_SESSION["name"] ?> 
<form action="myaccount.php" method="POST">	     
  <input type="submit" name = "editname" value=" edit" /> </form>
  </h3>
<?php if (isset($_POST['editname'])): ?>
<input type="text" name="editname" value="new name ">
<form action="myaccount.php" method="POST">	     
  <input type="submit" name = "update" value=" edit" /> </form>
  <?php if (isset($_POST['update'])): ?>
  	<?php update ();?>
  <?php else : ?>  	<h3>eded</h3>

  <?php endif; ?>
<?php else : ?>

<h3><?php echo " mail :   ".$_SESSION["mail"] ?><a href=""> edit</a> </h3>
<h3><?php echo " city :   ".$_SESSION["city"] ?><a href=""> edit</a> </h3>
<h3><?php echo " date :   ".$_SESSION["date"] ?><a href=""> edit</a> </h3>
<h3><?php echo " address  :".$_SESSION["address"] ?><a href="">		edit</a> </h3>

<br><br>
<form = action= "home1.php">
<button  type="Back to homepage"><< Back to homepage</button>
<?php endif ?>
<?php 
if (isset($_POST['update'])){
$con=mysqli_connect("localhost","root","","masterchief");
$mysql="UPDATE users
SET name='".$_POST["editname"]."'
WHERE name='".$_SESSION["mail"]."'";


}

?>