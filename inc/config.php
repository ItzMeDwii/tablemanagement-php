<?php

final class Config {
    public static $TRUE = "1", $FALSE = "0";

    public function __construct($connect = true) {
        
    // Website Info
    $this->name = "TableMan";
    $this->index = "https://dwii.me/project3/index.php";
    
    // Database Info
    $this->db_driver = "mysqli";
    $this->db_host = "localhost";
    $this->db_port = "3306";
    $this->db_username = "azalelna_dwii";
    $this->db_password= "kulitAYAMKFC14045";
    $this->db_name= "azalelna_storeman";
        
}
}

?>
