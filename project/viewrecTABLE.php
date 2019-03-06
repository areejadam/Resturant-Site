
<?php 
include_once "connection.php";
include_once "person.php";
include_once "database_class.php";
include_once "chief_class.php";

$data = new database ("localhost","root","","masterchief");


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="viewrecTABLE.css" type="text/css"/>
  <title>Recipes Table</title>
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
  <?php 
if ($_SESSION["pre_url"]=="home1.php" || $_SESSION["pre_url"]=="home_chief.php" || $_SESSION["pre_url"]=="home_admin.php" || $_SESSION["pre_url"]=="myhome.php"){
?>
</head>
<body>
<div class="table-title">
<h3>Recipes Data Table</h3>
</div>

<?php if ($_SESSION["type"]=="user" ): ?>

<form action ="feedbackpage.php">
<center>
<input type="submit" name="btn" value="Give feedback" >

<input type="submit" name="back" formaction="home1.php" value="<< Back" >
</form>
</center> 
<?php endif;?>
<?php if ($_SESSION["type"]=="chief"): ?>
  <left>
  <center>
  <form action ="home_chief.php">
<input type="submit" name="back" formaction="home_chief.php" value="<< Back" ;>
<input type="submit" name="update" formaction="update_rec.php" value="Update recipe" ;>

<input type="submit" name="delete" formaction="delete_rec.php" value="delete recipe >>" ;>
</form>
</form>
</left>
<?php endif; ?>
<?php if($_SESSION["type"]=="admin") : ?>
	<center>
<form >

<input type="submit" name="back" formaction="home_admin.php" value="<< Back" ;>
</form></center>
<?php endif; ?>
<?php if($_SESSION["type"]=="delivery") : ?>
  <center>
<form >

<input type="submit" name="back" formaction="deliveryMan_home.php" value="<< Back" ;>
</form></center>
<?php endif; ?>


<?php if($_SESSION["type"]=="visitor") : ?>
	<center>
<form >

<input type="submit" name="back" formaction="myhome.php" value="<< Back" ;>
</form></center>
<?php endif; ?>
<table class="table-fill">
<thead>
<tr>

<th class="text-left">Image</th>
<th class="text-left">Name</th>
<th class="text-left">Type</th>
<th class="text-left">Details</th>
<th class="text-left">Cost</th>
<th class="text-left">Date</th>
</tr>
</thead>

 <tbody class="table-hover">

 <?php 
 
 
$ch = new chief ();
$ch->view_recipe();




 $data->close();
?>

        
    </table>



    
 

    
 
  
  

</body>
</html>
<?php 
}else {
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
 
