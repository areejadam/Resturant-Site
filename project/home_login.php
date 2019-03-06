 

<?php


include ("connection.php");
include_once ("person.php");
include_once ("database_class.php");
include_once ("masterchief_class.php");

 $conn = new connection ("localhost","root","","masterchief");


if($_SESSION["type"]=="user"){
$mySql="SELECT* FROM users WHERE mail='".$_POST["mail"]."' AND password='".$_POST["password"]."'";}
if($_SESSION["type"]=="admin"){
$mySql="SELECT* FROM admin1 WHERE ID='".$_POST["id"]."' AND password='".$_POST["password"]."'";}
if($_SESSION["type"]=="chief"){
$mySql="SELECT* FROM chief1 WHERE ID='".$_POST["id"]."' AND password='".$_POST["password"]."'";


}
if($_SESSION["type"]=="delivery"){
$mySql="SELECT* FROM deliveryboss WHERE ID='".$_POST["id"]."' AND password='".$_POST["password"]."'";


}
if ($conn->query($mySql)){
$con=mysqli_connect("localhost","root","","masterchief");
	
	$result = mysqli_query ($con , $mySql);
	$row = mysqli_fetch_Array ($result,MYSQLI_ASSOC);
	$_SESSION ["password"]= $row["password"];
    $_SESSION ["username"]=$row["username"];
    $_SESSION ["mail"]=$row["mail"];
    $_SESSION ["city"]=$row["city"];
    $_SESSION ["address"]=$row["address"];
    $_SESSION ["date"]=$row["date"];
  if ($_SESSION["type"]=="user"){

            $_SESSION["pre_url"]="home1.php";

	require 'home1.php';}
    if ($_SESSION["type"]=="chief"){
        $_SESSION["ID_chief"]=$row["ID"];
        $date2 = date("Y-m-d H:i:s.u");

    if (strtotime($row["deadline"])<strtotime($date2)){
        $master = new masterchief();
        $result = $master->check_pay();
       if ($result==false){
$data =new database ("localhost","root","","masterchief");
$data->delete ("chief1");
$data2 =new database ("localhost","root","","masterchief");

$data2->delete ("rent");?>
<script>
alert('please make sure .. u are pay the rent before !');
window.location.href='myhome.php';
</script>
<?php
}else {
    $data2 =new database ("localhost","root","","masterchief");

$data2->delete ("rent");
        $master->check_deadline();
    }}
        $result = mysqli_query ($con , $mySql);

        $row = mysqli_fetch_Array ($result,MYSQLI_ASSOC);

        $_SESSION["deadline"]=$row["deadline"];
        $_SESSION["pre_url"] = "home_chief.php";
        require 'home_chief.php';
    }
    if($_SESSION["type"]=="admin"){
                $_SESSION["pre_url"]="home_admin.php";

        require 'home_admin.php';
    }

    if($_SESSION["type"]=="delivery"){
                $_SESSION["pre_url"]="home_delivery.php";

        require 'deliveryMan_home.php';
    }

} else{ 

require 'login.php';
echo "<script>
alert('incorrect mail or password');
window.location.href='login_as.php';
</script>";
}


   ?>