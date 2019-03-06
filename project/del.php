<!DOCTYPE>
  <?php 
include_once "delman.php";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "masterchief");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> Delete </title>
</head>
<div id="content">
    <h1>Delete Boy</h1>
<body>
<form action="del.php" method="POST">

<label>  boy's name </label>
<select name='name' >
  <?php  

  $sql="SELECT name from delivery_boys";
    $result = mysqli_query($conn, $sql);
echo "<option name >show</option>";
    //loop
   while($row = mysqli_fetch_assoc($result)) {

echo "<option name >".$row["name"]."</option>";

    }
    echo "</select>"."<br>"."<br>";
   ?> 
<input type="submit" value="delete" name="delete">
</form>
</body>
</html>

<?php 

$show2= new delivery_man();
$show2->delete_delivery_boys();
?>