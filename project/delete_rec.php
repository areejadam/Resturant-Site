 <?php
include_once "chief_class.php";
$ch = new chief ();

$data = new database("localhost","root","","masterchief");

?>

<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> delete Recipe </title>
</head>
<div id="content">
    <h1>Delete Recipe </h1>

    <form method="POST" action="delete_rec.php" >
        <p>
        <label for="Type" class="icon-user"> Recipe's Name:</label>
                <span class="required">*</span>
                <select name="recipe" autofocus multipul required>
<optgroup label='foods'> 
<?php

    $result = $data->select("myrecipe")?>
    //loop
   <option>select foods</option>
   <?php while($row = mysqli_fetch_assoc($result)) {?>

<option> <?php echo $row["name"] ?></option> 

    <?php } ?>
   </select> 


    </optgroup>
                <p class="indication"></p>

        <input type="submit" value=" Delete " />
            

</p>
</form>
 <?php 
if (isset($_POST["recipe"])){
	$ch->delete_recipe($_POST["recipe"]);
}

 ?>