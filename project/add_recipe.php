<?php
ini_set ('mysql.connection_timeout',300);
ini_set('default_scoket_timeout',300);
include_once 'chief_class.php';
$add = new chief ();
?>
<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> ADD recipe </title>
<?php 
if ($_SESSION["pre_url"]=="home_chief.php"){
?>
</head>
<div id="content">
    <h1>ADD Recipe</h1>
<form method="post" action ="add_recipe.php" enctype="multipart/form-data">
<br/>

<input type="file" name="image"/>
<br/><br/>
<label><b>name</b></label>
 <input type="txt" placeholder="Enter name" name="name"  required="">
<br><br>
<label><b>type</b></label>
 <input type="txt" placeholder="Enter type" name="type" required="">
<br><br>
<label><b>cost</b></label>
 <input type="number" placeholder="Enter cost" name="cost" required="" >
<br><br>
<label><b>details</b></label>
<textarea name="details"></textarea>
<br><br>
<input type="submit" name="back" formaction="home_chief.php" value="<< back " />
<input type="submit" name="sumit" value="upload"/>


</form>
</div>
<form action="home_chief.php">
<input type="submit" name="back"  value="<< back " />
</form>
<?php
$add->add_recipes()
?>
</body>
</html>
    <?php 
if (isset($_POST["btn"])){
	$make= new user ();
	$make->make_order();
}} else {
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
