<?php 
include_once "person.php";
include_once "connection.php";
class fesa {
function edit (){	
  $conn = new connection ("localhost","root","","masterchief");
  
$sql = "UPDATE users SET ".$_SESSION["coulum"]." ='".$_POST["newname"]."' WHERE mail='".$_SESSION["mail"]."'";
if ($conn -> queryy($sql) == TRUE) {
  
$res= "TRUE";

$new = $_SESSION["coulum"];
$_SESSION["$new"]= $_POST["newname"];

}
 else {
$res="false";
}

 
return $res ;}}

?>