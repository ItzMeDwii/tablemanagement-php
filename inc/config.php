<?php

final class Config {
    public static $TRUE = "1", $FALSE = "0";

    public function __construct($connect = true) {
        
    // Website Info
    $this->name = "TableMan";
    $this->index = "index.php";
    
    // Database Info
    $this->db_driver = "mysqli";
    $this->db_host = "localhost";
    $this->db_port = "3306";
    $this->db_username = "";
    $this->db_password= "";
    $this->db_name= "n";
        
}
}

?>
