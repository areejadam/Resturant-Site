<?php
include_once "connection.php";
class database {


    private $link;
    private $host, $username, $password, $database;

    public function __construct($host, $username, $password, $database){
        $this->host        = $host;
        $this->username    = $username;
        $this->password    = $password;
        $this->database    = $database;


        $this->link = mysqli_connect($this->host, $this->username, $this->password , $this->database);
if (!$this->link) {
    die("Connection failed: " . mysqli_connect_error());
}

       
        return true;
    }

public function query($query) {
        $result = mysqli_query($this->link,$query);

        if ($result){
        
        return true;
    }
else {
	return false;
}}

public function queryy($query) {
        $result = mysqli_query($this->link,$query);
        if (!$result){
        
        return false;
    }
else {
    return $result ;
}}
 function close (){

                mysqli_close($this->link);  }

 public function database_all_array($database_result) {
        $array_return=array();
        while ($row = mysql_fetch_array($database_result)) {
            $array_return[] = $row;
        }
//        if(count($array_return)>0)
        return $array_return;


    }


public function update ($coulum,$table_name,$value){
     $conn = new connection ("localhost","root","","masterchief");
$mySql =" UPDATE $table_name set $coulum = '$value' ";
$result = $conn->queryy($mySql);
return $result ; 
}
    

    public function select ($table_name){
        $conn = new connection ("localhost","root","","masterchief");
$mySql =" SELECT * from $table_name";
$result = $conn->queryy($mySql);
return $result ; 

    }

     public function select_where ($table_name,$coulum ,$value){
        $conn = new connection ("localhost","root","","masterchief");
$mySql =" SELECT * from $table_name where $coulum = '$value'";
$result = $conn->queryy($mySql);
return $result ; 

    }
    public function delete_where ($table_name ,$coulum, $value){
$conn = new connection ("localhost","root","","masterchief");
$mySql =" DELETE  From $table_name where $coulum = '$value' ";
$result = $conn->queryy($mySql);
return $result ;

    }
public function search ($value){
$conn = mysqli_connect("localhost","root","","masterchief");
$sql = "SELECT * FROM myrecipe WHERE name = '$value'";
$result = mysqli_query($conn, $sql); 
return $result;

}

public function update_profile($newname,$table){

      $conn = new database ("localhost","root","","masterchief");
$sql = "UPDATE $table SET ".$_SESSION["coulum"]." ='$newname' WHERE mail='".$_SESSION["mail"]."'";
if ($conn -> queryy($sql) == TRUE) {
  
$res= "TRUE";

$new = $_SESSION["coulum"];
$_SESSION["$new"]= $_POST["newname"];

}
 else {
$res="false";
}

 
return $res ;
}

    public function delete ($table_name){
    $conn = new connection ("localhost","root","","masterchief");
$mySql =" DELETE  From $table_name";
$result = $conn->queryy($mySql);
return $result ;      

    }

public function  insert ($table_name,$coulom,$data){

    $conn = new connection ("localhost","root","","masterchief");

$mySql ="INSERT into $table_name ($coulom)  Values ('$data') ";
$result = $conn->queryy($mySql);
return $result ; 
}



 



    public function update_where ($table_name,$coulum,$new,$coulum2,$value){
    
     $conn = new connection ("localhost","root","","masterchief");
$mySql =" UPDATE $table_name SET $coulum = '$new' WHERE $coulum2 ='$value'";
$result = $conn->queryy($mySql);
return $result ; 
}


    function update_pic (){
  $rec = new recipes ();

  if (isset($_POST['updatebtn1'])){

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

$_SESSION["image_rec"]=$image;

    $qry =" UPDATE  myrecipe SET image ='".$_SESSION["image_rec"]."' WHERE name = '".$_SESSION["name_rec"]."' ";
    $result = mysqli_query($conn,$qry);
    if($result){
?>
 <script>
alert('recipe added succ ..  !');
window.location.href='viewrecTABLE.php';
</script>";
<?php    }
    else {?>

         <script>
alert('recipe not added added succ ..  !');
window.location.href='update_rec1.php';
</script>";

    <?php }
}?>
 <?php
    }
}


}
/** **/



?>