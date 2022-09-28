<?php


include("acess/studentManager.php");
class StudentFunction{
    private $gestionEmploye = null;


    public function __construct(){
        $this->studentManager = new studentManager();
    } 
    

    public function GetAllstudents(){
       
        return $this->studentManager->display();
    }
    public function AddStudent($student){
       
        return $this->studentManager->insert($student);
    }
    // public function EditEmploye($id){
       
    //     return $gestionEmploye->RechercherParId($id);
    // }

}
?>