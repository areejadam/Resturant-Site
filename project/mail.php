<?php
if (isset($_POST["send"])){

$message = $_POST["msg"];
$subject = $_POST["subject"];
$to = $_POST["to_textarea"];
$headers="From: areejadam0@gmail.com";
mail($to,$subject,$message,$headers);
?>

<script>
alert('ur message was send succ !');
window.location.href='home1.php';
</script>
<?php 
}


?>