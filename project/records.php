<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> Records </title>
<?php 
include 'person.php';
if ($_SESSION["pre_url"]=="home_admin.php"){
?>
</head>

<div id="content">
    <h1> Records </h1>

      <p class="indication"></p>

    <form method="POST" action="records.php" >


        <input type="submit" name="chiefs" value=" Chiefs " />
       
</form>
   
        <p class="indication"></p>

    <form method="POST" action="records.php" >

        <input type="submit"  name ="users" value=" Users " />
       
</form>
       
        
        <p class="indication"></p>

    <form method="POST" action="records.php" >

        <input type="submit" name="del" value=" Delivery Boss" />
       


		
    </form>
</div>


<form action="home_admin.php" >
  <input type="submit" name="btnn" value="Back">
</form>

</form>
</body>
</html>


<?php 
if (isset($_POST["chiefs"])){
  header('location: chief_info.php');
}
if(isset($_POST["users"])){
  header('location: user_info.php');
}
 if (isset($_POST["del"])){
  header('location: delivery.php');
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