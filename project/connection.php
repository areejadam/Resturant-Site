<?php

class connection {


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
        $count = mysqli_num_rows($result);

        if ($count ==1){
        
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



}


?>