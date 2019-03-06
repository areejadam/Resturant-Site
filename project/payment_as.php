<?php 
include_once "admin_class.php";

if (isset($_POST["pay"])){
	 $admin = new admin_class();
$admin->pay_the_rent();?>

<script>
alert(' No new complains');
window.location.href='home_admin.php';
</script>
<?php
}
?>