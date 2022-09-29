<?php


include("access/studentDA.php");
class StudentBLL{
    private $studentDA= null;

  

    public function __construct(){
        $this->studentDA = new StudentDA();

      
    } 
    

    public function GetAllStudents(){
       
        return $this->studentDA->getStudentes();
    }
    public function AddStudent($student){
       
        return $this->studentDA->AddStudent($student);
    }
    public function EditStudent($id){
       
       $EditData = $this->studentDA->Edit($id);
       return $EditData;  
    }


    
    public function DeleteStudent($id) {

        $affectedRows = 0;
        
        if($id > 0) {
            if ($this->IsIdExists($id)) {
                $affectedRows = (int)$this->studentDal->DeleteStudent($id);
            } else {
                $this->errorMessage = 'Record not found.';
            }
        } else {
            $this->errorMessage = 'Invalid Id.';
        }

        return $affectedRows;
    }


}



?>