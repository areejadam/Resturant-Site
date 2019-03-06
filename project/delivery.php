<?php
include_once "admin_class.php";
include_once "database_class.php";
 ?>



<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="viewrecTABLE.css" type="text/css"/>
  <title>Users</title>
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>



<body>

<div class="table-title">
<center>
<h3>Users Records</h3>
<h4>___________________</h4>
</div>
</center>
<table class="table-fill">
<thead>

<tr>

<th class="text-left">username</th>
<th class="text-left">mail</th>
<th class="text-left">city</th>
<th class="text-left">address</th>
<th class="text-left">date</th>
<th class="text-left">password</th>
<th class="text-left">ID</th>
</tr>

  
 <?php 
$admin = new admin_class();
$admin->show_delivery();	
	?>
  
</table>



<center>
<h3> ____________________________________________</h3>


<form action="home_admin.php" method ="POST">
<input type="submit" name="" value="Done">
</form>


</center>

</body>
</head>
</html>


