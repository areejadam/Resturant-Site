<?php 
include_once 'database_class.php';
include_once 'person.php';
include_once 'chief_class.php';
if (isset($_POST["confirm"])){


$message = " your reservation in confirmed .";
$subject = "reservation";
$to = $_SESSION["mail_rec"];
$headers="From: areejadam0@gmail.com";
mail($to,$subject,$message,$headers);

$data = new database ("localhost","root","","masterchief");
$data->delete_where ("reservation","date",$_SESSION["date_rec"]);
?>
<script>
alert('The reservation is confirmed !');
window.location.href='view_reservation.php';
</script>
<?php
}
if (isset($_POST["refuse"])){


$message = " your reservation in refused .";
$subject = "reservation";
$to = $_SESSION["mail_rec"];
$headers="From: areejadam0@gmail.com";
mail($to,$subject,$message,$headers);

$data = new database ("localhost","root","","masterchief");
$data->delete_where ("reservation","date",$_SESSION["date_rec"]);
?>
<script>
alert('The reservation is refused !');
window.location.href='view_reservation.php';
</script>
<?php
}

?>