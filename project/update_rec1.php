<?php
ini_set ('mysql.connection_timeout',300);
ini_set('default_scoket_timeout',300);

include_once "chief_class.php";
  $ch = new chief();
$ch1 = new database("localhost","root","","masterchief");

?>
<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> update recipe </title>
</head>
<div id="content">
    <h1>Update recipe</h1>

<body><h3>
<form action= "update_rec1.php" method="POST" >
<label> image :</label>
<?php echo '<img id="my" height="150" width="320" src="data:image;base64,'.$_SESSION['image_rec'].' "> '; ?>
<br>
 <input type="submit" name="editbtn7" value ="edit" />
 </form>

  <?php if (isset($_POST["editbtn7"])):?>
    <?php $_SESSION["coulum"]= "image";?>
    <label> new image :</label>
    <form action="update_rec1.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="image"/>
 <input type="submit" name="updatebtn1" value ="update" />
 </form>
 
<br>
<?php else: ?>

<br>
<form action= "update_rec1.php" method="POST">
<label> name :</label>
<?php echo $_SESSION["name_rec"] ?>
<br>

 <input type="submit" name="editbtn4" value ="edit" />
 </form>
  <?php if (isset($_POST["editbtn4"])):?>
<?php $_SESSION["coulum"]= "name";?>
    <label> new name :</label>
    <form action="update_rec1.php" method="POST">
    <input type="text" name="newname" value ="new name">
 <input type="submit" name="updatebtn" value ="update" />
</form>

<?php else: ?>
<br>
<form action= "update_rec1.php" method="POST">
<label> type :</label>
<?php echo $_SESSION["type_rec"] ?>
<br>

 <input type="submit" name="editbtn" value ="edit" />
 </form>
  <?php if (isset($_POST["editbtn"])):?>
    <?php $_SESSION["coulum"]= "type";?>
    <label> new name :</label>
    <form action="update_rec1.php" method="POST">
    <input type="text" name="newname" value ="newname">
 <input type="submit" name="updatebtn" value ="update" />
</form>

<?php else: ?>

<br>



<form action= "update_rec1.php" method="POST">
<label> Cost :</label>
<?php echo $_SESSION["cost_rec"]."$" ?>
<br>

 <input type="submit" name="editbtn2" value ="edit" />
 </form>
  <?php if (isset($_POST["editbtn2"])):?>
<?php $_SESSION["coulum"]= "cost";?>
    <label> new cost :</label>
    <form action="update_rec1.php" method="POST">
    <input type="text" name="newname" value ="new cost">
 <input type="submit" name="updatebtn" value ="update" />
</form>

<?php else: ?>

<br>


<form action= "update_rec1.php" method="POST">
<label> Details :</label>
<?php echo $_SESSION["details_rec"] ?>
<br>

 <input type="submit" name="editbtn3" value ="edit" />
 </form>
  <?php if (isset($_POST["editbtn3"])):?>
<?php $_SESSION["coulum"]= "details";?>
    <label> new details :</label>
    <form action="update_rec1.php" method="POST">
    <input type="text" name="newname" value ="new details">
 <input type="submit" name="updatebtn" value ="update" />
</form>


<?php else: ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<p class="indication"></p>
<?php if ($_SESSION["type"]=="user"):?>

<form action="home1.php" >
<h1>___________________</h1>

 <input type="submit" name="back2" value ="back" />
</form>
<?php endif; ?>

<?php if ($_SESSION["type"]=="chief"):?>

<form action="viewrecTABLE.php" >
<h1>__________________</h1>

 <input type="submit" name="back2" value ="back" />
</form>
<?php endif; ?>
<?php if ($_SESSION["type"]=="admin"):?>

<form action="home_admin.php" >
<h1>___________________</h1>

 <input type="submit" name="back2" value ="back" />
</form>
<?php endif; ?>

</body>
</html>
 
<?php
  if (isset($_POST["updatebtn"])){
 
 $ch = new chief ();


 if ($ch->update_myrecipe ()=="TRUE"){
 ?>

 <script>
alert('updated succ !');
window.location.href='update_rec1.php';
</script>";
<?php 

  }
else {
  ?>
  <script>
alert('enter another recipe name !');
window.location.href='update_rec1.php';
</script>";
<?php
}}
if (isset($_POST["updatebtn1"])){
  $ch1->update_pic();
}
if (isset($_POST["back2"])){
  require 'home_chief.php';
}?> 



