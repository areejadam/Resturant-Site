<?php
include_once "admin_class.php";
include_once "database_class.php";
 ?>



<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="viewrecTABLE.css" type="text/css"/>
  <title>View Orders</title>
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
  <?php 
if ($_SESSION["pre_url"]=="home_admin.php"){
?>
</head>

<!-- <title>View Complains</title> -->

<body>

<div class="table-title">
<h3>Orders</h3>
<h4>___________________________________</h4>
</div>

<table class="table-fill">
<thead>

<tr>
<th class="text-left">title</th>
<th class="text-left">Date</th>
<th class="text-left">size</th>
<th class="text-left">address</th>
<th class="text-left">quantity</th>
<th class="text-left">time</th>
<th class="text-left">phone</th>
<th class="text-left">name</th>
</tr>

  
 <?php 
$admin = new admin_class();
$admin->show_orders();	
	?>
  
</table>



<center>
<h3> ____________________________________________</h3>


<form action="home_admin.html" method ="POST">
<input type="submit" name="" value="Done">
<input type="submit" name="delete" formaction="show_orders.php" value="delete all">
</form>


</center>

</body>
</head>
</html>


<?php 
if (isset($_POST["delete"])){

	$data = new database("localhost","root","","masterchief");
	$data->delete ("order1");
	?>
	<script>
alert(' all orders is deleted ..  !');
window.location.href='home_admin.php';
</script>


<?php

}

?>
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