<?php
include_once "user.php" ;
?>
<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> feedback page </title>
<?php 
if ($_SESSION["pre_url"]=="home1.php" ){
?>
</head>
<div id="content">
    <h1>FeedBacks</h1>


<form action="feedbackpage.php" method="POST">

<table class="table-fill">
<thead>
<tr>


<textarea rows="15" cols="30" name="details" required ></textarea> 
<br>
<br>
<input type="submit" name = "btn" value="send" >

</form>
</div>
</tr></thead></table></form></div>

<form action="home1.php">
<input type="submit" value="<< Back " name="">
	

</form>
</body>
</html>

<?php
$fed = new user() ;
$fed -> give_feedback() ;

?>
<?php 
if (isset($_POST["btn"])){
	?>
	<script>
alert(' ur feedback is record succ !');
window.location.href='home1.php';
</script>";
<?php
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