<?php
include 'delman.php';
?>

<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> reschdule </title>
</head>
<div id="content">
    <h1>Reschdule</h1>
    
    <form action="reschdule.php" method="POST">

  <label><h3>The Boy's name</h3> </label>
  <select name="name" >

<?php
    $conn = new database("localhost","root","","masterchief");
$result= $conn->select ("delivery_boys");
 
 ?>
   <option>select Name</option>
   <?php while($row = mysqli_fetch_assoc($result)) {?>

<option> <?php echo $row["name"] ?></option> 

    <?php } ?>
   </select> 
   
   <br><br>
     <label> <h3> day </h3> </label>
     
     </select>


<select name="day" required>
<option >saturday</option>
<option>sunday</option>
<option>monday</option>
<option>tuesday</option>
<option>wednesday</option>
<option>thursday</option>
<option>friday</option>

</select><br><br>


	<input type="submit" name="btn" value="done">
</form>

</div>

<form action="deliveryMan_home.php" method="POST">

	<input type="submit" name="btn2" value="<< Back">
</form> 

<?php 
if (isset($_POST["btn"])){
	$re = new delivery_man();
	$re->reschdule();
}
?>