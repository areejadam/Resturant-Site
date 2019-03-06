
<?php 

 include 'person.php';

if ($_SESSION["type"]=="chief"){
require ('home_chief.php');
}
if ($_SESSION["type"]=="admin"){
require ('home_admin.php');}
if ($_SESSION["type"]=="user"){
require ('home1.php');}
if ($_SESSION["type"]=="delivery"){
require ('deliveryMan_home.php');}


?>