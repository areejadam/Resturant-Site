<?php 
include_once "connection.php";
include_once "person.php";
include_once "database_class.php";
include_once "chief_class.php";

$data = new database ("localhost","root","","masterchief");


?>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="viewrecTABLE.css" type="text/css"/>
  <title>Recipes Table</title>
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
  <?php  if ($_SESSION["pre_url"]=="home_chief.php" ){ ?>

</head>

<body>
<div class="table-title">
<center>
<h3>Orders</h3>
<h4>__________</h4>
</center>
<form action ="home_chief.php">
<input type="submit" name="back" formaction="home_chief.php" value="<< Back" style="display: left; margin: 0 auto ";>
</form>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Date</th>
<th class="text-left">recipe</th>
<th class="text-left">Size</th>
<th class="text-left">Quantity</th>
<th class="text-left">address</th>
<th class="text-left">phone</th>

<th class="text-left">comment</th>


</tr>
</thead>

<tbody class="table-hover">
  
  <?php
  $ch = new chief ();
  $ch->show_order();
  $data->close();
	
	?>
  
</table>

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

