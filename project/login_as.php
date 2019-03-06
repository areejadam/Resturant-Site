<?php 
include_once "person.php";

?>

<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> Login </title>
</head>
<div id="content">
<?php 
  if($_SESSION["pre_url"]=="myhome.php"|| $_SESSION["pre_url"]=="login_as.php" || $_SESSION["pre_url"]=="login.php"){
    $_SESSION["pre_url"]="login_as.php"?>
    <h1>Login</h1>

      <p class="indication"></p>

    <form method="POST" action="login_as.php" >


        <input type="submit" name="admin" value=" Admin " />
       
</form>
   
        <p class="indication"></p>

    <form method="POST" action="login_as.php" >

        <input type="submit"  name ="user" value=" user " />
       
</form>

<p class="indication"></p>

    <form method="POST" action="login_as.php" >


        <input type="submit" name="delivery" value=" Delivery Boss " />
       
</form>
       
        
        <p class="indication"></p>

    <form method="POST" action="login_as.php" >

        <input type="submit" name="chief" value=" chief " />
       

		<div id="log"> <p> Don't have an account ? <a href="http://localhost/dashboard/SW2/reg.html" > Sign up </a></p>  </div>
		
    </form>
</div>




</form>

<?php 
  $user = new person ();

if (isset($_POST["user"])){
  $user-> login_as("user");
}
if (isset($_POST["chief"])){
  $user-> login_as("chief");
}
if (isset($_POST["admin"])){
  $user-> login_as("admin");
}
if (isset($_POST["delivery"])){
  $user-> login_as("delivery");
}}else {
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
