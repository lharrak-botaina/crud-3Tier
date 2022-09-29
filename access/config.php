<?php


// class __DatabaseConnection {

//     private $dbUser;
//     private $dbPassword;
//     private $dbName;
//     private $dbHost;

//     public function DatabaseConnection() {
//         $this->dbUser = 'root';
//         $this->dbPassword = '';
//         $this->dbName = 'crud-3Tier';
//         $this->dbHost = 'localhost';
//     }

//     public function GetDB() {
//         $db = new ezSQL_mysql($this->dbUser, $this->dbPassword, $this->dbName, $this->dbHost);
//         return $db;
//     }
// }



function getConnection(){
      
      $Connection = mysqli_connect('localhost', 'root', '', 'crud-3tier');
     
   
 
  
  return $Connection;
  
}

?>