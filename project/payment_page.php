

<?php 
include_once "admin_class.php";
include_once "database_class.php";

?>
<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> Login </title>
</head>
<div id="content">
    <h1>Pay The Rent </h1>
    
    
<?php 
    $admin = new admin_class();
$admin->pay_the_rent();
    ?>
   
    

    <form method="POST" action="payment.php">
    	<input type="submit" name="pay" value="Pay"> 
    	<br><br>
    	    	<input type="submit" name="back" formaction="home_admin.php" value="Back">

    </form>
