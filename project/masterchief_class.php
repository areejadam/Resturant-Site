<?php 
include_once ("database_class.php");
class masterchief{
 public function check_deadline (){
$date2 = date("Y-m-d H:i:s.u", strtotime(" +3 months"));
$data= new database ("localhost","root","","masterchief");
$data->update("deadline","chief1",$date2);


 }

public function full($name,$mail,$city,$address,$pasword){

	 if ($mail ==" " || $name ==" " || $city ==" " || $address == " " || $pasword ==" "){
	 	 return "false";
	 }
	 if ( !preg_match( "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$mail ) ){
	 	return "false";
	 }
	 if (!preg_match("/^[a-zA-Z ]*$/",$name)){
	 	return "false";
	 }
	 if (!preg_match("/^[a-zA-Z ]*$/",$city)){
	 	return "false";
	 }
	 if (!preg_match("/^[a-zA-Z ]*$/",$address)){
	 	return "false";
	 }
	 
	 else return "true";





}

public function check_pay (){

$conn = mysqli_connect("localhost","root","","masterchief");

	$mySql =" SELECT * from rent ";
    $result = mysqli_query($conn,$mySql);

   $count = mysqli_num_rows($result);

        if ($count ==1){
        
        return true;
    }
else {
	return false;
}

}
}



?>
