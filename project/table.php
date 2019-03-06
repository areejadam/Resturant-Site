<?php 
include_once "delman.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="viewrecTABLE.css" type="text/css"/>
  <title>Recipes Table</title>
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">

</head>
<body>
<div class="table-title">
<h3>schedule</h3>
<form action="reschdule.php">
<input type="submit" name="btn"   formaction="deliveryMan_home.php" value="<< Back">
	<input type="submit" name="btn"   value="Reschdule">
		

</form>
</div>
<table class="table-fill">
<thead>
<tr>

<th class="text-left">saturday</th>
<th class="text-left">sunday</th>
<th class="text-left">monday</th>
<th class="text-left">tuesday</th>
<th class="text-left">wednesday</th>
<th class="text-left">thursday</th>
<th class="text-left">Friday</th>

</tr>
</thead>

 <tbody class="table-hover">
 <?php
 $del = new delivery_man();
 $del->view_table();
 ?>