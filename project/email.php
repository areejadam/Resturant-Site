<?php
include "mail.php";
include "person.php";
?>
<!DOCTYPE>
<html lang="en">
<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css" >
<head>
<title> mail </title>
<?php  if ($_SESSION["pre_url"]=="home1.php"){?>
</head>
<div id="content">
    <h1>Send Message</h1>

  <form action="mail.php" method="post">
    
    
      <label for="email" class="icon-user">TO :</label>
      <input type="email"   placeholder="Enter email" id ="to_textarea" name="to_textarea" required >
    <br><br>
      <label for="pwd">subject:</label>
      <input type="text"  required placeholder="Enter subject" name="subject" >
    
    <br><br>
      <label>write your massege</label>
      <br><br>
      <textarea type="text" name="msg" rows="7" col ="25"></textarea>
     
    
    <br><br>
            <p class="indication"></p>
                    <input type="submit"  name="send" value=" Send " />

  </form>
  </div>
<form action="home1.php">
<input type="submit" value="<< Back" name="">
  

</form>

</body><?php }
else {
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