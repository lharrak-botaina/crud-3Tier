<?php
 include 'student.php';
 include 'config.php';
class studentManager{


    
    public function insert($student){

        $firstName = $student->getFirstNom();
        $lastName = $student->getLastName();
        $birthday = $student->getBirthday();
        // requête SQL
        $insertRow="INSERT INTO student(firstName, lastName, birthday) 
                                VALUES('$firstName', '$lastName', '$birthday')";

        mysqli_query(getConnection(), $insertRow);
    }

    

    public function display(){
        $SelctRow = 'SELECT id, firstName, lastName, birthday FROM student';
        $query = mysqli_query(getConnection() ,$SelctRow);
        $students_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($students_data as $value_Data) {
            $student = new Employe();
            $student->setId($value_Data['id']);
            $student->setFirstName($value_Data['firstName']);
            $student->setLastName($value_Data['lastName']);
            $student->setBirthday ($value_Data['birthday']);
            array_push($TableData, $student);
        }
          return $TableData;
    }



}
?>