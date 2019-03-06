

<?php 
include_once "user.php";
$conn = mysqli_connect("localhost","root","","masterchief");
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}?>

<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	
</head>
<body>
<h1>MAKE AN ORDER </h1>
<h1>__________________</h1>
<br>
<form method="post" action="view.php">


<select name="recipe" autofocus multipul>
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
<select name="quantity">
<option>meal number</option>
<?php for ($b=1;$b<=4;$b++) { ?>
<option><?php echo "$b"; ?></option>
<?php } ?>
</select>


<select name="size" >
<option >meal size</option>
<option>large</option>
<option>medium</option>
<option>small</option>
</select><br><br>

<label>Phone Number : </label>
<input type="number" name="phone" value="phonenumber">
<br><br>
<label>comment : </label>
<textarea rows="4" cols="50">write ur comment here</textarea>
<br><br><br>
<button name="btn">send </button>
</form>
</body>
</html>

<?php 
if (isset($_POST["btn"])){
	$make= new user ();
	$make->make_order();
}
?>


