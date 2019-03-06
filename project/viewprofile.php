<?php
include_once "person.php";
include_once "connection.php";
include_once "user.php"
?>
<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> view profile </title>
<?php 
if ($_SESSION["pre_url"]=="home1.php" || $_SESSION["pre_url"]=="home_chief.php" || $_SESSION["pre_url"]=="home_admin.php" || $_SESSION["pre_url"]=="home_delivery.php"){
?>
</head>
<div id="content">
    <h1>my account</h1>
<body><h3>
<form action= "viewprofile.php" method="POST">
<label> mail :</label>
<?php echo $_SESSION["mail"] ?>
<br>
 <input type="submit" name="editbtn7" value ="edit" />
 </form>
  <?php if (isset($_POST["editbtn7"])):?>
  	<?php $_SESSION["coulum"]= "mail";?>
  	<label> new mail :</label>
    <form action="viewprofile.php" method="POST">
  	<input type="email"  name="newname" value ="mail">
 <input type="submit" name="updatebtn" value ="update" />
</form>
 
<br>
<?php else: ?>
<br>
<form action= "viewprofile.php" method="POST">
<label> name :</label>
<?php echo $_SESSION["username"] ?>
<br>

 <input type="submit" name="editbtn" value ="edit" />
 </form>
  <?php if (isset($_POST["editbtn"])):?>
  	<?php $_SESSION["coulum"]= "username";?>
  	<label> new name :</label>
    <form action="viewprofile.php" method="POST">
  	<input type="text" name="newname" value ="newname">
 <input type="submit" name="updatebtn" value ="update" />
</form>

<?php else: ?>

<br>



<form action= "viewprofile.php" method="POST">
<label> password :</label>
<?php echo $_SESSION["password"] ?>
<br>

 <input type="submit" name="editbtn2" value ="edit" />
 </form>
  <?php if (isset($_POST["editbtn2"])):?>
<?php $_SESSION["coulum"]= "password";?>
  	<label> new password :</label>
    <form action="viewprofile.php" method="POST">
  	<input type="text" name="newname" value ="new password">
 <input type="submit" name="updatebtn" value ="update" />
</form>

<?php else: ?>

<br>


<form action= "viewprofile.php" method="POST">
<label> Address :</label>
<?php echo $_SESSION["address"] ?>
<br>

 <input type="submit" name="editbtn3" value ="edit" />
 </form>
  <?php if (isset($_POST["editbtn3"])):?>
<?php $_SESSION["coulum"]= "address";?>
  	<label> new address :</label>
    <form action="viewprofile.php" method="POST">
  	<input type="text" name="newname" value ="new address">
 <input type="submit" name="updatebtn" value ="update" />
</form>

<?php else: ?>

<br>
<form action= "viewprofile.php" method="POST">
<label> city :</label>
<?php echo $_SESSION["city"] ?>
<br>

 <input type="submit" name="editbtn4" value ="edit" />
 </form>
  <?php if (isset($_POST["editbtn4"])):?>
<?php $_SESSION["coulum"]= "city";?>
  	<label> new city :</label>
    <form action="viewprofile.php" method="POST">
  	<input type="text" name="newname" value ="new city">
 <input type="submit" name="updatebtn" value ="update" />
</form>

<?php else: ?>

<br>
<form action= "viewprofile.php" method="POST">
<label> date :</label>
<?php echo $_SESSION["date"] ?>
<br>

 <input type="submit" name="editbtn5" value ="edit" />
 </form>
  <?php if (isset($_POST["editbtn5"])):?>
<?php $_SESSION["coulum"]= "date";?>
  	<label> new password :</label>
    <form action="viewprofile.php" method="POST">
  	<input type="date" name="newname" value ="newdate">
 <input type="submit" name="updatebtn" value ="update" />
</form>
<?php else: ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php if ($_SESSION["type"]=="user"):?>

<form action="home1.php" >
<h1>________________</h1>

 <input type="submit" name="back2" value ="back" />
</form>
<?php endif; ?>

<?php if ($_SESSION["type"]=="chief"):?>

<form action="home_chief.php" >
<h1>_______________</h1>

 <input type="submit" name="back2" value ="back" />
</form>
<?php endif; ?>
<?php if ($_SESSION["type"]=="admin"):?>

<form action="home_admin.php" >
<h1>________________</h1>

 <input type="submit" name="back2" value ="back" />
</form>
<?php endif; ?>
<?php if ($_SESSION["type"]=="delivery"):?>

<form action="deliveryMan_home.php" >
<h1>________________</h1>

 <input type="submit" name="back2" value ="back" />
</form>
<?php endif; ?>

</body>
</html>
 
<?php
  if (isset($_POST["updatebtn"])){
 
 $ed = new user ();
 if ($ed->edit_my_account ()=="TRUE"){
 ?>

 <script>
alert('updated succ !');
window.location.href='viewprofile.php';
</script>";
<?php 

  }
else {
	?>
	<script>
alert('please write another e.mail!');
window.location.href='viewprofile.php';
</script>";
<?php
}}
if (isset($_POST["back2"])){
	require 'home1.php';
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
