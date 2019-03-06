
<?php 
include_once "connection.php";
//include_once "person.php";
include_once "complain_class.php";
include_once "database_class.php";
include_once "person.php";

 class admin_class //extends person 
 {
  public $admin_id;
  //$complain = new complain_class();


public function ReadComplains (){

$db = new database ("localhost","root","","masterchief");
 
 $record = $db->select("complains");

 if (mysqli_num_rows($record) > 0)
 {
   while ($row = mysqli_fetch_assoc($record))
   {

   	echo "<tr>";

     echo "<td> " . $row['subject']. "</td>";
     echo "<td>" .$row['details'] . "</td> ";
     echo "<td>" . $row['date']."</td>" ;
    echo "</tr>" ;
   }
 }
 else {?>
   <script>
alert(' No new complains');
window.location.href='home_admin.php';
</script>
<?php
}

 $db->delete ("complains");



}

public function delete ($name){
  $data = new database ("localhost","root","","masterchief");
  $data->delete ($name);
}

public function chiefinfo(){
$db = new database('localhost' , 'root' ,'' ,'masterchief');
$query = $db->select("chief1");
if (mysqli_num_rows ($query)>0) {
	while ($row= mysqli_fetch_assoc($query)) {
		echo "<tr>";
		echo "<td>"  .$row['ID'] . "</td>";
		echo "<td>"  .$row['username'] . "</td>";
		echo "<td>"  .$row['mail'] . "</td>";
		echo "<td>"  .$row['city'] . "</td>";
		echo "<td>"  .$row['address'] . "</td>";
		echo "<td>"  .$row['date'] . "</td>";
		echo "<td>"  .$row['password'] . "</td>";
		echo "</tr>" ;
	}
}







}
public function show_delivery(){
$db = new database('localhost' , 'root' ,'' ,'masterchief');
$query = $db->select("deliveryboss");
if (mysqli_num_rows ($query)>0) {
  while ($row= mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td>"  .$row['ID'] . "</td>";
    echo "<td>"  .$row['username'] . "</td>";
    echo "<td>"  .$row['mail'] . "</td>";
    echo "<td>"  .$row['city'] . "</td>";
    echo "<td>"  .$row['address'] . "</td>";
    echo "<td>"  .$row['date'] . "</td>";
    echo "<td>"  .$row['password'] . "</td>";
    echo "</tr>" ;
  }
}







}

public function show_users(){
$db = new database('localhost' , 'root' ,'' ,'masterchief');
$query = $db->select("users");
if (mysqli_num_rows ($query)>0) {
  while ($row= mysqli_fetch_assoc($query)) {
    echo "<tr>";
    
    echo "<td>"  .$row['username'] . "</td>";
    echo "<td>"  .$row['mail'] . "</td>";
    echo "<td>"  .$row['city'] . "</td>";
    echo "<td>"  .$row['address'] . "</td>";
    echo "<td>"  .$row['date'] . "</td>";
    echo "<td>"  .$row['password'] . "</td>";
    echo "<td>"  .$row['ID'] . "</td>";
    echo "</tr>" ;
  }
}
}

 public function show_orders (){

$db = new database('localhost' , 'root' ,'' ,'masterchief');
$query = $db->select("order1");
if (mysqli_num_rows ($query)>0) {
  $myrecord = mysqli_fetch_assoc($query) ;

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
while ($myrecord = mysqli_fetch_assoc($query) )  
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
}else {
  ?>
 <script>
alert('not have any orders now  ..  !');
window.location.href='home_admin.php';
</script>

  <?php
}

}

public function pdf(){


	$db = new database ("localhost","root","","masterchief");
 
 $record = $db->select("chief1");

 if (mysqli_num_rows($record) > 0)
 {
   while ($myrecord = mysqli_fetch_assoc($record))
   {
?>
    <tr>


  <td class="text-left"> <?php echo $myrecord['ID']; ?></td>
  <td class="text-left"> <?php echo $myrecord['username']; ?></td>
  <td class="text-left"> <?php echo $myrecord['mail']; ?></td>
  <td class="text-left"> <?php echo $myrecord['city']; ?></td>
  <td class="text-left"> <?php echo $myrecord['address']; ?></td>
  <td class="text-left"> <?php echo $myrecord['date']; ?></td>
  <td class="text-left"> <?php echo $myrecord['password']; ?></td>
</tr>
<?php
   }
 }
}



public function pay_the_rent (){


?>
   <label>Chief's ID :</label>

<select name="ID" autofocus multipul required>
<optgroup label='chiefs ID'> 


  
<?php

$data = new database("localhost","root","","masterchief");
    $result = $data->select("chief1"); ?>
    
   <?php 
   $row = mysqli_fetch_assoc($result);?>
   <option> <?php echo $row["ID"] ?></option> 
   <?php $data->insert("rent","ID",$row["ID"]);  
 ?>

   </optgroup>
   </select>
    <?php }
   





}
?>