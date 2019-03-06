<?php
include_once "admin_class.php";
include_once "database_class.php";
 ?>



<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="viewrecTABLE.css" type="text/css"/>
  <title>Chief Info</title>
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
 
</head>



<body>
<!--
<div class="table-title">
<h3>Your Complains</h3>
<h4>___________________________________</h4>
</div>
-->
<div class="table-title">
<h3>Records of Chiefs </h3>
<h3>________________</h3>

<table class="table-fill">
<thead>

<tr>
<th class="text-left">ID</th>
<th class="text-left">Name</th>
<th class="text-left">E-Mail</th>
<th class="text-left">City</th>
<th class="text-left">address</th>
<th class="text-left">Date</th>
<th class="text-left">Password</th>

</tr>

  
 <?php 
$inf = new admin_class();
$inf->chiefinfo();	
	?>
  
</table>



<center>
<h3> ____________________________________________</h3>


<form action="home_admin.php" method ="POST">
<input type="submit" name="" class="btn btn-primary btn-lg" value="Back to Home">
</form>


</center>

</body>
</head>
</html>


