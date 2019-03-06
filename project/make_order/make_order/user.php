<?php 
include_once "complain.php";
    include_once "make_complain.php";
include_once "order_class.php";
include_once "connection.php";
 class user implements makeComplain{
function make_complain()
{
$conn = mysqli_connect("localhost","root","","bosy");
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
} 
	$comp = new complain ();
	$comp->subject = $_POST["subject"];
	$comp->details = $_POST["details"];
	$comp->reason  = $_POST["reason"];
$sql = "INSERT INTO complain (subject, details, reason)
VALUES ('$comp->subject', '$comp->details', '$comp->reason ')";

 if ($conn -> query($sql)==TRUE){
 	return true;
 }else{ return false ;}
}



  function  make_order (){
$conn = new connection ("localhost","root","","masterchief");
 $order = new order ();
 $order->recipe = $_POST["recipe"];
 $order->size = $_POST["size"];
 $order->quantity=$_POST["quantity"];
 $order->comment=$_POST["comment"];
 $order->address =$_SESSION["address"];
 $sql = "INSERT INTO orderr (recipe,size,quantity,comment,address,phone)VALUES('$order->recipe','$order->size','$order->quantity','$order->comment','$order->address','$order->phone')";
if ($conn->queryy($sql)==TRUE){?>
<script>
alert('ur order was send succ !');
window.location.href='home1.php';
</script>
<?php }
else {
    echo " no ";

}


}}
?>

