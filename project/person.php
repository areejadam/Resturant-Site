<?php
session_start();
include_once "connection.php";
include_once "editpro.php";
include_once "masterchief_class.php";

class person {
public $name ;
public $city ;
public $address;
public $mail ;
public $snn ;
public $number ;
public $password ;
public $birthdate ;

function logout (){
	
	
	
	if (isset($_POST['logout'])) {
		unset($_SESSION['username']);
	    unset($_SESSION['password']);
	    unset($_SESSION['address']);
	    unset($_SESSION['mail']);
		unset($_SESSION['date']);
 		unset($_SESSION['price']);
 		unset($_SESSION['city']);




		session_unset();
		session_destroy();
		header("Location: myhome.php");
		exit;
	}
}

public function login_as ($type){

    $_SESSION["type"]=$type;
    require "login.php";




}

public function register (){
	$val = new masterchief();
	
	if(isset($_POST['signupbtn'])){
	$result=$val->full($_POST["name"],$_POST["mail"],$_POST["city"],$_POST["address"],$_POST["password"]);
	if ($result=="true"){
  $conn = new connection ("localhost","root","","masterchief");


	$name = $_POST ["name"];
	$mail = $_POST ["mail"];
	$city = $_POST ["city"];
	$address = $_POST ["address"];
	$date = $_POST ["date"];
	$password = $_POST ["password"];
$_SESSION["username"] = $name;
$_SESSION["mail"]=$mail;
$_SESSION["city"]=$city;
$_SESSION["address"]=$address ;
$_SESSION["password"]=$password;
$mySql = "INSERT INTO users ( username , mail , city , address , date , password ) VALUES ('$name','$mail','$city','$address','$date','$password')";

if ($conn -> queryy($mySql) == TRUE) {
  
return TRUE;
}
 else {
return false ;
}
}

else {
	?>

	<script>
alert('please fill the requirement correctly !');
window.location.href='reg.html';
</script>

	<?php 
}

}else {
    header("Location: myhome.php");
}
}


public function login ()
{  if (isset($_POST["submit"])){

 $conn = new connection ("localhost","root","","masterchief");



$mySql="SELECT* FROM users WHERE mail='".$_POST["mail"]."' AND password='".$_POST["password"]."'";
if ($conn->query($mySql)){
	require 'reg.php';

} else{ 
require 'login_Form.php';
}

}


}}

?>