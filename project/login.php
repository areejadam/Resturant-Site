 <?php
include_once "person.php";
$log = new person ();


?>

<DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> Login </title>
</head>
<div id="content">
    <h1>Login</h1>
    <?php 
  if ($_SESSION["pre_url"]=="login_as.php" || $_SESSION["pre_url"]=="login.php"){
    $_SESSION["pre_url"]="login.php";

    ?>

    <form method="POST" action="home_login.php" >
        <p>
            
            <?php if ($_SESSION["type"]=="user"):?>
            <label for="Type" class="icon-user"> Mail:
                <span class="required">*</span>
            </label>
            <input type="email" name="mail" id="username" required="required" />
            <?php endif;?>
            <?php if(isset($_POST["admin"])):?>
             <label for="Type" class="icon-user"> ID :
                <span class="required">*</span>
            </label>
              <input type="text" name="id" id="username" required="required" /> 
              <?php endif; ?>
               <?php if(isset($_POST["chief"])):?>
             <label for="Type" class="icon-user"> ID :
                <span class="required">*</span>
            </label>
              <input type="text" name="id" id="username" required="required" /> 
              <?php endif; ?>
                <?php if(isset($_POST["delivery"])):?>
             <label for="Type" class="icon-user"> ID :
                <span class="required">*</span>
            </label>
              <input type="text" name="id" id="username" required="required" /> 
              <?php endif; ?>

        </p>

        <p>
            <label for="pass" class="icon-envelope"> Password:
                <span class="required">*</span>
            </label>
            <input type="password" name="password" id="Name" required="required" />
        </p> 

		<br>
   
        <p class="indication"></p>

        <input type="submit" value=" Login " />

		<div id="log"> <p> Don't have an account ? <a href="http://localhost/dashboard/SW2/reg.html" > Sign up </a></p>  </div>
		
    </form>
</div>




</form>
</body>
</html>
<?php 
}else {
  ?>
  <img src="images/warning.png" alt="HTML5 Icon" style="width:128px;height:128" > <?php
  echo "<h1>Sorry u can't access this page ..</h1>";
  ?>
  <form action ="myhome.php">
    <input type="submit" value="Go To Home Page" name="home">
  </form>
  <?php
}
?>
