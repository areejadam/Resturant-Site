<?php 
include_once 'user.php';
?>
<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> Reservation  </title>
<?php 
if ($_SESSION["pre_url"]=="home1.php" ){
?>
</head>
<div id="content">
    <h1>Reservation</h1>
 <form method="POST" action="reservation.php">
  <label for="Type" class="icon-user"> Title :
                <span class="required">*</span>
            </label>
              <input type="text" name="title" id="username" required="required" /> 
              <br><br>

              <label>Reserve for : </label>
              </select>

<select name="type" required >
<option >wedding</option>
<option>birthday party</option>
<option>engagment</option>
<option>others</option>
</select><br><br>

<label>appointment :  </label>
<input type="date" required name="date">
<br><br>
<input type="submit" value="confirm" name="confirm">

 </form>
 </div>
<form method="POST" action="home1.php">
 <input type="submit"  value="<< Back " name="cancel">
 </form>
</html>

 <?php 
if (isset($_POST["confirm"])){
	$user = new user();
	$user->make_reservation();
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