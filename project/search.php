<?php include_once "user.php";
include_once "person.php";
?>

<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> Search </title>
<?php 
if ($_SESSION["pre_url"]=="home1.php" || $_SESSION["pre_url"]=="home_chief.php" || $_SESSION["pre_url"]=="home_admin.php"){
?>
</head>
<body>
<div id="content">

    <h1>Recipe </h1>
<?php
$user=new user();
$user->search_recipe();?>
 

<form action="search_as.php" >
	<input type="submit" name="btnn" value="Back">
</form>
</body>

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