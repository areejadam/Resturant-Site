<?php
include_once "database_class.php";
 include_once "person.php";
 include_once "make_complain.php";
 include_once "order_class.php";
 include_once "bill_class.php";
 class user extends person implements makeComplain{

 	function make_reservation (){
$data = new database ("localhost","root","","masterchief");
$result=$data->select_where("reservation","date",$_POST['date']);
if ($row= mysqli_fetch_assoc($result)){
	?>

	<script>
alert(' change the appointment .. please !');
window.location.href='reservation.php';
</script>
	<?php

}
else {
	?>
	<script>
alert('please follow ur email .. to recieve the confirm. ');
window.location.href='home1.php';
</script>
	<?php
	$sql = "INSERT INTO reservation (title,type,date,mail) VALUES ('".$_POST["title"]."','".$_POST["type"]."','".$_POST["date"]."','".$_SESSION["mail"]."')";
	$data->queryy($sql);
}

 	}

function  edit_my_account (){
	
 	$newname = $_POST["newname"];
  
$data = new database("localhost","root","","masterchief");
if ($_SESSION["type"]=="user"){
	$table ="users";}
	if ($_SESSION["type"]=="chief"){
		$table ="chief1";
	}
	if ($_SESSION["type"]=="admin"){
		$table ="admin1";
	}
	if ($_SESSION["type"]=="delivery"){
		$table ="deliveryboss";
	}
$res=$data->update_profile ($newname,$table);

 


 
return $res ;}


 function give_feedback(){
 	if (isset($_POST["btn"])){
$conn = new database("localhost","root","" , "masterchief") ;
$mysql = "INSERT INTO feedback (details) VALUES ('".$_POST["details"]."')" ;
if($conn -> queryy($mysql) == TRUE){
	return TRUE ;
}
else{
	return false ;
	echo"no";
}
}

}
function make_complain()
{ if (isset($_POST["btn"])){
$conn = mysqli_connect("localhost","root","","masterchief");
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
} 
	$comp = new complain ();
	$comp->subject = $_POST["subject"];
	$comp->details = $_POST["details"];
	$comp->reason  = $_POST["reason"];
$sql = "INSERT INTO complains (subject, details, reason)
VALUES ('$comp->subject', '$comp->details', '$comp->reason ')";

 if ($conn -> query($sql)==TRUE){
 	?>
 	<script>
alert('ur complain is recorded succ !');
window.location.href='home1.php';
</script> 

<?php
return true;

 }
 else{ ?>
 <script>
alert('error .. please record ur complain again !');
window.location.href='complainpage.php';
</script><?php
 	return false ;}
}


}
function view_bill (){
$bill = new bill ();
$bill->type = $_POST["recipe"];

$conn = new database("localhost","root","","masterchief");

$sql = "SELECT * FROM myrecipe WHERE name = '".$_POST["recipe"]."' ";
$result = $conn->queryy($sql); 

$row = mysqli_fetch_assoc($result);
$price=$row["cost"];
$price=$price*$_POST["quantity"];
if ($_POST["size"]=="large"){
	$price=$price+5;
}
if ($_POST["size"]=="medium"){
		$price=$price+2;}

$_SESSION["price"]=$price;
}

function  make_order (){
$conn = new database ("localhost","root","","masterchief");
 $order = new order ();
 $order->recipe = $_POST["recipe"];
 $order->size = $_POST["size"];
 $order->quantity=$_POST["quantity"];
 $order->comment=$_POST["comment"];
 $order->address =$_SESSION["address"];
 $order->phone = $_POST["phone"];
 

 $sql = "INSERT INTO order1 (recipe,size,quantity,comment,address,phone)VALUES('$order->recipe','$order->size','$order->quantity','$order->comment','$order->address','$order->phone')";

if ($conn->queryy($sql)==TRUE){
	 $conn = mysqli_connect("localhost","root","","masterchief");
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}
 $sqll = "INSERT INTO order2 (recipe,size,quantity,comment,address,phone)VALUES('$order->recipe','$order->size','$order->quantity','$order->comment','$order->address','$order->phone')";

    $result = mysqli_query($conn, $sqll);
	$user = new user ();
	$user->view_bill();?>
<script>
alert('Thanks <?php echo $_SESSION["username"]  ; ?> ! \n your order will be arrive in hour from now .. \n  PRICE : <?php echo $_SESSION["price"]?> EGY' );
window.location.href='home1.php';
</script>
<?php }
else {
    echo " no ";

}


}

function search_recipe (){
	if (isset($_POST["btn"])){
		$se = new database("localhost","root","","masterchief");
$result = $se->search($_POST["search"]);
$row = mysqli_fetch_assoc($result);

?>
<div id='img_div'>
<img src="data:image;base64,<?php echo $row["image"]?>">

     </div>

<label><h3>Name of recipe : </label>

<label><?php echo $row["name"] ; ?></label></h3>

<label><h3>type of recipe : </label>
<label><?php echo $row["type"] ; ?></label></h3>
<label><h3>Date of recipe : </label>
<label><?php echo $row["date"] ; ?></label></h3>
<label><h3>price of recipe : </label>
<label><?php echo $row["cost"] ; ?> EGY</label></h3>
<label><h3>Date of details : </label>
<label><?php echo $row["details"] ; ?></label></h3>


<?php
}


 }}



?>