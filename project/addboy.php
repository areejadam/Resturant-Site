<?php 
include_once 'delman.php';
?>
<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> add boy </title>
</head>
<div id="content">
    <h1> ADD Boy </h1>



<form action="addboy.php" method="POST">

<label><b>deliver boy name:</b></label>
  <input type="text" name="name"  placeholder="Enter name" required>
<br><br>
<label><b>deliver boy phone:</b></label>
  <input type="tel" name="telephone"  placeholder="Enter phone" required>
<br><br>

<label><b>work Day :</b></label>

<select name="day" required >
<option >saturday</option>
<option>sunday</option>
<option>monday</option>
<option>tuesday</option>
<option>wednesday</option>
<option>thursday</option>
<option>friday</option>



</select><br><br>
<br><br>   
<input type="submit" value="save" name="save">

</form>
</div>

<form method ="post" action="home_chief.php">
<input type="submit" value=" << Back" name="back">
</form>
</html>

<?php
if (isset($_POST['save'])){ 
$show1= new delivery_man();
$show1 ->add_delivery_boys();}
?>