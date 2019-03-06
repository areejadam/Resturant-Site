<?php 
include ("admin_class.php");
?>
<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> Records </title>
</head>
<div id="content">
    <h1> Records </h1>

      <p class="indication"></p>

    <form method="POST" action="delete.php" >


        <input type="submit" name="chiefs" value=" Chiefs " />
       
</form>
   
        <p class="indication"></p>

    <form method="POST" action="delete.php" >

        <input type="submit"  name ="users" value=" Users " />
       
</form>
       
        
        <p class="indication"></p>

    <form method="POST" action="delete.php" >

        <input type="submit" name="del" value=" Delivery Boss" />
       


		
    </form>
</div>




</form>
</body>
</html>


<?php 

$dele = new admin_class ();


if (isset($_POST["chiefs"])){

$dele ->delete("chief1");?>

 <script>
alert('deleted succ  ..  !');
window.location.href='home_admin.php';
</script>
<?php
}
if(isset($_POST["users"])){
  $dele ->delete("users");
?>
 <script>
alert('deleted succ  ..  !');
window.location.href='home_admin.php';
</script>;
<?php
}
 if (isset($_POST["del"])){
  $dele ->delete("deliveryboss");
  ?>


 <script>
alert('deleted succ  ..  !');
window.location.href='home_admin.php';
</script> <?php  }



?>