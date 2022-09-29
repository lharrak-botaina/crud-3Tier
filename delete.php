<?php
    include "access/studentDA.php";

if(isset($_GET['id'])){

    $studentDA = new StudentDA();
    $id = $_GET['id'] ;
    $studentDA->DeleteStudent($id);
        
    header('Location: index.php');
}
?>