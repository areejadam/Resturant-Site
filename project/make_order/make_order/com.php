
<?php
include_once "complain.php";
include_once "user.php";

?>
<!DOCTYPE html>
<html>
<body>

<form action="com.php" method="post" >
  reason of your complain:<br>
  <input type="text" name="reason" required>
  <br>
  subject:<br>
  <input type="text" name="subject" required>
  <br><br>
  your complain :<br>
  <textarea rows="7" cols="30" name = details ></textarea> 
  <br><br>
  <button>send</button>
</form>

</body>
</html>

<?php 
 $com = new user ();
 $com-> make_complain();
?>