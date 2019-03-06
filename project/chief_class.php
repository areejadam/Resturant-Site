<?php 
include_once ('connection.php');
include_once ('recipe_class.php');
include_once ('database_class.php');
include_once ('person.php');
$rec = new recipes ();
class chief {

  function view_reservation(){
$data = new database ("localhost","root","","masterchief");
$result = $data->select("reservation");
if ($row=mysqli_fetch_array($result)){
  echo "<label>Title : </label>".$row["title"];
  echo "<br><br>" ;
    echo "<label>Data : </label>".$row["date"];
      echo "<br><br>" ;

      echo "<label>Type : </label>".$row["type"];
        echo "<br><br>" ;
$_SESSION["mail_rec"]=$row["mail"];
$_SESSION["date_rec"]=$row["date"];?>

<form method="POST" action="confirm.php">
 <input type="submit" name="confirm" value="Confirm">
 <input type="submit" name="refuse" value="Refuse">


 </form>

<?php

  
}else {?>
  <center><?php
  echo "<h3> Havn't any Reservation now . </h3>";
}

  }

 function add_recipes (){

  $rec = new recipes ();

  if (isset($_POST['sumit'])){

    if(getimagesize($_FILES['image']['tmp_name'])==FALSE ){
        echo "please select an image !";
    }
    else {
        $image=addslashes($_FILES['image']['tmp_name']);
        $name=addslashes($_FILES['image']['name']);
        $image = file_get_contents($image);
        $image= base64_encode($image);
 $conn = mysqli_connect("localhost","root","","masterchief");
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
} 
$rec->type=$_POST["type"];
$rec->name=$_POST["name"];
$rec->cost=$_POST["cost"];
$rec->details=$_POST["details"];
$_SESSION["image_rec"]=$image;
$_SESSION["name_rec"]=$rec->name;
$_SESSION["cost_rec"]=$rec->cost;
$_SESSION["details_rec"]=$rec->details;
    $qry =" INSERT INTO myrecipe (name,image,type,cost,details) values ('$rec->name','$image','$rec->type','$rec->cost','$rec->details')";
    $result = mysqli_query($conn,$qry);
    if($result){
?>
 <script>
alert('recipe added succ ..  !');
window.location.href='home_chief.php';
</script>";
<?php    }
    else {?>

         <script>
alert('recipe not added added succ ..  !');
window.location.href='add_recipe.php';
</script>";

    <?php }
}?>
 <?php
    }
}


public function view(){
    
$conn = new connection ("localhost","root","","mastercheif");
$name = $_POST ['name'];
echo $name;
$myquery = "select * from myrecipe where name = $_POST ['name'] ";
while ($myrecord=mysqli_fetch_array($myquery , mysql_assoc))

  echo "<br /> Image  " . $myrecord['image'];
  echo "<br /> Name :  " . $myrecord['name'];
  echo "<br /> Type   :  " . $myrecord['type'];
  echo "<br /> Details  :  " . $myrecord['details'];
  echo "<br /> Cost  :  " . $myrecord['cost'];
  echo "<br /> Date  :  " . $myrecord['date'];
}



public function show_feedbacks (){

$data = new database ("localhost","root","","masterchief");
 
 $result = $data->select("feedback");

 if (mysqli_num_rows($result) > 0)
 {
   while ($row = mysqli_fetch_assoc($result))
   {
     echo "<tr><td> " . $row['details']. "</td></tr>";
     
   }
 }
 else {?>
   <script>
alert('not have any feedbacks now  ..  !');
window.location.href='home_chief.php';
</script>
<?php
}

 $data->delete ("feedback");




}

