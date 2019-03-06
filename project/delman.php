

<?php
include "database_class.php";
include 'user.php';
include 'complain.php';

class delivery_man {
 function reschdule (){
$conn = new database("localhost","root","","masterchief");
$result=$conn->update_where ("delivery_boys","work_days",$_POST["day"],"name",$_POST["name"]);
if ($result){
  ?>

  <script>
alert('updated succ..');
window.location.href='table.php';
</script>

  <?php 
} else {

    ?>

  <script>
alert('error ..');
window.location.href='deliveryMan_home.php';
</script>

  <?php 
}


}
 


  function view_table (){
$conn = new database("localhost","root","","masterchief");
$result1= $conn->select_where("delivery_boys","work_days","saturday");
$result2 = $conn->select_where("delivery_boys","work_days","sunday");
$result3 = $conn->select_where("delivery_boys","work_days","monday");
$result4 = $conn->select_where("delivery_boys","work_days","tuesday");
$result5 = $conn->select_where("delivery_boys","work_days","wednesday");
$result6 = $conn->select_where("delivery_boys","work_days","thursday");
$result7 = $conn->select_where("delivery_boys","work_days","friday");

$count=0;
  while ($count!=10){
    $row1=mysqli_fetch_assoc($result1);
    $row2=mysqli_fetch_assoc($result2);
    $row3=mysqli_fetch_assoc($result3);
    $row4=mysqli_fetch_assoc($result4);
    $row5=mysqli_fetch_assoc($result5);
    $row6=mysqli_fetch_assoc($result6);
    $row7=mysqli_fetch_assoc($result7);

    echo "<tr>";
    echo "<td>"  .$row1['name'] ."</td> <td>". $row2['name'] ."</td> <td>".$row3['name']."</td> <td>".$row4['name']."</td> <td>".$row5['name']."</td> <td>".$row6['name']."</td> <td>".$row7['name'];
    
    echo "</tr>";
    $count++;}



  }

function make_complain()
{
 if (isset($_POST["btn"])){
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
window.location.href='deliveryMan_home.php';
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


function view_delivery_boys() {

// Create connection
$db = new database('localhost' , 'root' ,'' ,'masterchief');
$query = $db->select("delivery_boys");
if (mysqli_num_rows ($query)>0) {
  while ($row= mysqli_fetch_assoc($query)) {
    echo "<tr>";
    
    echo "<td>"  .$row['name'] . "</td>";
    echo "<td>"  .$row['phones'] . "</td>";
    echo "<td>"  .$row['work_days'] . "</td>";
   
    echo "</tr>" ;
  }
}
}


//*************************************************


function add_delivery_boys(){
    //if ($_POST["save"])
// Create connection
$conn = new database ("localhost", "root", "", "masterchief");


$sql = "INSERT INTO delivery_boys (name, phones , work_days)
VALUES ('".$_POST ["name"]."','".$_POST ["telephone"]."','".$_POST ["day"]."')";


        $result = $conn->query($sql);
    if ($result){
        ?>
        <script>
alert('<?php echo $_POST["name"]."  is added to ur team succ !" ?>');
window.location.href='deliveryMan_home.php';
</script>
<?php 
    }


}



function delete_delivery_boys(){

if (isset($_POST["delete"])){
// Create connection
$conn = new connection ("localhost","root","","masterchief");
$mySql =" DELETE  From delivery_boys where name ='".$_POST["name"]."'";
$result = $conn->queryy($mySql);
if ($result){
  ?>
  <script>
alert('deleted succ  ..  !');
window.location.href='deliveryMan_home.php';
</script>
  <?php
}else {
  ?>
  <script>
alert(' error ..  !');
window.location.href='del.php';
</script>
<?php
}




}
}
}

?>