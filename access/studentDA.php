<?php
 include 'student.php';
 include 'config.php';
class StudentDA{


    
    public function AddStudent($student){

        $firstName = $student->getFirstName();
        $lastName = $student->getLastName();
        $birthday = $student->getBirthday();
        $insertRow="INSERT INTO student(firstName, lastName, birthday) 
                                VALUES('$firstName', '$lastName', '$birthday')";

        mysqli_query(getConnection(), $insertRow);
    }

    

    public function getStudentes(){
        $SelctRow = 'SELECT * FROM student';
        $query = mysqli_query(getConnection() ,$SelctRow);
        $students_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($students_data as $value_Data) {
            $student = new Student();
            $student->setId($value_Data['id']);
            $student->setFirstName($value_Data['firstName']);
            $student->setLastName($value_Data['lastName']);
            $student->setBirthday ($value_Data['birthday']);
            array_push($TableData, $student);
        }
          return $TableData;
    }

    public function DeleteStudent($id) {

        $sql = "DELETE FROM student WHERE id = $id";

        return   mysqli_query(getConnection(), $sql);
    }



    public function Edit($id){
        $SelectRowId = "SELECT * FROM student WHERE id=$id";
        $result = mysqli_query(getConnection(),  $SelectRowId);
        $student_data = mysqli_fetch_assoc($result);
        $student = new Student();
        $student->setId($student_data['id']);
        $student->setFirstName($student_data['firstName']);
        $student->setLastName ($student_data['lastName']);
        $student->setBirthday($student_data['birthday']);
        
        return $student;
    }


    public function Update($id,$firstName,$lastName,$birthday){
        // Requête SQL
        $RowUpdate = "UPDATE student SET 
        firstName='$firstName', lastName='$lastName', birthday='$birthday'
        WHERE id=$id";

        mysqli_query(getConnection(),$RowUpdate);

    }


}
?>