<?php
include_once "delman.php";
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
<th class="text-left">phone number</th>
<th class="text-left">appointment</th>

</tr>
 <?php 
$de = new delivery_man();
$de->view_delivery_boys();
 ?>
 </table>



<center>
<h3> ____________________________________________</h3>


<form action="deliveryMan_home.php" method ="POST">
<input type="submit" name="" value="Done">
</form>


</center>

</body>
</head>
</html>