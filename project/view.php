

<?php 
include_once "user.php";
$conn = mysqli_connect("localhost","root","","masterchief");
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}?>

<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> make order </title>

<?php  if ($_SESSION["pre_url"]=="home1.php" ){ ?>
</head>
<div id="content">
    <h1>Make an Order </h1>
<br>
<form method="post" action="view.php">


<select name="recipe" autofocus multipul required>
<optgroup label='foods'> 
<?php
    $sql="SELECT name from myrecipe";
    $result = mysqli_query($conn, $sql); ?>
    //loop
   <option>select foods</option>
   <?php while($row = mysqli_fetch_assoc($result)) {?>

<option> <?php echo $row["name"] ?></option> 

    <?php } ?>
   </select> 


    </optgroup>
<select name="quantity" required>
<option>meal number</option>
<?php for ($b=1;$b<=4;$b++) { ?>
<option><?php echo "$b"; ?></option>
<?php } ?>
</select>


<select name="size" required >
<option >meal size</option>
<option>large</option>
<option>medium</option>
<option>small</option>
</select><br><br>

<label>Phone Number : </label>
<input type="number" name="phone" value="phonenumber" required>
<br><br>
<label>comment : </label>
<textarea rows="4" cols="50" name="comment">write ur comment here</textarea>
<br><br><br>
<input type="submit" name="btn">
</form>

</div>
<form action = "home1.php">
  <input type="submit" name="Back" value="<< Back">
</form>
</body>
</html>

<?php 
if (isset($_POST["btn"])){
	$make= new user ();
	$make->make_order();
}} else {
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


