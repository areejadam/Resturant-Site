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
  <?php 
if ($_SESSION["pre_url"]=="home_admin.php"){
?>
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
$admin->show_users();	
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