public function show_order (){
  

$data = new database ("localhost","root","","masterchief");
$result = $data->select("order2");
        $count = mysqli_num_rows($result);

if ($count){
$myrecord = mysqli_fetch_assoc($result) ;

?>

<tr>
  <td class="text-left"> <?php echo $myrecord['date']; ?></td>

  <td class="text-left"> <?php echo $myrecord['recipe']; ?></td>
  <td class="text-left"> <?php echo $myrecord['size']; ?></td>
  <td class="text-left"> <?php echo $myrecord['quantity']; ?></td>
  <td class="text-left"> <?php echo $myrecord['address']; ?></td>
  <td class="text-left"> <?php echo $myrecord['phone']; ?></td>
  <td class="text-left"> <?php echo $myrecord['comment']; ?></td>

 </tr>
<?php 
while ($myrecord = mysqli_fetch_assoc($result) )  
    { ?>

  <tr>
   <td class="text-left"> <?php echo $myrecord['date']; ?></td>

  <td class="text-left"> <?php echo $myrecord['recipe']; ?></td>
  <td class="text-left"> <?php echo $myrecord['size']; ?></td>
  <td class="text-left"> <?php echo $myrecord['quantity']; ?></td>
  <td class="text-left"> <?php echo $myrecord['address']; ?></td>
  <td class="text-left"> <?php echo $myrecord['phone']; ?></td>
  <td class="text-left"> <?php echo $myrecord['comment']; ?></td>

 </tr>

<?php 


}
$res = $data->delete ("order2");
}else {
  ?>
 <script>
alert('not have any orders now  ..  !');
window.location.href='home_chief.php';
</script>

  <?php
}
}


public function view_recipe (){



$data = new database ("localhost","root","","masterchief");
$result = $data->select("myrecipe");
$myrecord = mysqli_fetch_assoc($result) ;
?>

<tr>
  <td> <?php echo '<img id="my" height="150" width="320" src="data:image;base64,'.$myrecord['image'].' "> '; ?></td>
  <td class="text-left"> <?php echo $myrecord['name']; ?></td>
  <td class="text-left"> <?php echo $myrecord['type']; ?></td>
  <td class="text-left"> <?php echo $myrecord['details']; ?></td>
  <td class="text-left"> <?php echo $myrecord['cost']; ?></td>
  <td class="text-left"> <?php echo $myrecord['date']; ?></td>
 </tr>
<?php 
while ($myrecord = mysqli_fetch_assoc($result) )  
    { ?>

  <tr>
  <td> <?php echo '<img id="my" height="150" width="320" src="data:image;base64,'.$myrecord['image'].' "> '; ?></td>
  <td class="text-left"> <?php echo $myrecord['name']; ?></td>
  <td class="text-left"> <?php echo $myrecord['type']; ?></td>
  <td class="text-left"> <?php echo $myrecord['details']; ?></td>
  <td class="text-left"> <?php echo $myrecord['cost']; ?></td>
  <td class="text-left"> <?php echo $myrecord['date']; ?></td>
 </tr>

<?php 


}
}

public function update_recipe($name){
$conn = new connection ("localhost","root","","masterchief");
$mySql =" SELECT * From myrecipe where name ='".$_POST["recipe"]."'";
$result = $conn->queryy($mySql);
if ($result){
 $myrecord = mysqli_fetch_assoc($result) ;
$_SESSION["image_rec"]=$myrecord["image"];
$_SESSION["name_rec"]=$myrecord["name"];
$_SESSION["details_rec"]=$myrecord["details"];
$_SESSION["cost_rec"]=$myrecord["cost"];
$_SESSION["type_rec"]=$myrecord["type"];

header('location:update_rec1.php');
}?>
<script>
alert('error ..  !');
window.location.href='viewrecTABLE.php';
</script><?php
}

public function update_myrecipe(){
$conn = new database ("localhost","root","","masterchief");

  
$sql = "UPDATE myrecipe SET ".$_SESSION["coulum"]." ='".$_POST["newname"]."' WHERE name='".$_SESSION["name_rec"]."'";
if ($conn -> queryy($sql) == TRUE) {
  
$res= "TRUE";

$new = $_SESSION["coulum"]."_rec";
$_SESSION["$new"]= $_POST["newname"];

}
 else {
$res="false";
}

 
return $res ;


}
public function delete_recipe($name){
$conn = new connection ("localhost","root","","masterchief");
$mySql =" DELETE  From myrecipe where name ='".$_POST["recipe"]."'";
$result = $conn->queryy($mySql);
if ($result){
  ?>
  <script>
alert('deleted succ  ..  !');
window.location.href='viewrecTABLE.php';
</script>
  <?php
}else {
  ?>
  <script>
alert(' error ..  !');
window.location.href='home_chief.php';
</script>
<?php
}

}













}












?>