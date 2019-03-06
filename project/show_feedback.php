<?php
include_once "chief_class.php";
include_once "database_class.php";

 ?>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="viewrecTABLE.css" type="text/css"/>
  <title>Recipes Table</title>
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>

<title>Feedbacks</title>
<?php  if ($_SESSION["pre_url"]=="home_chief.php" ){ ?>

<body>
<div class="table-title">
<h3>FeedBacks</h3>
<h4>__________</h4>

</div>

<table class="table-fill">
<thead>
<tr>

<th class="text-left">Details</th>


  </tr>

  
 <?php
 
 
$ch = new chief();
$ch->show_feedbacks();



	
	?>
  
</table>
<center>
<h3> ____________________________________________</h3>
<form action="home_chief.php" method ="POST">
<input type="submit" name="btnn" value="back">
</form>


</center>

</body>
</head>
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

